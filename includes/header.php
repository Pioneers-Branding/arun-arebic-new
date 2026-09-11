<?php
/**
 * header.php — opens the document and renders the sticky site header.
 *
 * Usage from a page:
 *
 *     <?php
 *     $page_title = '...';
 *     require __DIR__ . '/includes/header.php';
 *     ?>
 *     ... page content ...
 *     <?php require __DIR__ . '/includes/footer.php'; ?>
 */

require_once __DIR__ . '/config.php';

/** Current file name, used to highlight the active navigation item. */
$current_page = basename($_SERVER['PHP_SELF']);

/** Show the language switcher only on the home page (as in the design). */
$show_lang_switch = $show_lang_switch ?? ($current_page === 'index.php');
?>
<!DOCTYPE html>
<html lang="<?= SITE_LOCALE ?>" dir="<?= SITE_DIR ?>">
<head>
<?php require __DIR__ . '/header-link.php'; ?>
</head>
<body>

<header class="site-header">
  <div class="site-header__bar">

    <a class="brand" href="<?= page_url() ?>">
      <span class="brand__mark"><?= icon_logo() ?></span>
      <span class="brand__text">
        <b class="brand__name"><?= e(SITE_NAME) ?></b>
        <span class="brand__role"><?= e(SITE_TAGLINE) ?></span>
      </span>
    </a>

    <nav class="nav-main dr-scroll" aria-label="القائمة الرئيسية">
      <?php foreach (nav_items() as $item): ?>
        <a href="<?= e($item['href']) ?>"><?= e($item['label']) ?></a>
      <?php endforeach; ?>
    </nav>

    <div class="site-header__actions">
      <?php if ($show_lang_switch): ?>
        <span class="lang-switch"><b>العربية</b> | <a href="<?= e(SITE_URL_EN) ?>/" hreflang="en">English</a></span>
      <?php endif; ?>

      <a class="btn btn-primary btn-sm" href="<?= page_url() . '#appointment' ?>">احجز موعدك</a>

      <button class="hamburger" type="button"
              id="navToggle" aria-label="القائمة" aria-expanded="false" aria-controls="navMobile">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
          <path d="M4 7h16M4 12h16M4 17h16" stroke="#fff" stroke-width="1.8" stroke-linecap="round"/>
        </svg>
      </button>
    </div>
  </div>

  <nav class="nav-mobile" id="navMobile" aria-label="قائمة الجوال">
    <?php foreach (nav_items() as $item): ?>
      <a href="<?= e($item['href']) ?>"><?= e($item['label']) ?></a>
    <?php endforeach; ?>
  </nav>
</header>
