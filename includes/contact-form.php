<?php
/**
 * contact-form.php — markup for the appointment request form.
 *
 * The page must have called appointment_handle() before any output and stored
 * the result in $appointment:
 *
 *     $appointment = appointment_handle();          // before header.php
 *     ...
 *     $form_variant = 'full';                       // 'full' or 'compact'
 *     require __DIR__ . '/includes/contact-form.php';
 */

$form_variant = $form_variant ?? 'full';
$appointment  = $appointment  ?? ['status' => '', 'message' => '', 'old' => []];

$old    = static fn(string $key): string => e($appointment['old'][$key] ?? '');
$chosen = $appointment['old']['country'] ?? '';

$countries = ['الإمارات', 'السعودية', 'قطر', 'عُمان', 'الكويت', 'البحرين', 'دولة أخرى'];
$problems  = ['جراحة المخ والأعصاب', 'جراحة العمود الفقري', 'أورام الدماغ', 'الانزلاق الغضروفي', 'تضيّق القناة الشوكية', 'استشارة عامة'];
?>

<form class="form<?= $form_variant === 'compact' ? ' form--compact' : '' ?>" method="post" action="#appointment">
  <input type="hidden" name="appointment_form" value="1">

  <?php if ($appointment['status'] !== ''): ?>
    <div class="form__alert form__alert--<?= $appointment['status'] === 'ok' ? 'ok' : 'err' ?>" role="status">
      <?= e($appointment['message']) ?>
    </div>
  <?php endif; ?>

  <?php if ($form_variant === 'full'): ?>
    <div class="form__head">
      <h3 class="form__title">نموذج طلب الاستشارة</h3>
      <p class="form__note">الحقول المميّزة بعلامة <span class="req">*</span> مطلوبة — يتواصل معك فريقنا خلال 24 ساعة.</p>
    </div>
  <?php endif; ?>

  <div class="form__row">
    <label class="form__field">
      <span>الاسم الكامل <span class="req">*</span></span>
      <input type="text" name="name" required placeholder="الاسم الكامل" value="<?= $old('name') ?>">
    </label>

    <label class="form__field">
      <span>رقم الهاتف / واتساب <span class="req">*</span></span>
      <input type="tel" name="phone" required dir="ltr" placeholder="+971 xx xxx xxxx" value="<?= $old('phone') ?>">
    </label>

    <label class="form__field">
      <span>البريد الإلكتروني</span>
      <input type="email" name="email" dir="ltr" placeholder="email@example.com" value="<?= $old('email') ?>">
    </label>

    <label class="form__field">
      <span>الدولة <span class="req">*</span></span>
      <select name="country" required>
        <option value="">اختر دولتك</option>
        <?php foreach ($countries as $country): ?>
          <option<?= $chosen === $country ? ' selected' : '' ?>><?= e($country) ?></option>
        <?php endforeach; ?>
      </select>
    </label>
  </div>

  <?php if ($form_variant === 'full'): ?>
    <label class="form__field">
      <span>نوع المشكلة / التخصص</span>
      <select name="specialty">
        <?php foreach ($problems as $problem): ?>
          <option<?= ($appointment['old']['specialty'] ?? '') === $problem ? ' selected' : '' ?>><?= e($problem) ?></option>
        <?php endforeach; ?>
      </select>
    </label>
  <?php endif; ?>

  <label class="form__field">
    <span>الرسالة / وصف الحالة</span>
    <textarea name="message" rows="4" placeholder="اشرح حالتك والأعراض التي تعاني منها باختصار..."><?= $old('message') ?></textarea>
  </label>

  <?php if ($form_variant === 'full'): ?>
    <label class="form__upload">
      <span class="form__upload-icon">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M12 16V4m0 0 4 4m-4-4L8 8M5 18v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-1" stroke="#0f9b8e" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </span>
      <span class="u-flex-1">رفع التقارير الطبية أو الأشعة <span class="hint">(اختياري — PDF أو صور)</span></span>
      <input type="file" name="reports[]" multiple accept=".pdf,image/*">
    </label>
  <?php endif; ?>

  <button class="form__submit" type="submit">
    إرسال طلب الاستشارة
    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M20 4 3 11l6 2 2 6 9-15Z" stroke="#fff" stroke-width="1.6" stroke-linejoin="round"/></svg>
  </button>

  <div class="form__secure">
    <svg width="15" height="15" viewBox="0 0 24 24" fill="none"><path d="M6 10V7a6 6 0 0 1 12 0v3M5 10h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-8a1 1 0 0 1 1-1Z" stroke="#0f9b8e" stroke-width="1.5" stroke-linejoin="round"/></svg>
    <p>بياناتك سرية ومحمية وتُستخدم فقط لأغراض الاستشارة الطبية.</p>
  </div>
</form>
