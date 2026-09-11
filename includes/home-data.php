<?php
/**
 * home-data.php — content arrays for the home page.
 *
 * Keeping the copy here means index.php stays pure markup and the text can be
 * edited without touching any HTML.
 */

/* Trust bullets under the hero headline. */
$TRUST = [
    'خبرة واسعة في جراحة المخ والأعصاب',
    'تقنيات جراحية متقدمة',
    'رعاية مخصصة لكل مريض',
    'استقبال المرضى الدوليين',
];

/*
 * The strip under the hero.
 *
 * This used to hold four counters (years, operations, countries, a Google
 * star rating). None of them could be sourced, and an unverifiable figure on
 * a medical site is a liability rather than a selling point, so the strip now
 * carries only facts that can be checked against a register, a hospital
 * directory or an accreditation body.
 *
 * If you want counters back, put the figure AND where it can be verified in
 * $VERIFIED_STATS at the bottom of this file. Nothing renders while it is empty.
 */
$CREDSTRIP = [
    [
        'title' => 'زمالة MCh في جراحة المخ والأعصاب',
        'desc'  => 'معهد PGIMER — شانديغار، الهند',
        'icon'  => '<path d="M22 10 12 5 2 10l10 5 10-5Z" stroke="#0f9b8e" stroke-width="1.6" stroke-linejoin="round"/><path d="M6 12v5c0 1 2.7 2.5 6 2.5s6-1.5 6-2.5v-5" stroke="#0f9b8e" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>',
    ],
    [
        'title' => 'مدير أول ورئيس وحدة جراحة المخ والأعصاب والعمود الفقري',
        'desc'  => 'مستشفى ماكس التخصصي — جوروجرام ودواركا',
        'icon'  => '<path d="M4 20h16M6 20V7l6-3 6 3v13M10 10h4M10 14h4" stroke="#0f9b8e" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>',
    ],
    [
        'title' => 'مستشفيات معتمدة من NABH',
        'desc'  => 'الهيئة الوطنية الهندية لاعتماد المستشفيات والمنشآت الصحية',
        'icon'  => '<path d="M12 3l7.5 3v5.5c0 4.4-3.1 8.3-7.5 9.5-4.4-1.2-7.5-5.1-7.5-9.5V6L12 3Z" stroke="#0f9b8e" stroke-width="1.6" stroke-linejoin="round"/><path d="M8.8 12.2l2.2 2.2 4.2-4.6" stroke="#0f9b8e" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>',
    ],
    [
        'title' => 'استشارة عن بُعد باللغة العربية',
        'desc'  => 'مراجعة التقارير ومرافقة كاملة لمرضى الخليج والشرق الأوسط',
        'icon'  => '<circle cx="12" cy="12" r="8.5" stroke="#0f9b8e" stroke-width="1.6"/><path d="M3.5 12h17M12 3.5c2.6 2.7 2.6 14.3 0 17M12 3.5c-2.6 2.7-2.6 14.3 0 17" stroke="#0f9b8e" stroke-width="1.6"/>',
    ],
];

/* Credential cards in the "about the doctor" section. */
$CREDENTIALS = [
    ['title' => 'المؤهلات العلمية', 'desc' => 'MBBS، وماجستير جراحة عامة، وزمالة MCh في جراحة المخ والأعصاب — PGIMER شانديغار'],
    ['title' => 'المنصب الحالي',    'desc' => 'مدير أول ورئيس وحدة جراحة العمود الفقري والمخ والأعصاب — مستشفى ماكس'],
    ['title' => 'مجالات التخصص',   'desc' => 'جراحة أورام الدماغ، وقاعدة الجمجمة، والعمود الفقري، والأعصاب الطرفية'],
    ['title' => 'العضوية المهنية', 'desc' => 'عضو الجمعية العصبية في الهند (Neurological Society of India)'],
];

/* Expertise chips. */
$EXPERTISE = [
    'أورام الدماغ', 'جراحة العمود الفقري', 'الانزلاق الغضروفي',
    'جراحة قاعدة الجمجمة', 'الأعصاب الطرفية', 'الجراحة طفيفة التوغل',
];

$QUALIFICATIONS = [
    'بكالوريوس الطب والجراحة (MBBS) — كلية رابندرانات طاغور الطبية',
    'ماجستير الجراحة العامة (MS) — معهد PGIMER، شانديغار',
    'زمالة MCh في جراحة المخ والأعصاب — معهد PGIMER، شانديغار',
];

$EXPERIENCE = [
    'مدير أول ورئيس وحدة جراحة المخ والأعصاب والعمود الفقري — مستشفى ماكس (جوروجرام ودواركا)',
    'ممارسة متخصصة في جراحة أورام الدماغ وقاعدة الجمجمة والعمود الفقري والأعصاب الطرفية',
    'عضو الجمعية العصبية في الهند (Neurological Society of India)',
    'خبرة في استقبال ومتابعة المرضى الدوليين القادمين من دول الخليج والشرق الأوسط',
];

/* Medical specialities grid. `icon` holds the inner paths of a 24×24 SVG. */
$SPECIALTIES = [
    [
        'title' => 'جراحة المخ والأعصاب',
        'icon'  => '<path d="M12 4a4 4 0 0 0-4 4c-1.5.5-2 2-1.3 3.3C6 12.5 6 14 7 15c0 1.5 1.3 2.5 2.7 2.5M12 4a4 4 0 0 1 4 4c1.5.5 2 2 1.3 3.3.7 1.2.7 2.7-.3 3.7 0 1.5-1.3 2.5-2.7 2.5M12 4v14" stroke="#0f9b8e" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>',
        'items' => ['أورام الدماغ', 'جراحات الدماغ المعقدة', 'جراحات الأعصاب'],
    ],
    [
        'title' => 'جراحة العمود الفقري',
        'icon'  => '<path d="M12 3v18M9 5h6M8.5 8.5h7M8 12h8M8.5 15.5h7M9 19h6" stroke="#0f9b8e" stroke-width="1.5" stroke-linecap="round"/>',
        'items' => ['انزلاق الغضاريف', 'تضيق القناة الشوكية', 'مشاكل الفقرات', 'جراحات العمود الفقري المتقدمة'],
    ],
    [
        'title' => 'جراحة أورام المخ',
        'icon'  => '<circle cx="12" cy="12" r="7" stroke="#0f9b8e" stroke-width="1.5"/><path d="M9.5 12a2.5 2.5 0 1 1 5 0 2.5 2.5 0 0 1-5 0Z" stroke="#0f9b8e" stroke-width="1.5"/>',
        'items' => ['تشخيص وعلاج أورام الدماغ', 'جراحات الأورام المعقدة'],
    ],
    [
        'title' => 'جراحة الأعصاب الطرفية',
        'icon'  => '<path d="M4 12c3 0 3-4 6-4s3 8 6 8 4-4 4-4" stroke="#0f9b8e" stroke-width="1.5" stroke-linecap="round"/>',
        'items' => ['علاج انضغاط الأعصاب', 'إصلاح الأعصاب الطرفية'],
    ],
    [
        'title' => 'جراحة قاعدة الجمجمة',
        'icon'  => '<path d="M12 3a7 7 0 0 0-7 7v4l-1 4h4l1-2h6l1 2h4l-1-4v-4a7 7 0 0 0-7-7Z" stroke="#0f9b8e" stroke-width="1.5" stroke-linejoin="round"/><circle cx="9.5" cy="11" r="1" fill="#0f9b8e"/><circle cx="14.5" cy="11" r="1" fill="#0f9b8e"/>',
        'items' => ['أورام قاعدة الجمجمة', 'إجراءات دقيقة ومتخصصة'],
    ],
    [
        'title' => 'جراحات طفيفة التوغل',
        'icon'  => '<path d="M15 4l5 5-9 9H6v-5l9-9Z" stroke="#0f9b8e" stroke-width="1.5" stroke-linejoin="round"/>',
        'items' => ['جراحات العمود الفقري طفيفة التوغل', 'تعافٍ أسرع وشقوق أصغر'],
    ],
];

/* Featured treatments — each links to a service page. */
$TREATMENTS = [
    ['title' => 'جراحة الانزلاق الغضروفي', 'desc' => 'علاج جراحي دقيق لانزلاق الغضاريف لتخفيف الضغط على الأعصاب واستعادة الحركة.', 'img' => 'assets/tx-disc.png',       'slug' => 'back-pain-treatment'],
    ['title' => 'جراحة أورام الدماغ',      'desc' => 'استئصال أورام الدماغ باستخدام تقنيات دقيقة تحافظ على الأنسجة السليمة.',      'img' => 'assets/tx-braintumor.png', 'slug' => 'brain-tumor-surgery'],
    ['title' => 'جراحة العمود الفقري',     'desc' => 'إجراءات متقدمة لعلاج مشاكل الفقرات وتضيق القناة الشوكية وآلام الظهر المزمنة.', 'img' => 'assets/tx-spine.png',      'slug' => 'spinal-stenosis-surgery'],
    ['title' => 'جراحة قاعدة الجمجمة',     'desc' => 'جراحات متخصصة ودقيقة للأورام والحالات المعقدة في منطقة قاعدة الجمجمة.',    'img' => 'assets/tx-skullbase.png',  'slug' => 'skull-base-surgery'],
    ['title' => 'جراحة الأعصاب المعقدة',   'desc' => 'حلول جراحية للحالات العصبية المعقدة التي تتطلب خبرة ودقة عالية.',           'img' => 'assets/tx-nerves.png',     'slug' => 'complex-nerve-surgery'],
    ['title' => 'جراحات طفيفة التوغل',     'desc' => 'تقنيات حديثة بشقوق صغيرة تقلل الألم وتسرّع فترة التعافي.',                 'img' => 'assets/tx-minimally.png',  'slug' => 'minimally-invasive-spine-surgery'],
];

/* "Why patients choose us" — dark section. */
$WHY = [
    ['title' => 'خبرة جراحية متقدمة',   'desc' => 'رعاية متخصصة للحالات العصبية وجراحات العمود الفقري.',            'icon' => '<path d="M12 3l2.3 4.6 5.1.8-3.7 3.6.9 5.1L12 15.8 7.4 17.1l.9-5.1L4.6 8.4l5.1-.8L12 3Z" stroke="#72d8cc" stroke-width="1.5" stroke-linejoin="round"/>'],
    ['title' => 'نهج يركّز على المريض',  'desc' => 'خطة علاجية مصممة وفق احتياجات وحالة كل مريض.',                    'icon' => '<path d="M12 20s-7-4.4-7-9a4 4 0 0 1 7-2.6A4 4 0 0 1 19 11c0 4.6-7 9-7 9Z" stroke="#72d8cc" stroke-width="1.5" stroke-linejoin="round"/>'],
    ['title' => 'تقنيات طبية حديثة',    'desc' => 'الاستفادة من أحدث الأساليب والتقنيات الجراحية المناسبة للحالة.',   'icon' => '<path d="M12 4v4m0 8v4m8-8h-4M8 12H4m11.3-5.3-2.8 2.8m-3 3-2.8 2.8m0-8.6 2.8 2.8m3 3 2.8 2.8" stroke="#72d8cc" stroke-width="1.5" stroke-linecap="round"/>'],
    ['title' => 'رعاية للمرضى الدوليين', 'desc' => 'دعم المرضى القادمين من خارج الهند خلال رحلة العلاج بالكامل.',      'icon' => '<circle cx="12" cy="12" r="8" stroke="#72d8cc" stroke-width="1.5"/><path d="M4 12h16M12 4c2.5 2.5 2.5 13 0 16M12 4c-2.5 2.5-2.5 13 0 16" stroke="#72d8cc" stroke-width="1.5"/>'],
];

/* International patient journey. */
$JOURNEY = [
    ['n' => '١', 'title' => 'إرسال التقارير الطبية'],
    ['n' => '٢', 'title' => 'مراجعة الحالة'],
    ['n' => '٣', 'title' => 'الاستشارة الطبية'],
    ['n' => '٤', 'title' => 'وضع الخطة العلاجية'],
    ['n' => '٥', 'title' => 'تنسيق المستشفى'],
    ['n' => '٦', 'title' => 'الوصول إلى الهند'],
    ['n' => '٧', 'title' => 'العلاج والجراحة'],
    ['n' => '٨', 'title' => 'المتابعة بعد العلاج'],
];

/* Conditions treated. */
$CONDITIONS = [
    ['name' => 'أورام الدماغ',            'icon' => '<circle cx="12" cy="12" r="7" stroke="#0f9b8e" stroke-width="1.5"/><circle cx="12" cy="12" r="2.5" stroke="#0f9b8e" stroke-width="1.5"/>'],
    ['name' => 'الانزلاق الغضروفي',       'icon' => '<path d="M12 3v18M8 8h8M8 16h8" stroke="#0f9b8e" stroke-width="1.5" stroke-linecap="round"/>'],
    ['name' => 'آلام الظهر',              'icon' => '<path d="M12 4v16M9 7h6M9 12h6M9 17h6" stroke="#0f9b8e" stroke-width="1.5" stroke-linecap="round"/>'],
    ['name' => 'تضيق العمود الفقري',      'icon' => '<path d="M8 4c2 2 6 2 8 0M8 20c2-2 6-2 8 0M10 4v16M14 4v16" stroke="#0f9b8e" stroke-width="1.5" stroke-linecap="round"/>'],
    ['name' => 'أورام العمود الفقري',     'icon' => '<path d="M12 3v18" stroke="#0f9b8e" stroke-width="1.5"/><circle cx="12" cy="10" r="2.5" stroke="#0f9b8e" stroke-width="1.5"/>'],
    ['name' => 'إصابات العمود الفقري',    'icon' => '<path d="M5 12h14M12 5l3 3-3 3M12 19l-3-3 3-3" stroke="#0f9b8e" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>'],
    ['name' => 'أمراض الأعصاب',           'icon' => '<path d="M4 12c3 0 3-4 6-4s3 8 6 8 4-4 4-4" stroke="#0f9b8e" stroke-width="1.5" stroke-linecap="round"/>'],
    ['name' => 'الحالات العصبية المعقدة', 'icon' => '<path d="M12 5a3 3 0 0 0-3 3c-1 .4-1.3 1.5-.6 2.4-.5.8-.3 1.9.6 2.4 0 1 .9 1.8 2 1.8s2-.8 2-1.8c.9-.5 1.1-1.6.6-2.4.7-.9.4-2-.6-2.4A3 3 0 0 0 12 5Z" stroke="#0f9b8e" stroke-width="1.4" stroke-linejoin="round"/>'],
];

/* Hospitals. */
$FACILITIES = [
    [
        'name'     => 'مستشفى ماكس التخصصي — جوروجرام',
        'badge'    => 'معتمد من NABH',
        'location' => 'سوشانت لوك المرحلة الأولى، سيكتور 43، جوروجرام – 122001',
        'features' => [
            'سعة تتجاوز 500 سرير',
            'وحدة عناية عصبية مركّزة تعمل على مدار الساعة',
            'أنظمة جراحة متقدمة موجّهة بالملاحة',
            'مكتب مخصص لخدمة المرضى الدوليين',
        ],
    ],
    [
        'name'     => 'مستشفى ماكس التخصصي — دواركا',
        'badge'    => 'قرب مطار دلهي الدولي',
        'location' => 'سيكتور 10، دواركا، دلهي – 110075',
        'features' => [
            'سعة تتجاوز 400 سرير',
            'تصوير تشخيصي متقدم: رنين مغناطيسي 3 تسلا وأشعة مقطعية 128 شريحة',
            'غرف جراحة طفيفة التوغل',
            'على بُعد 20 دقيقة من مطار إنديرا غاندي الدولي',
        ],
    ],
];

/*
 * Patient testimonials.
 *
 * Deliberately empty. The three stories that used to sit here were written
 * marketing copy, not reviews collected from patients, and publishing those
 * as testimonials on a medical site is a real risk — for the doctor's
 * registration as much as for the site.
 *
 * To turn the section back on, add entries in this shape:
 *
 *     [
 *       'quote'   => 'the patient's own words, in Arabic',
 *       'initial' => 'ر.ك',                  // initials only
 *       'name'    => 'راجيش كومار',           // or 'مريض' if not consented
 *       'country' => 'جراحة انزلاق غضروفي — دلهي',
 *       'source'  => 'https://…',            // where it can be read publicly
 *     ]
 *
 * Only add a review that exists somewhere a visitor can check — a Google
 * Business Profile review, Practo, a signed consent form on file. Keep the
 * consent record. The section, its heading and its rating chip all stay
 * hidden while this array is empty, so nothing unverified ever renders.
 */
$TESTIMONIALS = [];

/*
 * The Google Business Profile, used as the public proof of reviews in place
 * of quotes the site cannot source. Set to '' to hide the link entirely.
 */
$REVIEWS_URL = 'https://www.google.com/maps/search/?api=1&query=Dr.+Arun+Saroha';

/*
 * Numbers the site is allowed to state.
 *
 * Empty on purpose. Add an entry only once you can point to where the figure
 * comes from — a hospital record, an audited log, a public profile:
 *
 *     ['n' => '9,000+', 'l' => 'عملية ناجحة', 'source' => 'hospital records, 2026'],
 *
 * The strip under the hero renders these when present, and stays as the
 * credentials strip while this is empty.
 */
$VERIFIED_STATS = [];

/* Blog teasers. */
$ARTICLES = [
    ['tag' => 'ألم الظهر',          'title' => 'متى يحتاج ألم الظهر إلى جراحة؟',              'href' => 'https://spineandbrainindia.com/blog/when-does-back-pain-require-surgery/',   'img' => 'https://images.unsplash.com/photo-1551190822-a9333d879b1f?w=900&h=520&fit=crop&q=80&auto=format'],
    ['tag' => 'الانزلاق الغضروفي',  'title' => 'كيف أعرف إن كان الانزلاق الغضروفي خطيراً؟',   'href' => 'https://spineandbrainindia.com/blog/how-do-i-know-if-my-slip-disc-is-serious/', 'img' => 'https://images.unsplash.com/photo-1579684385127-1ef15d508118?w=900&h=520&fit=crop&q=80&auto=format'],
    ['tag' => 'العمود الفقري',      'title' => 'هل يمكن أن يُشفى الانزلاق الغضروفي دون جراحة؟', 'href' => 'https://spineandbrainindia.com/blog/can-a-herniated-disc-heal-without-surgery/', 'img' => 'https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?w=900&h=520&fit=crop&q=80&auto=format'],
];

/* Home page FAQ. */
$FAQS = [
    ['q' => 'متى يجب زيارة جراح المخ والأعصاب؟',              'a' => 'يُنصح بزيارة جراح المخ والأعصاب عند استمرار الصداع الشديد، أو الضعف والتنميل في الأطراف، أو آلام الظهر والرقبة المزمنة، أو أي أعراض عصبية تؤثر على الحركة أو الإحساس. التقييم المبكر يساعد في تحديد العلاج المناسب.'],
    ['q' => 'ما هي أعراض الانزلاق الغضروفي؟',                 'a' => 'تشمل الأعراض الشائعة ألماً يمتد من الظهر إلى الساق أو من الرقبة إلى الذراع، مع تنميل أو ضعف في العضلات. تختلف شدة الأعراض من حالة لأخرى ويحددها الفحص الطبي.'],
    ['q' => 'هل جميع حالات الانزلاق الغضروفي تحتاج إلى عملية؟', 'a' => 'لا، كثير من الحالات تتحسن بالعلاج التحفظي مثل الأدوية والعلاج الطبيعي. يُلجأ للجراحة عند فشل العلاجات الأخرى أو وجود ضغط شديد على الأعصاب، ويُحدد ذلك بعد تقييم دقيق.'],
    ['q' => 'كيف يمكنني إرسال تقاريري الطبية؟',               'a' => 'يمكنك إرسال التقارير والأشعة عبر نموذج الحجز في الموقع أو عبر واتساب، وسيقوم الفريق بمراجعتها والتواصل معك لترتيب الاستشارة.'],
    ['q' => 'هل يمكن للمرضى الدوليين الحصول على استشارة؟',    'a' => 'نعم، نوفر دعماً متكاملاً للمرضى الدوليين يشمل مراجعة الحالة عن بُعد، والاستشارة، وتنسيق المستشفى، والمتابعة بعد العلاج.'],
    ['q' => 'كيف يمكنني حجز موعد؟',                          'a' => 'يمكنك الحجز مباشرة عبر نموذج «احجز استشارتك الطبية» في الموقع، أو عبر واتساب والهاتف، وسيتواصل معك الفريق لتأكيد الموعد.'],
    ['q' => 'ما المستندات الطبية التي يجب إرسالها؟',          'a' => 'يُفضّل إرسال أحدث التقارير الطبية، وصور الأشعة (MRI/CT) إن وُجدت، وقائمة الأدوية الحالية، وأي تقارير سابقة متعلقة بالحالة لتقييم أدق.'],
];
