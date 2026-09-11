<?php
/**
 * header-link.php — everything that belongs inside <head>.
 *
 * Included by header.php. Stylesheets are attached with the <link> method
 * (no inline <style> blocks anywhere on the site) so that a single
 * css/style.css controls the whole design.
 *
 * A page may set any of these before including header.php:
 *   $page_title        string  <title> text
 *   $page_description  string  meta description
 *   $page_canonical    string  canonical URL
 *   $page_og_title     string  Open Graph title  (falls back to $page_title)
 *   $page_og_desc      string  Open Graph description (falls back to description)
 *   $page_schema       string  extra JSON-LD, already encoded
 *   $extra_css         array   additional stylesheets to link after style.css
 */

$page_title       = $page_title       ?? SITE_NAME . ' | استشاري ' . SITE_TAGLINE;
$page_description = $page_description ?? 'الدكتور أرون ساروهـا، استشاري جراحة المخ والأعصاب والعمود الفقري. رعاية متقدمة للدماغ والعمود الفقري بأحدث التقنيات ومعايير طبية عالمية.';
$page_canonical   = $page_canonical   ?? '';
$page_og_title    = $page_og_title    ?? $page_title;
$page_og_desc     = $page_og_desc     ?? $page_description;
$extra_css        = $extra_css        ?? [];
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="index, follow">

<title><?= e($page_title) ?></title>
<meta name="description" content="<?= e($page_description) ?>">

<!-- Open Graph -->
<meta property="og:site_name" content="<?= e(SITE_NAME) ?>">
<meta property="og:locale" content="ar_AR">
<meta property="og:type" content="website">
<meta property="og:title" content="<?= e($page_og_title) ?>">
<meta property="og:description" content="<?= e($page_og_desc) ?>">

<?php if ($page_canonical !== ''): ?>
<link rel="canonical" href="<?= e($page_canonical) ?>">
<?php endif; ?>

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Cairo:wght@600;700;800;900&family=Tajawal:wght@400;500;700&display=swap">

<!-- Site stylesheet (link method) -->
<link rel="stylesheet" href="<?= url('css/style.css') ?>">
<?php foreach ($extra_css as $sheet): ?>
<link rel="stylesheet" href="<?= url($sheet) ?>">
<?php endforeach; ?>

<!-- Icons -->
<link rel="icon" type="image/png" href="<?= url('assets/hero-home.png') ?>">

<?php if (!empty($page_schema)): ?>
<script type="application/ld+json"><?= $page_schema ?></script>
<?php endif; ?>
