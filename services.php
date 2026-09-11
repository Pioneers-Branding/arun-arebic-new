<?php
/**
 * services.php — the services / treatments index, grouped by category.
 */
require_once __DIR__ . '/includes/config.php';

$SERVICES = require __DIR__ . '/includes/services-data.php';

/** Split the catalogue into the two groups the page shows. */
$groups = [
    [
        'eyebrow' => 'جراحة العمود الفقري',
        'title'   => 'خدمات العمود الفقري',
        'icon'    => '<path d="M12 3v18M9 6h6M8.5 9.5h7M8 13h8M8.5 16.5h7M9 20h6" stroke="#72d8cc" stroke-width="1.4" stroke-linecap="round"/>',
        'items'   => array_values(array_filter($SERVICES, static fn($s) => $s['cat'] === 'spine')),
    ],
    [
        'eyebrow' => 'جراحة المخ والأعصاب',
        'title'   => 'خدمات المخ والأعصاب',
        'icon'    => '<path d="M9 5a3 3 0 0 0-3 3 2.5 2.5 0 0 0-1 4.6A3 3 0 0 0 8 17.5h8a3 3 0 0 0 2-4.9A2.5 2.5 0 0 0 18 8a3 3 0 0 0-3-3 3 3 0 0 0-6 0Z" stroke="#72d8cc" stroke-width="1.4" stroke-linejoin="round"/><circle cx="14" cy="12" r="1.6" fill="#72d8cc"/>',
        'items'   => array_values(array_filter($SERVICES, static fn($s) => $s['cat'] === 'brain')),
    ],
];

$page_title       = 'العلاجات والعمليات في الهند | ' . SITE_NAME;
$page_description = meta_description('جميع علاجات وعمليات المخ والأعصاب والعمود الفقري التي يجريها الدكتور أرون ساروهـا في مستشفى ماكس التخصصي: أورام الدماغ، الانزلاق الغضروفي، تضيّق القناة الشوكية، الجراحة طفيفة التوغل والمزيد.');

/* The index is a real hub page, so it gets a list of what it links to as
   well as a breadcrumb — that is what lets it rank for the broad Arabic
   queries and pass the click on to the right treatment page. */
$page_schema = json_encode([
    '@context' => 'https://schema.org',
    '@graph'   => [
        breadcrumb_schema([
            ['name' => 'الرئيسية',           'url' => page_url()],
            ['name' => 'العلاجات والعمليات', 'url' => page_url('services')],
        ]),
        [
            '@type' => 'CollectionPage',
            '@id'   => abs_url(page_url('services')),
            'name'  => 'العلاجات والعمليات',
            'inLanguage' => 'ar',
            'hasPart' => array_map(static fn($s) => [
                '@type' => 'MedicalProcedure',
                'name'  => $s['title'],
                'url'   => abs_url(service_url($s['slug'])),
            ], $SERVICES),
        ],
    ],
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
$page_path        = page_url('services');
$footer_compact   = true;

require __DIR__ . '/includes/header.php';
?>

<section class="page-hero">
  <div class="wrap">
    <nav class="crumbs" aria-label="مسار التصفح">
      <a href="<?= page_url() ?>">الرئيسية</a>
      <span class="sep">←</span>
      <span class="current">العلاجات والعمليات</span>
    </nav>

    <h1 class="page-hero__title">العلاجات والعمليات</h1>
    <p class="page-hero__lede">رعاية متكاملة في جراحة المخ والأعصاب والعمود الفقري، تجمع بين الخبرة الجراحية الدقيقة وأحدث التقنيات الطبية.</p>
  </div>
</section>

<?php foreach ($groups as $group): ?>
  <section class="svc-group">
    <div class="wrap">
      <span class="eyebrow"><?= e($group['eyebrow']) ?></span>
      <h2 class="svc-group__title"><?= e($group['title']) ?></h2>

      <div class="grid grid-auto-300">
        <?php foreach ($group['items'] as $service): ?>
          <a class="card card-lift svc-card" href="<?= service_url($service['slug']) ?>">
            <?php if (!empty($service['img'])): ?>
              <div class="svc-card__media">
                <img src="<?= img_url($service['img']) ?>" alt="<?= e($service['title']) ?>" loading="lazy">
              </div>
            <?php else: ?>
              <div class="svc-card__media svc-card__media--icon">
                <svg width="48" height="48" viewBox="0 0 24 24" fill="none"><?= $group['icon'] ?></svg>
              </div>
            <?php endif; ?>

            <div class="svc-card__body">
              <h3 class="svc-card__t"><?= e($service['title']) ?></h3>
              <p class="svc-card__d"><?= e($service['lead']) ?></p>
              <span class="svc-card__more">اعرف المزيد ←</span>
            </div>
          </a>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
<?php endforeach; ?>

<section class="cta-band">
  <div class="u-narrow">
    <h2 class="cta-band__title">هل تحتاج إلى استشارة متخصصة؟</h2>
    <p class="cta-band__lede">احجز موعدك مع الدكتور أرون ساروهـا اليوم.</p>
    <div class="cta-row">
      <a class="btn btn-primary" href="<?= page_url() . '#appointment' ?>">احجز استشارتك الآن</a>
      <a class="btn btn-whatsapp" href="<?= e(WHATSAPP_LINK) ?>" target="_blank" rel="noopener">تواصل عبر واتساب</a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
