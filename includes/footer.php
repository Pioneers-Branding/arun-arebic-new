<?php
/**
 * footer.php — site footer, mobile action bar, scripts, closing tags.
 *
 * A page may set before including:
 *   $footer_compact  bool   drop the social row and the "المزيد" column
 *   $extra_js        array  extra script files to load after main.js
 */

$footer_compact = $footer_compact ?? false;
$extra_js       = $extra_js       ?? [];
?>

<footer class="site-footer">
  <div class="site-footer__grid">

    <div>
      <div class="site-footer__brand">
        <span class="site-footer__mark"><?= icon_logo() ?></span>
        <b class="site-footer__name"><?= e(SITE_NAME) ?></b>
      </div>
      <p class="site-footer__about">استشاري جراحة المخ والأعصاب والعمود الفقري — رعاية متقدمة ودعم متكامل للمرضى الدوليين.</p>

      <?php if (!$footer_compact): ?>
        <div class="social">
          <a href="<?= e(FACEBOOK_URL) ?>" target="_blank" rel="noopener" aria-label="Facebook">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="#a9cfca"><path d="M13 10h3l.5-3H13V5c0-.9.2-1.5 1.5-1.5H17V.8C16.5.7 15.4.6 14.1.6 11.5.6 9.7 2.2 9.7 5v2H7v3h2.7v9H13v-9Z"/></svg>
          </a>
          <a href="<?= e(INSTAGRAM_URL) ?>" target="_blank" rel="noopener" aria-label="Instagram">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="#a9cfca"><path d="M12 7.5A4.5 4.5 0 1 0 16.5 12 4.5 4.5 0 0 0 12 7.5Zm0 7.4A2.9 2.9 0 1 1 14.9 12 2.9 2.9 0 0 1 12 14.9Zm4.7-7.6a1 1 0 1 1-1-1 1 1 0 0 1 1 1ZM20 7.3a5.2 5.2 0 0 0-1.4-3.7A5.2 5.2 0 0 0 14.9 2C13.4 2 8.6 2 7.1 2a5.2 5.2 0 0 0-3.7 1.4A5.2 5.2 0 0 0 2 7.1C2 8.6 2 13.4 2 14.9a5.2 5.2 0 0 0 1.4 3.7A5.2 5.2 0 0 0 7.1 20c1.5.1 6.3.1 7.8 0a5.2 5.2 0 0 0 3.7-1.4 5.2 5.2 0 0 0 1.4-3.7c.1-1.5.1-6.3 0-7.6Z"/></svg>
          </a>
          <a href="<?= e(WHATSAPP_LINK) ?>" target="_blank" rel="noopener" aria-label="WhatsApp">
            <?= icon_whatsapp('#a9cfca', '18') ?>
          </a>
        </div>
      <?php endif; ?>
    </div>

    <?php foreach (footer_links() as $heading => $links): ?>
      <?php if ($footer_compact && $heading === 'المزيد') { continue; } ?>
      <div>
        <h4><?= e($heading) ?></h4>
        <div class="site-footer__links">
          <?php foreach ($links as $link): ?>
            <a href="<?= e($link['href']) ?>"><?= e($link['label']) ?></a>
          <?php endforeach; ?>
        </div>
      </div>
    <?php endforeach; ?>

    <div>
      <h4>تواصل</h4>
      <div class="site-footer__contact">
        <span>الهاتف / واتساب: <a href="<?= e(PHONE_LINK) ?>" dir="ltr"><?= e(PHONE) ?></a></span>
        <span>البريد: <a href="mailto:<?= e(EMAIL) ?>"><?= e(EMAIL) ?></a></span>
        <span><?= e(ADDRESS_GURUGRAM) ?></span>
        <span><?= e(ADDRESS_DWARKA) ?></span>
      </div>
    </div>

  </div>

  <div class="site-footer__bottom">
    <p><?= e(DISCLAIMER) ?></p>
    <p><?= e(COPYRIGHT) ?></p>
  </div>
</footer>

<div class="mobilebar">
  <a href="<?= e(PHONE_LINK) ?>"><?= icon_phone() ?>اتصل الآن</a>
  <a href="<?= e(WHATSAPP_LINK) ?>" target="_blank" rel="noopener"><?= icon_whatsapp() ?>واتساب</a>
  <a href="<?= page_url() . '#appointment' ?>"><?= icon_calendar() ?>احجز موعد</a>
</div>

<script src="<?= url('js/main.js') ?>" defer></script>
<?php foreach ($extra_js as $script): ?>
<script src="<?= url($script) ?>" defer></script>
<?php endforeach; ?>

</body>
</html>
