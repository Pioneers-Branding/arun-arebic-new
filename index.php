<?php
/**
 * index.php — home page.
 */
require_once __DIR__ . '/includes/config.php';

/* Run the appointment handler before any output so a POST can be processed. */
$appointment = appointment_handle();

require __DIR__ . '/includes/home-data.php';

$page_title       = SITE_NAME . ' | استشاري جراحة المخ والأعصاب والعمود الفقري';
$page_description = 'الدكتور أرون ساروهـا، استشاري جراحة المخ والأعصاب والعمود الفقري. رعاية متقدمة للدماغ والعمود الفقري بأحدث التقنيات ومعايير طبية عالمية، مع دعم متكامل للمرضى الدوليين.';
$page_og_title    = SITE_NAME . ' | جراحة المخ والأعصاب والعمود الفقري';
$page_og_desc     = 'رعاية متقدمة للدماغ والعمود الفقري بخبرة جراحية عالمية ودعم للمرضى الدوليين.';
$page_path        = page_url();

/* Physician + FAQ structured data. */
$page_schema = json_encode([
    '@context'        => 'https://schema.org',
    '@type'           => 'Physician',
    'name'            => 'الدكتور أرون ساروهـا',
    'alternateName'   => 'Dr. Arun Saroha',
    'medicalSpecialty' => 'Neurologic',
    'description'     => 'استشاري ومدير أول وحدة جراحة المخ والأعصاب والعمود الفقري في مستشفى ماكس التخصصي، جوروجرام ودواركا. زمالة MCh في جراحة المخ والأعصاب من معهد PGIMER شانديغار.',
    'image'           => abs_url(url('assets/dr-arun-saroha.png')),
    'telephone'       => '+91-78600-00705',
    'email'           => EMAIL,
    'url'             => 'https://spineandbrainindia.com/',
    'sameAs'          => [FACEBOOK_URL, INSTAGRAM_URL, YOUTUBE_URL, LINKEDIN_URL],
    'address'         => [
        ['@type' => 'PostalAddress', 'streetAddress' => 'Sushant Lok 1, Sector 43', 'addressLocality' => 'Gurugram', 'postalCode' => '122001', 'addressCountry' => 'IN'],
        ['@type' => 'PostalAddress', 'streetAddress' => 'Sector 10, Dwarka', 'addressLocality' => 'Delhi', 'postalCode' => '110075', 'addressCountry' => 'IN'],
    ],
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

require __DIR__ . '/includes/header.php';
?>

<a id="top"></a>

<!-- ==================================================================== HERO -->
<!--
  Two columns on white: the claim and the booking CTA on the reading side,
  Dr. Arun's own photograph opposite. The photograph carries his name and
  credential directly, so the personal brand lands before any scrolling.
-->
<section class="hero">
  <div class="hero__inner">

    <div class="hero__copy fade-in">
      <span class="pill"><span class="dot"></span> استشاري جراحة المخ والأعصاب والعمود الفقري</span>

      <h1 class="hero__title">
        رعاية متقدمة للدماغ والعمود الفقري مع
        <span>الدكتور أرون ساروهـا</span>
      </h1>

      <p class="hero__lede">
        زمالة MCh في جراحة المخ والأعصاب من معهد PGIMER، ومدير أول لوحدة جراحة المخ والأعصاب
        والعمود الفقري في مستشفى ماكس التخصصي. رعاية دقيقة تبدأ دائماً بالعلاج التحفظي،
        ولا تنتقل إلى الجراحة إلا عندما تكون هي الأفضل لحالتك.
      </p>

      <div class="hero__actions">
        <a class="btn btn-primary" href="#appointment">احجز استشارتك الآن</a>
        <a class="btn btn-outline" href="<?= e(WHATSAPP_LINK) ?>" target="_blank" rel="noopener">
          <?= icon_whatsapp('#1faa5c') ?> أرسل تقاريرك عبر واتساب
        </a>
      </div>

      <p class="hero__note">
        <svg width="17" height="17" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="9.5" stroke="#0f9b8e" stroke-width="1.6"/><path d="M12 7.5V12l3 2" stroke="#0f9b8e" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
        <span>مراجعة تقاريرك الطبية باللغة العربية قبل السفر — استشارة عن بُعد متاحة للمرضى الدوليين.</span>
      </p>

      <div class="hero__trust">
        <?php foreach ($TRUST as $item): ?>
          <div class="trust-item">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="11" fill="#d9f4f0"/><path d="M7.5 12.3l3 3 6-6.5" stroke="#0f9b8e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            <span><?= e($item) ?></span>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <div class="hero__portrait fade-in">
      <div class="hero__portrait-frame">
        <img src="<?= img_url('assets/dr-arun-saroha.png') ?>"
             alt="الدكتور أرون ساروهـا، استشاري جراحة المخ والأعصاب والعمود الفقري في مستشفى ماكس التخصصي"
             width="1536" height="1024" fetchpriority="high" decoding="async">

        <div class="hero__nameplate">
          <div class="hero__nameplate-n">الدكتور أرون ساروهـا</div>
          <div class="hero__nameplate-r">MCh جراحة المخ والأعصاب — PGIMER شانديغار</div>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ======================================================= CREDENTIALS STRIP -->
<!--
  What used to be a band of counters. Each line here is a fact a patient can
  check for themselves, which is worth more on a medical site than a number
  nobody can source.
-->
<section class="credstrip" aria-label="مؤهلات الدكتور أرون ساروهـا">
  <div class="credstrip__grid">
    <?php foreach ($CREDSTRIP as $item): ?>
      <div class="credstrip__item">
        <span class="credstrip__icon">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none"><?= $item['icon'] ?></svg>
        </span>
        <div>
          <div class="credstrip__t"><?= e($item['title']) ?></div>
          <div class="credstrip__d"><?= e($item['desc']) ?></div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- =================================================================== ABOUT -->
<section class="section section-white" id="about">
  <div class="about__grid">

    <div class="about__media">
      <div class="about__photo">
        <img src="https://spineandbrainindia.com/assets/img/home.webp"
             alt="الدكتور أرون ساروهـا — استشاري جراحة المخ والأعصاب والعمود الفقري" loading="lazy">
      </div>
      <div class="about__badge">
        <span class="about__badge-icon">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M22 10 12 5 2 10l10 5 10-5Z" stroke="#fff" stroke-width="1.5" stroke-linejoin="round"/><path d="M6 12v5c0 1 2.7 2.5 6 2.5s6-1.5 6-2.5v-5" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </span>
        <div>
          <div class="about__badge-n" dir="ltr">MCh</div>
          <div class="about__badge-l">جراحة المخ والأعصاب — معهد PGIMER شانديغار</div>
        </div>
      </div>
    </div>

    <div class="about__body">
      <span class="eyebrow">عن الدكتور</span>
      <h2 class="h-section">تعرّف على الدكتور أرون ساروهـا</h2>

      <p class="about__p">يشغل الدكتور أرون ساروهـا منصب مدير أول ورئيس وحدة جراحة العمود الفقري والمخ والأعصاب في مستشفى ماكس التخصصي بمدينتي جوروجرام ودلهي (دواركا). حصل على درجة الماجستير في الجراحة وزمالة MCh في جراحة المخ والأعصاب من معهد PGIMER في شانديغار، ويُعد من الأسماء الموثوقة في علاج حالات المخ والعمود الفقري المعقدة داخل الهند وخارجها.</p>
      <p class="about__p">يتميّز بنهج يعتمد على العلاج التحفظي أولاً، ولا يوصي بالجراحة إلا عندما تحقق أفضل النتائج على المدى الطويل. تشمل خبرته أحدث تقنيات الجراحة طفيفة التوغل والجراحة الموجّهة بالملاحة والمراقبة العصبية أثناء العملية، مع اهتمام خاص بمرافقة المرضى الدوليين القادمين من دول الخليج والشرق الأوسط في كل خطوة من رحلة العلاج.</p>

      <div class="u-mt-26">
        <div class="field-label">مجالات الخبرة</div>
        <div class="tag-row">
          <?php foreach ($EXPERTISE as $chip): ?>
            <span class="tag"><?= e($chip) ?></span>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="cred-grid">
        <?php foreach ($CREDENTIALS as $cred): ?>
          <div class="cred">
            <div class="cred__t"><?= e($cred['title']) ?></div>
            <div class="cred__d"><?= e($cred['desc']) ?></div>
          </div>
        <?php endforeach; ?>
      </div>

      <div class="qual">
        <div>
          <div class="qual__h">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M22 10 12 5 2 10l10 5 10-5Z" stroke="#0f9b8e" stroke-width="1.5" stroke-linejoin="round"/><path d="M6 12v5c0 1 2.7 2.5 6 2.5s6-1.5 6-2.5v-5" stroke="#0f9b8e" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            المؤهلات العلمية
          </div>
          <ul class="qual__list">
            <?php foreach ($QUALIFICATIONS as $line): ?><li><?= e($line) ?></li><?php endforeach; ?>
          </ul>
        </div>
        <div>
          <div class="qual__h">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M8 21h8m-4-4v4M6 4h12v4a6 6 0 0 1-12 0V4Zm12 1h2a2 2 0 0 1 0 4h-2M6 5H4a2 2 0 0 0 0 4h2" stroke="#0f9b8e" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            الخبرة والعضويات
          </div>
          <ul class="qual__list qual__list--teal">
            <?php foreach ($EXPERIENCE as $line): ?><li><?= e($line) ?></li><?php endforeach; ?>
          </ul>
        </div>
      </div>

      <div class="hero__actions">
        <a class="btn btn-primary" href="#appointment">احجز استشارة مع الدكتور</a>
        <a class="btn btn-outline" href="#specialties">التخصصات الطبية</a>
      </div>
    </div>

  </div>
</section>

<!-- ============================================================ SPECIALTIES -->
<section class="section section-tint" id="specialties">
  <div class="wrap">
    <div class="head-center">
      <span class="eyebrow">التخصصات</span>
      <h2 class="h-section">التخصصات الطبية</h2>
      <p class="lede">مجالات دقيقة في جراحة المخ والأعصاب والعمود الفقري، بأحدث الأساليب المناسبة لكل حالة.</p>
    </div>

    <div class="grid grid-auto-300 mt-48">
      <?php foreach ($SPECIALTIES as $spec): ?>
        <div class="card card-lift spec">
          <span class="spec__icon">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none"><?= $spec['icon'] ?></svg>
          </span>
          <h3 class="spec__t"><?= e($spec['title']) ?></h3>
          <ul class="spec__list">
            <?php foreach ($spec['items'] as $item): ?><li><?= e($item) ?></li><?php endforeach; ?>
          </ul>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============================================================= TREATMENTS -->
<section class="section section-white" id="treatments">
  <div class="wrap">
    <div class="head-center">
      <span class="eyebrow">العلاجات والعمليات</span>
      <h2 class="h-section">العلاجات والعمليات الجراحية</h2>
      <p class="lede">إجراءات جراحية دقيقة تعتمد على أحدث التقنيات لتحقيق أفضل النتائج وأسرع تعافٍ ممكن.</p>
    </div>

    <div class="grid grid-auto-300 mt-48">
      <?php foreach ($TREATMENTS as $tx): ?>
        <div class="card card-lift tx">
          <div class="tx__media">
            <img src="<?= img_url($tx['img']) ?>" alt="<?= e($tx['title']) ?>" loading="lazy">
          </div>
          <div class="tx__body">
            <h3 class="tx__t"><?= e($tx['title']) ?></h3>
            <p class="tx__d"><?= e($tx['desc']) ?></p>
            <a class="link-more" href="<?= service_url($tx['slug']) ?>">اعرف المزيد <span class="u-arrow">←</span></a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============================================================ WHY CHOOSE -->
<section class="section section-deep">
  <div class="wrap">
    <div class="head-center-wide">
      <span class="eyebrow-light">لماذا نحن</span>
      <h2 class="h-section">لماذا يختار المرضى الدكتور أرون ساروهـا؟</h2>
    </div>

    <div class="grid grid-auto-260 mt-48">
      <?php foreach ($WHY as $why): ?>
        <div class="why">
          <span class="why__icon">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none"><?= $why['icon'] ?></svg>
          </span>
          <h3 class="why__t"><?= e($why['title']) ?></h3>
          <p class="why__d"><?= e($why['desc']) ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ================================================= INTERNATIONAL PATIENTS -->
<section class="section section-tint" id="international">
  <div class="wrap">
    <div class="head-center-wide">
      <span class="eyebrow">المرضى الدوليون</span>
      <h2 class="h-section">رعاية متكاملة للمرضى الدوليين</h2>
      <p class="lede">نرافق المرضى القادمين من دول الخليج والشرق الأوسط في كل خطوة من رحلة العلاج.</p>
    </div>

    <div class="grid grid-auto-230 mt-48 u-gap-18">
      <?php foreach ($JOURNEY as $step): ?>
        <div class="step">
          <span class="step__n"><?= e($step['n']) ?></span>
          <h3 class="step__t"><?= e($step['title']) ?></h3>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="cta-row">
      <a class="btn btn-primary" href="#appointment">تحدّث مع فريق المرضى الدوليين</a>
      <a class="btn btn-whatsapp" href="<?= e(WHATSAPP_LINK) ?>" target="_blank" rel="noopener">
        <?= icon_whatsapp('#fff') ?> واتساب
      </a>
    </div>
  </div>
</section>

<!-- ============================================================= CONDITIONS -->
<section class="section section-white" id="conditions">
  <div class="wrap">
    <div class="head-center">
      <span class="eyebrow">الحالات المرضية</span>
      <h2 class="h-section">الحالات التي نعالجها</h2>
    </div>

    <div class="grid grid-auto-220 mt-48 u-gap-16">
      <?php foreach ($CONDITIONS as $cond): ?>
        <div class="cond">
          <span class="cond__icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><?= $cond['icon'] ?></svg>
          </span>
          <span class="cond__n"><?= e($cond['name']) ?></span>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============================================================= FACILITIES -->
<section class="section section-tint">
  <div class="wrap">
    <div class="head-center-wide">
      <span class="eyebrow">المستشفيات</span>
      <h2 class="h-section">بيئة طبية متقدمة لرعاية مرضانا</h2>
      <p class="lede">يُجري الدكتور أرون ساروهـا عملياته في مستشفى ماكس التخصصي بمدينتي جوروجرام ودلهي (دواركا) — مرافق معتمدة ومجهّزة بأحدث تقنيات جراحة المخ والأعصاب.</p>
    </div>

    <div class="grid grid-auto-300 mt-48">
      <?php foreach ($FACILITIES as $fac): ?>
        <div class="fac">
          <div class="fac__head">
            <span class="fac__icon">
              <svg width="26" height="26" viewBox="0 0 24 24" fill="none"><path d="M4 20h16M6 20V6l6-3 6 3v14M10 9h4M10 13h4M10 17h4" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </span>
            <h3 class="fac__t"><?= e($fac['name']) ?></h3>
          </div>

          <span class="fac__badge"><?= e($fac['badge']) ?></span>

          <p class="fac__loc">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M12 21s-7-5.5-7-11a7 7 0 0 1 14 0c0 5.5-7 11-7 11Z" stroke="#0f9b8e" stroke-width="1.5"/><circle cx="12" cy="10" r="2.5" stroke="#0f9b8e" stroke-width="1.5"/></svg>
            <span><?= e($fac['location']) ?></span>
          </p>

          <ul class="fac__list">
            <?php foreach ($fac['features'] as $feature): ?>
              <li><?= icon_check() ?><span><?= e($feature) ?></span></li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- =========================================================== TESTIMONIALS -->
<!--
  The whole section is conditional on $TESTIMONIALS holding something. While
  it is empty the page shows a link to the Google Business Profile instead,
  so the proof of reputation is first-party and checkable rather than written
  here. See includes/home-data.php for how to add real reviews.
-->
<?php if ($TESTIMONIALS): ?>
<section class="section section-white" id="testimonials">
  <div class="wrap">
    <div class="head-center">
      <span class="eyebrow">آراء المرضى</span>
      <h2 class="h-section">ماذا يقول مرضانا؟</h2>
      <p class="lede">مراجعات موثّقة لمرضى خضعوا للعلاج على يد الدكتور أرون ساروهـا.</p>
    </div>

    <div class="grid grid-auto-300 mt-40 u-gap-22">
      <?php foreach ($TESTIMONIALS as $tm): ?>
        <div class="quote">
          <svg class="quote__mark" width="34" height="34" viewBox="0 0 24 24" fill="none"><path d="M10 11H7a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v6c0 2-1 3-3 4M20 11h-3a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v6c0 2-1 3-3 4" stroke="#0f9b8e" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
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
<?php elseif ($REVIEWS_URL !== ''): ?>
<section class="section section-white" id="testimonials">
  <div class="wrap">
    <div class="head-center">
      <span class="eyebrow">آراء المرضى</span>
      <h2 class="h-section">تقييمات المرضى</h2>
      <p class="lede">
        نعرض على هذا الموقع المراجعات الموثّقة فقط. يمكنك الاطلاع على تقييمات المرضى
        كما نُشرت على ملف الدكتور أرون ساروهـا في خرائط Google، دون وساطة منّا.
      </p>
    </div>

    <div class="cta-row">
      <a class="btn btn-outline" href="<?= e($REVIEWS_URL) ?>" target="_blank" rel="noopener nofollow">
        اقرأ تقييمات المرضى على Google ←
      </a>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- ==================================================================== BLOG -->
<section class="section section-tint" id="blog">
  <div class="wrap">
    <div class="blog__head">
      <div>
        <span class="eyebrow">المقالات الطبية</span>
        <h2 class="h-section">مقالات ونصائح طبية</h2>
      </div>
      <a class="link-more" href="#blog">عرض كل المقالات ←</a>
    </div>

    <div class="grid grid-auto-300 mt-40">
      <?php foreach ($ARTICLES as $article): ?>
        <a class="card card-lift post" href="<?= e($article['href']) ?>" target="_blank" rel="noopener">
          <div class="post__media">
            <img src="<?= e($article['img']) ?>" alt="<?= e($article['title']) ?>" loading="lazy">
          </div>
          <div class="post__body">
            <span class="post__tag"><?= e($article['tag']) ?></span>
            <h3 class="post__t"><?= e($article['title']) ?></h3>
            <span class="post__more">اقرأ المقال ←</span>
          </div>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ===================================================================== FAQ -->
<section class="section section-white" id="faq">
  <div class="wrap-sm">
    <div class="u-center">
      <span class="eyebrow">الأسئلة الشائعة</span>
      <h2 class="h-section">الأسئلة الشائعة</h2>
    </div>

    <div class="faq-list">
      <?php foreach ($FAQS as $i => $faq): ?>
        <div class="faq<?= $i === 0 ? ' is-open' : '' ?>">
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

<!-- ============================================================= APPOINTMENT -->
<section class="section section-deep-alt" id="appointment">
  <div class="appt__grid">
    <div>
      <span class="eyebrow-light">احجز الآن</span>
      <h2 class="h-section">احجز استشارتك الطبية</h2>
      <p class="lede">أرسل تفاصيل حالتك وتقاريرك الطبية، وسيتواصل معك فريقنا لترتيب الاستشارة المناسبة.</p>

      <div class="appt__contacts">
        <a class="contact-card contact-card--wa" href="<?= e(WHATSAPP_LINK) ?>" target="_blank" rel="noopener">
          <?= icon_whatsapp('#3fd07f', '24') ?>
          <div>
            <div class="contact-card__t">تواصل عبر واتساب</div>
            <div class="contact-card__d">رد سريع على استفساراتك</div>
          </div>
        </a>
        <a class="contact-card" href="<?= e(PHONE_LINK) ?>">
          <?= icon_phone('#72d8cc', '22') ?>
          <div>
            <div class="contact-card__t">اتصل بنا مباشرة</div>
            <div class="contact-card__d">للحجز والاستفسارات</div>
          </div>
        </a>
      </div>
    </div>

    <?php $form_variant = 'full'; require __DIR__ . '/includes/contact-form.php'; ?>
  </div>
</section>

<!-- ============================================================ LOCATION MAP -->
<section class="section section-white" id="location">
  <div class="wrap">
    <div class="head-center u-mb-40">
      <span class="eyebrow">الموقع</span>
      <h2 class="h-section">موقع العيادة على الخريطة</h2>
      <p class="lede">مستشفى ماكس التخصصي — سوشانت لوك، سيكتور 43، جوروجرام، هاريانا، الهند</p>
    </div>

    <div class="map-frame">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3507.603000018817!2d77.0747987!3d28.461381599999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1922738640a3%3A0x717aeb7ba25e979c!2sDr.%20Arun%20Saroha!5e0!3m2!1sen!2sin!4v1788160193663!5m2!1sen!2sin"
        width="100%" height="440" allowfullscreen loading="lazy"
        referrerpolicy="strict-origin-when-cross-origin"
        title="موقع الدكتور أرون ساروهـا — مستشفى ماكس جوروجرام"></iframe>
    </div>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
