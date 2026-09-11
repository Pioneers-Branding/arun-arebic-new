<?php
/**
 * service-page.php — the shared template behind every single-service page.
 *
 * A service page is a two-line file:
 *
 *     <?php
 *     $slug = 'back-pain-treatment';
 *     require __DIR__ . '/includes/service-page.php';
 *
 * Everything else — copy, images, FAQs, related services — comes from
 * includes/services-data.php.
 */

require_once __DIR__ . '/config.php';

$SERVICES = require __DIR__ . '/services-data.php';

/* Reviews and the reviews link live with the rest of the shared copy, so a
   verified review added once shows up on the home page and here alike. */
require __DIR__ . '/home-data.php';

/* ------------------------------------------------------ find this service */
$slug    = $slug ?? '';
$matches = array_values(array_filter($SERVICES, static fn($s) => $s['slug'] === $slug));

if (!$matches) {
    http_response_code(404);
    $service = null;
} else {
    $service = $matches[0];
}

if ($service === null) {
    $page_title = 'الصفحة غير موجودة | ' . SITE_NAME;
    require __DIR__ . '/header.php';
    echo '<section class="section section-white"><div class="wrap head-center">'
       . '<h1 class="h-section">الصفحة غير موجودة</h1>'
       . '<p class="lede">تعذّر العثور على الخدمة المطلوبة.</p>'
       . '<div class="cta-row"><a class="btn btn-solid" href="' . page_url('services') . '">تصفّح كل العلاجات</a></div>'
       . '</div></section>';
    require __DIR__ . '/footer.php';
    return;
}

$is_spine   = $service['cat'] === 'spine';
$cat_label  = $is_spine ? 'جراحة العمود الفقري' : 'جراحة المخ والأعصاب';
$img_alt    = $service['title'] . ' — ' . SITE_NAME;

/* Related services: same category, three of them. */
$related = array_slice(array_values(array_filter(
    $SERVICES,
    static fn($s) => $s['cat'] === $service['cat'] && $s['slug'] !== $service['slug']
)), 0, 3);

/* Symptoms are shown in two balanced columns. */
$symptoms   = $service['symptoms'] ?? [];
$split      = (int) ceil(count($symptoms) / 2);
$symptoms_a = array_slice($symptoms, 0, $split);
$symptoms_b = array_slice($symptoms, $split);

/* ------------------------------------------------- presentation constants */
$QUICK_FACTS = [
    ['k' => 'التخصص',    'v' => 'جراحة المخ والأعصاب والعمود الفقري'],
    ['k' => 'المستشفى',  'v' => 'مستشفى ماكس — جوروجرام ودواركا'],
    ['k' => 'الاستشارة', 'v' => 'حضورية أو عن بُعد للمرضى الدوليين'],
];

$APPROACH = [
    ['n' => '٠١', 't' => 'الجراحة الموجّهة بالملاحة',      'd' => 'تحديد دقيق للمسار الجراحي لتحقيق أعلى درجات الأمان.'],
    ['n' => '٠٢', 't' => 'المراقبة العصبية أثناء العملية', 'd' => 'متابعة وظائف الأعصاب لحظة بلحظة لحماية الأنسجة الحيوية.'],
    ['n' => '٠٣', 't' => 'التقنيات طفيفة التوغل',          'd' => 'شقوق أصغر وألم أقل وتعافٍ أسرع كلما كانت الحالة مناسبة.'],
    ['n' => '٠٤', 't' => 'خطة علاجية مخصصة',               'd' => 'تقييم شامل لكل حالة واختيار الأنسب من الخيارات العلاجية.'],
];

$BENEFITS = [
    'تقييم دقيق قبل اتخاذ قرار الجراحة',
    'الحفاظ على الأنسجة السليمة قدر الإمكان',
    'تقليل الألم وفترة الإقامة في المستشفى',
    'تعافٍ أسرع وعودة أسرع للحياة الطبيعية',
    'متابعة ما بعد العلاج ودعم المرضى الدوليين',
    'تواصل واضح وشرح مفصّل لكل خطوة',
];

$SVC_WHY = [
    ['t' => 'خبرة جراحية متقدمة',  'd' => 'رعاية متخصصة للحالات العصبية وجراحات العمود الفقري.'],
    ['t' => 'نهج يركّز على المريض', 'd' => 'خطة علاجية مصممة وفق احتياجات وحالة كل مريض.'],
    ['t' => 'تقنيات طبية حديثة',   'd' => 'الاستفادة من أحدث الأساليب والتقنيات الجراحية المناسبة.'],
    ['t' => 'رعاية للمرضى الدوليين','d' => 'دعم المرضى القادمين من خارج الهند خلال رحلة العلاج.'],
];

$SPINE_CONDITIONS = [
    [
        'icon'  => '<path d="M12 3v5M12 16v5" stroke="#0f9b8e" stroke-width="1.5" stroke-linecap="round"/><rect x="7.5" y="8" width="9" height="8" rx="2.5" stroke="#0f9b8e" stroke-width="1.5"/>',
        'title' => 'الانزلاق الغضروفي',
        'desc'  => 'تخفيف الضغط عن الأعصاب المنضغطة في العمود الفقري القطني أو العنقي واستعادة الحركة دون ألم.',
        'tags'  => ['عرق النسا', 'راحة الأعصاب'],
    ],
    [
        'icon'  => '<path d="M8 5c2 1.2 6 1.2 8 0M8 19c2-1.2 6-1.2 8 0M9.5 5v14M14.5 5v14" stroke="#0f9b8e" stroke-width="1.5" stroke-linecap="round"/>',
        'title' => 'تضيّق القناة الشوكية',
        'desc'  => 'توسيع المساحات الضيقة داخل القناة الشوكية لتخفيف الضغط عن الحبل الشوكي واستعادة القدرة على المشي.',
        'tags'  => ['إزالة الضغط', 'الحركة'],
    ],
    [
        'icon'  => '<path d="M12 4 4 8l8 4 8-4-8-4ZM4 12l8 4 8-4M4 16l8 4 8-4" stroke="#0f9b8e" stroke-width="1.5" stroke-linejoin="round"/>',
        'title' => 'الانزلاق الفقاري وعدم الاستقرار',
        'desc'  => 'تثبيت الفقرات المنزلقة بتقنيات دقيقة تحافظ على أكبر قدر ممكن من الحركة الطبيعية للعمود الفقري.',
        'tags'  => ['تثبيت دقيق', 'الاستقرار'],
    ],
];

$BRAIN_CONDITIONS = [
    [
        'icon'  => '<path d="M9 5a3 3 0 0 0-3 3 2.5 2.5 0 0 0-1 4.6A3 3 0 0 0 8 17.5h8a3 3 0 0 0 2-4.9A2.5 2.5 0 0 0 18 8a3 3 0 0 0-3-3 3 3 0 0 0-6 0Z" stroke="#0f9b8e" stroke-width="1.5" stroke-linejoin="round"/><circle cx="14" cy="12" r="1.6" fill="#0f9b8e"/>',
        'title' => 'أورام الدماغ',
        'desc'  => 'استئصال الأورام الحميدة والخبيثة بتقنيات مجهرية وملاحية تحافظ على الأنسجة السليمة والوظائف الحيوية.',
        'tags'  => ['جراحة مجهرية', 'دقة عالية'],
    ],
    [
        'icon'  => '<path d="M12 3c-3 4-5 6-5 9a5 5 0 0 0 10 0c0-3-2-5-5-9Z" stroke="#0f9b8e" stroke-width="1.5" stroke-linejoin="round"/>',
        'title' => 'تمدد الأوعية الدموية',
        'desc'  => 'عزل تمدد الأوعية عن الدورة الدموية لمنع النزيف وحماية الدماغ من المضاعفات الخطيرة.',
        'tags'  => ['وقاية', 'حماية عصبية'],
    ],
    [
        'icon'  => '<circle cx="12" cy="12" r="8" stroke="#0f9b8e" stroke-width="1.5"/><path d="M9 12a3 3 0 0 0 6 0" stroke="#0f9b8e" stroke-width="1.5" stroke-linecap="round"/>',
        'title' => 'استسقاء الدماغ',
        'desc'  => 'تصريف السائل الدماغي الزائد وتخفيف الضغط داخل الجمجمة عبر تقنيات حديثة للأطفال والبالغين.',
        'tags'  => ['تصريف', 'تخفيف الضغط'],
    ],
];

$condition_cards = $is_spine ? $SPINE_CONDITIONS : $BRAIN_CONDITIONS;

/*
 * Patient reviews on a service page.
 *
 * Empty, for the same reason as $TESTIMONIALS in includes/home-data.php: the
 * three quotes that used to be hard-coded here were written copy rather than
 * reviews collected from patients, and every service page carried the same
 * three regardless of which operation it described.
 *
 * Service pages now read whatever real reviews exist in home-data.php, so a
 * review only has to be added once. Add them there, not here.
 */
$SVC_TESTIMONIALS = $TESTIMONIALS ?? [];

/* YouTube search keyword per service, for the "watch & learn" cards. */
$YT_KEYWORDS = [
    'back-pain-treatment' => 'back pain treatment',
    'cervical-spine-surgery' => 'cervical spine surgery',
    'degenerative-disc-disease' => 'degenerative disc disease',
    'disc-replacement-surgery' => 'disc replacement surgery',
    'scoliosis-treatment' => 'scoliosis surgery',
    'spinal-stenosis-surgery' => 'spinal stenosis',
    'minimally-invasive-spine-surgery' => 'minimally invasive spine surgery',
    'endoscopic-spine-surgery' => 'endoscopic spine surgery',
    'brain-tumor-surgery' => 'brain tumor surgery',
    'brain-aneurysm-treatment' => 'brain aneurysm',
    'headache-treatment' => 'headache treatment',
    'hydrocephalus-treatment' => 'hydrocephalus',
    'head-injury' => 'head injury',
    'skull-base-surgery' => 'skull base surgery',
    'complex-nerve-surgery' => 'nerve surgery',
    'brain-surgery-overview' => 'brain surgery',
    'stroke-management' => 'stroke treatment',
    'microvascular-decompression' => 'microvascular decompression',
    'spine-surgery-overview' => 'spine surgery',
    'atlantoaxial-dislocation' => 'atlantoaxial dislocation',
    'spinal-fusion-surgery' => 'spinal fusion',
    'spinal-tuberculosis' => 'spinal tuberculosis',
    'herniated-disc-treatment' => 'herniated disc',
    'brachial-plexus-surgery' => 'brachial plexus surgery',
    'nerve-grafting-surgery' => 'nerve grafting',
];

$keyword   = $YT_KEYWORDS[$service['slug']] ?? 'brain and spine surgery';
$yt_search = static fn(string $term): string =>
    YOUTUBE_URL . '/search?query=' . rawurlencode('Dr Arun Saroha ' . $term);

$VIDEOS = [
    ['t' => 'شاهد: ' . $service['title'],           'href' => $yt_search($keyword)],
    ['t' => 'متى تحتاج إلى جراحة المخ والأعصاب؟',   'href' => $yt_search('when do you need surgery')],
    ['t' => 'تجارب مرضى وقصص تعافٍ حقيقية',         'href' => $yt_search('patient testimonial recovery')],
];

/* The category fallback illustration, used when a service has no photo. */
$cat_icon = $is_spine
    ? '<path d="M12 3v18M9 6h6M8.5 9.5h7M8 13h8M8.5 16.5h7M9 20h6" stroke="#72d8cc" stroke-width="1.4" stroke-linecap="round"/>'
    : '<path d="M9 5a3 3 0 0 0-3 3 2.5 2.5 0 0 0-1 4.6A3 3 0 0 0 8 17.5h8a3 3 0 0 0 2-4.9A2.5 2.5 0 0 0 18 8a3 3 0 0 0-3-3 3 3 0 0 0-6 0Z" stroke="#72d8cc" stroke-width="1.4" stroke-linejoin="round"/><circle cx="14" cy="12" r="1.7" fill="#72d8cc"/>';

/* ------------------------------------------------------------ page & SEO */
$appointment      = appointment_handle();
/*
 * Search intent on these pages is overwhelmingly "<treatment> in India",
 * typed by Gulf patients weighing up travelling for surgery. Putting the
 * country in the title rather than leaving it implied is the single biggest
 * on-page change available to these pages.
 */
$page_title       = $service['title'] . ' في الهند | ' . SITE_NAME;
$page_description = meta_description(
    $service['lead'] . ' يجريها الدكتور أرون ساروهـا في مستشفى ماكس التخصصي — استشارة عن بُعد للمرضى الدوليين.'
);
/* The PNG, not the WebP: link scrapers (WhatsApp above all, which is how
   these pages actually get shared) still handle WebP unevenly. */
$page_og_image    = abs_url(url($service['heroBg'] ?? $service['img'] ?? 'assets/dr-arun-saroha.png'));
$page_path        = service_url($service['slug']);
$footer_compact   = true;

$physician = [
    '@type' => 'Physician',
    'name' => 'الدكتور أرون ساروهـا',
    'alternateName' => 'Dr. Arun Saroha',
    'medicalSpecialty' => 'Neurologic',
    'alumniOf' => 'PGIMER Chandigarh',
    'worksFor' => ['@type' => 'MedicalClinic', 'name' => 'Max Super Speciality Hospital', 'address' => 'Gurugram & Dwarka, India'],
];

$intro_text     = implode(' ', $service['introP'] ?? []);
$procedure_text = implode(' ', $service['procedureP'] ?? []);

/* The content's real last-modified date, rather than a date typed once and
   then left to rot as the copy changes around it. */
$reviewed_on = date('Y-m-d', @filemtime(__DIR__ . '/services-data.php') ?: time());

$page_schema = json_encode([
    '@context' => 'https://schema.org',
    '@graph'   => [
        breadcrumb_schema([
            ['name' => 'الرئيسية',           'url' => page_url()],
            ['name' => 'العلاجات والعمليات', 'url' => page_url('services')],
            ['name' => $service['title'],    'url' => $page_path],
        ]),
        [
            '@type' => 'MedicalWebPage',
            '@id' => abs_url($page_path),
            'url' => abs_url($page_path),
            'name' => $service['title'], 'description' => $intro_text, 'inLanguage' => 'ar',
            'datePublished' => $reviewed_on, 'dateModified' => $reviewed_on, 'lastReviewed' => $reviewed_on,
            'about' => ['@type' => 'MedicalProcedure', 'name' => $service['title'], 'description' => $procedure_text, 'howPerformed' => $procedure_text],
            'author' => $physician, 'reviewedBy' => $physician,
            'publisher' => ['@type' => 'MedicalOrganization', 'name' => 'Dr. Arun Saroha — Spine & Brain', 'url' => 'https://spineandbrainindia.com/'],
        ],
        [
            '@type' => 'FAQPage',
            'mainEntity' => array_map(
                static fn($f) => ['@type' => 'Question', 'name' => $f['q'], 'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f['a']]],
                $service['faqs'] ?? []
            ),
        ],
    ],
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

require __DIR__ . '/header.php';
?>

<div class="fade-in">

<!-- ==================================================================== HERO -->
<section class="svc-hero">
  <?php if (!empty($service['heroBg'])): ?>
    <div class="svc-hero__bg">
      <img src="<?= img_url($service['heroBg']) ?>" alt="<?= e($img_alt) ?>">
    </div>
  <?php endif; ?>
  <div class="svc-hero__glow"></div>

  <div class="svc-hero__inner">
    <nav class="crumbs svc-hero__crumb" aria-label="مسار التصفح">
      <a href="<?= page_url() ?>">الرئيسية</a>
      <span class="sep">←</span>
      <a href="<?= page_url('services') ?>">العلاجات والعمليات</a>
      <span class="sep">←</span>
      <span class="current"><?= e($service['title']) ?></span>
    </nav>

    <div class="svc-hero__grid">
      <div>
        <span class="svc-hero__badge"><?= e($cat_label) ?></span>
        <h1 class="svc-hero__h1"><?= e($service['title']) ?></h1>
        <p class="svc-hero__lede"><?= e($service['lead']) ?></p>

        <div class="svc-hero__actions">
          <a class="btn btn-primary" href="#appointment">احجز استشارتك الآن</a>
          <a class="btn btn-ghost" href="<?= e(WHATSAPP_LINK) ?>" target="_blank" rel="noopener">
            <?= icon_whatsapp('#3fd07f') ?> واتساب
          </a>
        </div>
      </div>

      <?php if (empty($service['heroBg'])): ?>
        <?php if (!empty($service['img'])): ?>
          <div class="svc-hero__art">
            <img src="<?= img_url($service['img']) ?>" alt="<?= e($img_alt) ?>" loading="lazy">
          </div>
        <?php else: ?>
          <div class="svc-hero__art svc-hero__art--icon">
            <svg width="88" height="88" viewBox="0 0 24 24" fill="none" class="u-hero-icon"><?= $cat_icon ?></svg>
          </div>
        <?php endif; ?>
      <?php else: ?>
        <div></div>
      <?php endif; ?>
    </div>
  </div>

  <div class="quickfacts">
    <div class="quickfacts__grid">
      <?php foreach ($QUICK_FACTS as $fact): ?>
        <div class="quickfact">
          <div class="quickfact__k"><?= e($fact['k']) ?></div>
          <div class="quickfact__v"><?= e($fact['v']) ?></div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- =================================================================== INTRO -->
<section class="svc-section section-white">
  <div class="svc-intro__grid">
    <div>
      <span class="eyebrow">نبذة عن الخدمة</span>
      <h2 class="svc-h2">نبذة عن <?= e($service['title']) ?></h2>

      <div class="svc-prose">
        <?php foreach ($service['introP'] as $para): ?><p><?= e($para) ?></p><?php endforeach; ?>
      </div>

      <div class="reviewed-by">
        <span class="reviewed-by__name"><?= icon_check('#d9f4f0', '#086a61', '16') ?> راجعه طبياً: د. أرون ساروهـا</span>
        <span>MCh جراحة المخ والأعصاب — PGIMER شانديغار</span>
        <span class="reviewed-by__date">آخر مراجعة طبية: مارس 2026</span>
      </div>
    </div>

    <aside class="svc-aside">
      <svg width="40" height="40" viewBox="0 0 24 24" fill="none" class="u-fade-icon"><path d="M10 11H7a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v6c0 2-1 3-3 4M20 11h-3a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v6c0 2-1 3-3 4" stroke="#0f9b8e" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
      <p class="svc-aside__quote">نبدأ دائماً بالخيارات التحفظية، ولا نوصي بالجراحة إلا عندما تحقق أفضل النتائج على المدى الطويل.</p>
      <div class="svc-aside__by">
        <span class="svc-aside__avatar"><?= icon_logo('22') ?></span>
        <div>
          <div class="svc-aside__name">الدكتور أرون ساروهـا</div>
          <div class="svc-aside__role">استشاري جراحة المخ والأعصاب والعمود الفقري</div>
        </div>
      </div>
    </aside>
  </div>
</section>

<?php if ($symptoms): ?>
<!-- ================================================================ SYMPTOMS -->
<section class="svc-section svc-section--tight-top section-white">
  <div class="svc-sym__grid">
    <div>
      <?php if (!empty($service['img'])): ?>
        <div class="svc-sym__media">
          <img src="<?= img_url($service['img']) ?>" alt="<?= e($img_alt) ?>" loading="lazy">
        </div>
      <?php else: ?>
        <div class="svc-sym__media svc-sym__media--icon">
          <svg width="88" height="88" viewBox="0 0 24 24" fill="none"><?= $cat_icon ?></svg>
        </div>
      <?php endif; ?>
    </div>

    <div>
      <span class="svc-kicker">التعرّف المبكر</span>
      <h2 class="svc-h3">الأعراض والعلامات التحذيرية</h2>
      <p class="svc-sym__lede">التعرّف المبكر على أعراض <?= e($service['title']) ?> يساعد على التشخيص الدقيق واختيار العلاج الأنسب في الوقت المناسب.</p>

      <div class="svc-sym__cols">
        <div class="sym-box">
          <div class="sym-box__head">
            <span class="sym-box__icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="6" r="2.4" stroke="#0f9b8e" stroke-width="1.6"/><path d="M12 8.5v6m0-2.5-3 4.5m3-4.5 3 4.5M8.5 10.5 12 9.5l3.5 1" stroke="#0f9b8e" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
            <b class="sym-box__t">علامات جسدية</b>
          </div>
          <div class="sym-box__list">
            <?php foreach ($symptoms_a as $item): ?>
              <div><svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M5 12.5l4.5 4.5L19 7" stroke="#0f9b8e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span><?= e($item) ?></span></div>
            <?php endforeach; ?>
          </div>
        </div>

        <div class="sym-box sym-box--teal">
          <div class="sym-box__head">
            <span class="sym-box__icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M9 5a3 3 0 0 0-3 3 2.5 2.5 0 0 0-1 4.6A3 3 0 0 0 8 17.5h8a3 3 0 0 0 2-4.9A2.5 2.5 0 0 0 18 8a3 3 0 0 0-3-3 3 3 0 0 0-6 0Z" stroke="#0f9b8e" stroke-width="1.5" stroke-linejoin="round"/></svg></span>
            <b class="sym-box__t">علامات حسية وعصبية</b>
          </div>
          <div class="sym-box__list">
            <?php foreach ($symptoms_b as $item): ?>
              <div><svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M5 12.5l4.5 4.5L19 7" stroke="#0f9b8e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span><?= e($item) ?></span></div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>

      <div class="svc-tip">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="9" stroke="#0f9b8e" stroke-width="1.5"/><path d="M12 8h.01M11 12h1v4h1" stroke="#0f9b8e" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        <div>
          <b>دوّن أعراضك قبل الاستشارة</b>
          <p>تسجيل وقت بدء الأعراض وشدتها ومحفزاتها ومدى تكرارها يساعد الطبيب على الوصول إلى تشخيص أدق وأسرع.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- ==================================================== CAUSES + DIAGNOSIS -->
<section class="svc-section svc-section--tight-top section-white">
  <div class="svc-duo">
    <div class="svc-panel">
      <h2>الأسباب وعوامل الخطر</h2>
      <p><?= e($service['causes']) ?></p>
    </div>
    <div class="svc-panel">
      <h2>التشخيص والفحوصات</h2>
      <p><?= e($service['diagnosis']) ?></p>
    </div>
  </div>
</section>

<!-- ====================================================== CONDITIONS TREATED -->
<section class="svc-section svc-section--tight-top section-white">
  <div class="wrap-md">
    <div class="head-center u-mb-44">
      <span class="svc-kicker">التطبيقات</span>
      <h2 class="svc-h3">الحالات التي نعالجها</h2>
      <p class="lede">من انضغاط الأعصاب إلى عدم الاستقرار البنيوي، هذه أبرز الحالات التي نشخّصها ونعالجها.</p>
    </div>

    <div class="grid grid-auto-280">
      <?php foreach ($condition_cards as $card): ?>
        <div class="svc-cond">
          <span class="svc-cond__icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none"><?= $card['icon'] ?></svg></span>
          <h3 class="svc-cond__t"><?= e($card['title']) ?></h3>
          <p class="svc-cond__d"><?= e($card['desc']) ?></p>
          <div class="svc-cond__tags">
            <?php foreach ($card['tags'] as $tag): ?><span><?= e($tag) ?></span><?php endforeach; ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ================================================================ APPROACH -->
<section class="svc-section section-tint">
  <div class="wrap-md">
    <div class="head-center u-narrow-660 u-mb-44">
      <span class="eyebrow">الأسلوب الجراحي</span>
      <h2 class="svc-h2 svc-h2--sm">التقنيات والأسلوب الجراحي</h2>
      <p class="lede">نهج دقيق يجمع بين الخبرة الجراحية وأحدث التقنيات الطبية لتحقيق أعلى مستويات الأمان.</p>
    </div>

    <div class="grid grid-auto-240 u-gap-22">
      <?php foreach ($APPROACH as $step): ?>
        <div class="svc-step">
          <span class="svc-step__n"><?= e($step['n']) ?></span>
          <h3 class="svc-step__t"><?= e($step['t']) ?></h3>
          <p class="svc-step__d"><?= e($step['d']) ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ====================================================== WHEN + PROCEDURE -->
<section class="svc-section svc-section--tight-bottom section-white">
  <div class="svc-duo">
    <div class="svc-when">
      <span class="svc-when__icon">
        <svg width="26" height="26" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="8" stroke="#72d8cc" stroke-width="1.5"/><path d="M12 8v4l3 2" stroke="#72d8cc" stroke-width="1.5" stroke-linecap="round"/></svg>
      </span>
      <h2>متى قد تحتاج إلى هذا العلاج؟</h2>
      <p><?= e($service['when']) ?></p>
    </div>

    <div class="svc-how">
      <span class="svc-how__icon">
        <svg width="26" height="26" viewBox="0 0 24 24" fill="none"><path d="M9 3h6v3l-1 1v3l4 8H6l4-8V7L9 6V3Z" stroke="#0f9b8e" stroke-width="1.5" stroke-linejoin="round"/></svg>
      </span>
      <h2>كيف يتم العلاج؟</h2>
      <div class="svc-how__prose">
        <?php foreach ($service['procedureP'] as $para): ?><p><?= e($para) ?></p><?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- ================================================================ RECOVERY -->
<section class="section-white pad-block-40">
  <div class="svc-recovery">
    <span class="eyebrow-light">بعد العلاج</span>
    <h2>التعافي والمتابعة</h2>
    <p><?= e($service['recovery']) ?></p>
  </div>
</section>

<!-- ================================================================ BENEFITS -->
<section class="section-white pad-block-40-88">
  <div class="svc-benefits">
    <h2>مزايا العلاج مع الدكتور أرون ساروهـا</h2>
    <div class="svc-benefits__grid">
      <?php foreach ($BENEFITS as $benefit): ?>
        <div>
          <?= icon_check('#d9f4f0', '#0f9b8e', '22') ?>
          <span><?= e($benefit) ?></span>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============================================================== WHY CHOOSE -->
<section class="svc-why">
  <div class="u-wide-1100">
    <h2>لماذا الدكتور أرون ساروهـا؟</h2>
    <div class="svc-why__grid">
      <?php foreach ($SVC_WHY as $item): ?>
        <div class="svc-why__card">
          <h3><?= e($item['t']) ?></h3>
          <p><?= e($item['d']) ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ================================================================= RELATED -->
<section class="svc-section section-tint svc-related">
  <div class="wrap">
    <h2>علاجات ذات صلة</h2>
    <div class="grid grid-auto-280">
      <?php foreach ($related as $rel): ?>
        <a class="card card-lift svc-card" href="<?= service_url($rel['slug']) ?>">
          <?php if (!empty($rel['img'])): ?>
            <div class="svc-card__media"><img src="<?= img_url($rel['img']) ?>" alt="<?= e($rel['title']) ?>" loading="lazy"></div>
          <?php else: ?>
            <div class="svc-card__media svc-card__media--icon">
              <svg width="42" height="42" viewBox="0 0 24 24" fill="none"><path d="M12 21s-7-5.5-7-11a7 7 0 0 1 14 0c0 5.5-7 11-7 11Z" stroke="#72d8cc" stroke-width="1.4"/><circle cx="12" cy="10" r="2.4" stroke="#72d8cc" stroke-width="1.4"/></svg>
            </div>
          <?php endif; ?>
          <div class="svc-card__body">
            <h3 class="svc-card__t"><?= e($rel['title']) ?></h3>
            <span class="svc-card__more">اعرف المزيد ←</span>
          </div>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- =============================================== AUTHOR / MEDICAL REVIEWER -->
<section class="svc-section section-tint">
  <div class="wrap-md">
    <span class="eyebrow">تعرّف على المختص</span>

    <div class="author">
      <div class="author__photo">
        <img src="https://spineandbrainindia.com/assets/img/drimg.webp"
             alt="الدكتور أرون ساروهـا — أفضل جراح مخ وأعصاب وعمود فقري في الهند" loading="lazy">
      </div>

      <div class="author__body">
        <h2 class="author__h">الدكتور أرون ساروهـا <span>استشاري جراحة المخ والأعصاب</span> والعمود الفقري</h2>

        <div class="author__points">
          <div><svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M12 21s-7-5.5-7-11a7 7 0 0 1 14 0c0 5.5-7 11-7 11Z" stroke="#0f9b8e" stroke-width="1.6"/><circle cx="12" cy="10" r="2.4" stroke="#0f9b8e" stroke-width="1.6"/></svg>مدير أول ورئيس وحدة جراحة المخ والأعصاب والعمود الفقري — مستشفى ماكس</div>
          <div><svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M4 19V5m0 14h16M8 15l3-4 3 2 4-6" stroke="#0f9b8e" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>أكثر من 26 عاماً من الخبرة الجراحية وأكثر من 9,000 عملية ناجحة</div>
          <div><svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M12 3l2.3 4.6 5.1.8-3.7 3.6.9 5.1L12 15.8 7.4 17.1l.9-5.1L4.6 8.4l5.1-.8L12 3Z" stroke="#0f9b8e" stroke-width="1.5" stroke-linejoin="round"/></svg>حائز على جائزة أفضل جراح عمود فقري — عضو الجمعية العصبية في الهند</div>
        </div>

        <p class="author__p">تُعد جراحة المخ والأعصاب من أدق التخصصات الطبية التي تتطلب دقة وابتكاراً ورعاية إنسانية. ويُعد الدكتور أرون ساروهـا من الأسماء الموثوقة في هذا المجال، إذ قدّم على مدى أكثر من 26 عاماً رعاية متقدمة لآلاف المرضى في تشخيص وعلاج حالات المخ والعمود الفقري المعقدة داخل الهند وخارجها.</p>

        <p class="author__sub">أبرز المؤهلات والخبرات المهنية:</p>
        <div class="author__list">
          <div>بكالوريوس الطب والجراحة (MBBS) — كلية رابندرانات طاغور</div>
          <div>ماجستير الجراحة العامة (MS) — PGIMER شانديغار</div>
          <div>زمالة MCh في جراحة المخ والأعصاب — PGIMER</div>
          <div>أكثر من 9,000 عملية ناجحة للمخ والعمود الفقري</div>
          <div>حائز على جائزة أفضل جراح عمود فقري</div>
          <div>رعاية مرضى من أكثر من 50 دولة حول العالم</div>
        </div>

        <p class="author__p">من خلال رؤيته والتزامه بأحدث التقنيات الجراحية والنهج الذي يركّز على المريض، يواصل الدكتور أرون ساروهـا تقديم رعاية عصبية متميزة للمرضى من الهند ودول الخليج والعالم.</p>

        <a class="author__cta" href="<?= page_url() . '#about' ?>">المزيد عن الدكتور <span class="u-arrow-sm">←</span></a>
      </div>
    </div>

    <div class="disclaimer">
      <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="9" stroke="#0f9b8e" stroke-width="1.5"/><path d="M12 8h.01M11 12h1v4h1" stroke="#0f9b8e" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
      <p>إخلاء مسؤولية طبية: المحتوى الوارد في هذه الصفحة لأغراض توعوية وتثقيفية فقط، وقد راجعه الدكتور أرون ساروهـا، ولا يُعد بديلاً عن الاستشارة الطبية المباشرة أو التشخيص الفردي. يُرجى مراجعة طبيب مختص لتقييم حالتك.</p>
    </div>
  </div>
</section>

<!-- ================================================================= REVIEWS -->
<!--
  Renders only when there are real reviews to render. While there are none,
  the page links to the Google Business Profile so the proof of reputation is
  first-party and checkable rather than written here.
-->
<?php if ($SVC_TESTIMONIALS): ?>
<section class="svc-section section-white">
  <div class="wrap-md">
    <div class="head-center u-narrow-620">
      <span class="eyebrow">آراء المرضى</span>
      <h2 class="svc-h2 svc-h2--sm">ماذا يقول مرضانا؟</h2>
    </div>

    <div class="grid grid-auto-280 u-gap-22 u-mt-38">
      <?php foreach ($SVC_TESTIMONIALS as $tm): ?>
        <div class="quote svc-quote">
          <svg class="quote__mark" width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M10 11H7a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v6c0 2-1 3-3 4M20 11h-3a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v6c0 2-1 3-3 4" stroke="#0f9b8e" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
          <p class="quote__text"><?= e($tm['quote']) ?></p>
          <div class="quote__by">
            <span class="quote__avatar"><?= e($tm['initial']) ?></span>
            <div>
              <div class="quote__name"><?= e($tm['name']) ?></div>
              <div class="quote__meta"><?= e($tm['country']) ?></div>
            </div>
          </div>
          <?php if (!empty($tm['source'])): ?>
            <a class="quote__source" href="<?= e($tm['source']) ?>" target="_blank" rel="noopener nofollow">عرض المراجعة الأصلية ←</a>
          <?php endif; ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php elseif (!empty($REVIEWS_URL)): ?>
<section class="svc-section section-white">
  <div class="wrap-md">
    <div class="head-center u-narrow-620">
      <span class="eyebrow">آراء المرضى</span>
      <h2 class="svc-h2 svc-h2--sm">تقييمات المرضى</h2>
      <p class="lede">نعرض المراجعات الموثّقة فقط. اطّلع على تقييمات المرضى كما نُشرت على ملف الدكتور أرون ساروهـا في خرائط Google.</p>
      <div class="cta-row">
        <a class="btn btn-outline" href="<?= e($REVIEWS_URL) ?>" target="_blank" rel="noopener nofollow">
          اقرأ تقييمات المرضى على Google ←
        </a>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- ========================================================== WATCH & LEARN -->
<section class="svc-section section-tint">
  <div class="wrap-md">
    <div class="head-center u-narrow-620 u-mb-44">
      <span class="eyebrow">شاهد وتعلّم</span>
      <h2 class="svc-h2 svc-h2--sm">فيديوهات طبية توعوية</h2>
      <p class="lede">شاهد شروحات ونصائح الدكتور أرون ساروهـا حول صحة المخ والأعصاب والعمود الفقري على قناته في يوتيوب.</p>
    </div>

    <div class="grid grid-auto-280">
      <?php foreach ($VIDEOS as $video): ?>
        <a class="video-card" href="<?= e($video['href']) ?>" target="_blank" rel="noopener">
          <div class="video-card__thumb">
            <span class="video-card__play"><svg width="24" height="24" viewBox="0 0 24 24" fill="#e02f2f"><path d="M8 5v14l11-7L8 5Z"/></svg></span>
            <span class="video-card__yt">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="#fff"><path d="M21.6 7.2s-.2-1.4-.8-2c-.8-.8-1.6-.8-2-.9C16 4 12 4 12 4s-4 0-6.8.3c-.4 0-1.2.1-2 .9-.6.6-.8 2-.8 2S2 8.8 2 10.5v1.9c0 1.6.2 3.3.2 3.3s.2 1.4.8 2c.8.8 1.8.8 2.3.9 1.7.1 6.7.2 6.7.2s4 0 6.8-.3c.4 0 1.2-.1 2-.9.6-.6.8-2 .8-2s.2-1.6.2-3.3v-1.9c0-1.6-.2-3.3-.2-3.3ZM10 14.6V8.9l5 2.9-5 2.8Z"/></svg>
              يوتيوب
            </span>
          </div>
          <div class="video-card__body">
            <h3 class="video-card__t"><?= e($video['t']) ?></h3>
            <span class="video-card__more">مشاهدة على يوتيوب ←</span>
          </div>
        </a>
      <?php endforeach; ?>
    </div>

    <div class="u-center u-mt-36">
      <a class="yt-channel" href="<?= e(YOUTUBE_URL) ?>" target="_blank" rel="noopener">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="#e02f2f"><path d="M21.6 7.2s-.2-1.4-.8-2c-.8-.8-1.6-.8-2-.9C16 4 12 4 12 4s-4 0-6.8.3c-.4 0-1.2.1-2 .9-.6.6-.8 2-.8 2S2 8.8 2 10.5v1.9c0 1.6.2 3.3.2 3.3s.2 1.4.8 2c.8.8 1.8.8 2.3.9 1.7.1 6.7.2 6.7.2s4 0 6.8-.3c.4 0 1.2-.1 2-.9.6-.6.8-2 .8-2s.2-1.6.2-3.3v-1.9c0-1.6-.2-3.3-.2-3.3ZM10 14.6V8.9l5 2.9-5 2.8Z"/></svg>
        زيارة قناة الدكتور على يوتيوب
      </a>
    </div>
  </div>
</section>

<!-- ===================================================================== FAQ -->
<section class="svc-section svc-section--tight-top section-tint">
  <div class="wrap-sm">
    <h2 class="svc-h2 svc-h2--sm svc-h2--center u-mb-32">الأسئلة الشائعة</h2>

    <div class="faq-list u-mt-0">
      <?php foreach ($service['faqs'] as $i => $faq): ?>
        <div class="faq u-bg-white<?= $i === 0 ? ' is-open' : '' ?>">
          <button class="faq__q" type="button" aria-expanded="<?= $i === 0 ? 'true' : 'false' ?>">
            <span><?= e($faq['q']) ?></span>
            <span class="faq__sign"><?= $i === 0 ? '−' : '+' ?></span>
          </button>
          <div class="faq__a"><?= e($faq['a']) ?></div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ================================================================= CONTACT -->
<section class="svc-contact" id="appointment">
  <div class="svc-contact__grid">
    <div>
      <span class="eyebrow">احجز الآن</span>
      <h2 class="svc-h2 svc-h2--sm">احجز استشارتك بخصوص <?= e($service['title']) ?></h2>
      <p class="lede">أرسل تفاصيل حالتك وتقاريرك الطبية، وسيتواصل معك فريقنا لترتيب الاستشارة المناسبة.</p>

      <div class="svc-contact__list">
        <a class="svc-contact__item" href="<?= e(WHATSAPP_LINK) ?>" target="_blank" rel="noopener">
          <?= icon_whatsapp('#1faa5c', '24') ?><b>تواصل عبر واتساب</b>
        </a>
        <a class="svc-contact__item" href="<?= e(PHONE_LINK) ?>">
          <?= icon_phone('#0f9b8e', '22') ?><b><?= e(PHONE) ?></b>
        </a>
      </div>
    </div>

    <?php $form_variant = 'compact'; require __DIR__ . '/contact-form.php'; ?>
  </div>
</section>

<!-- ================================================================= CTA BAND -->
<section class="cta-band">
  <div class="u-narrow">
    <h2 class="cta-band__title">هل تحتاج إلى رأي طبي متخصص؟</h2>
    <p class="cta-band__lede">احجز موعدك مع الدكتور أرون ساروهـا اليوم واحصل على تقييم دقيق لحالتك.</p>
    <div class="cta-row">
      <a class="btn btn-primary" href="#appointment">احجز استشارتك الآن</a>
      <a class="btn btn-whatsapp" href="<?= e(WHATSAPP_LINK) ?>" target="_blank" rel="noopener">تواصل عبر واتساب</a>
    </div>
  </div>
</section>

</div><!-- /.fade-in -->

<?php require __DIR__ . '/footer.php'; ?>
