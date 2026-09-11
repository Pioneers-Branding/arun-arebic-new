<?php
/**
 * contact-handler.php — POST processing for the appointment form.
 *
 * Loaded by config.php so the function is available everywhere. A page calls
 * appointment_handle() BEFORE any output, then includes contact-form.php where
 * the form should appear.
 */

/**
 * Validate and (optionally) deliver an appointment request.
 *
 * @return array{status: string, message: string, old: array<string,string>}
 *         status is '' (no submission), 'ok' or 'error'.
 */
function appointment_handle(): array
{
    $result = ['status' => '', 'message' => '', 'old' => []];

    if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST' || !isset($_POST['appointment_form'])) {
        return $result;
    }

    $field = static fn(string $key): string => trim((string) ($_POST[$key] ?? ''));

    $data = [
        'name'      => $field('name'),
        'phone'     => $field('phone'),
        'email'     => $field('email'),
        'country'   => $field('country'),
        'specialty' => $field('specialty'),
        'message'   => $field('message'),
    ];
    $result['old'] = $data;

    $missing = [];
    if ($data['name'] === '')    { $missing[] = 'الاسم الكامل'; }
    if ($data['phone'] === '')   { $missing[] = 'رقم الهاتف'; }
    if ($data['country'] === '') { $missing[] = 'الدولة'; }
    if ($data['email'] !== '' && !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $missing[] = 'بريد إلكتروني صحيح';
    }

    if ($missing) {
        $result['status']  = 'error';
        $result['message'] = 'يرجى إكمال الحقول التالية: ' . implode('، ', $missing) . '.';
        return $result;
    }

    if (MAIL_ENABLED) {
        $body = "طلب استشارة جديد\n\n"
              . "الاسم: {$data['name']}\n"
              . "الهاتف: {$data['phone']}\n"
              . "البريد: {$data['email']}\n"
              . "الدولة: {$data['country']}\n"
              . "التخصص: {$data['specialty']}\n"
              . "الرسالة: {$data['message']}\n";

        @mail(
            MAIL_TO,
            '=?UTF-8?B?' . base64_encode('طلب استشارة من الموقع') . '?=',
            $body,
            "Content-Type: text/plain; charset=UTF-8\r\n"
            . 'From: no-reply@' . ($_SERVER['HTTP_HOST'] ?? 'localhost')
        );
    }

    return [
        'status'  => 'ok',
        'message' => 'شكراً لك! تم استلام طلبك وسيتواصل معك فريقنا قريباً.',
        'old'     => [],
    ];
}
