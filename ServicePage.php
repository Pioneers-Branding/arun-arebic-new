<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="support.js"></script>

<style>
  /* Global Mobile Spacing Fixes */
  @media (max-width: 768px) {
    section {
      padding-top: 48px !important;
      padding-bottom: 48px !important;
      padding-left: 20px !important;
      padding-right: 20px !important;
    }
    /* Don't override hero padding if it's special, but ensure it's not too large */
    .dr-hero-mobile {
      padding-top: 60px !important;
      padding-bottom: 40px !important;
      padding-left: 20px !important;
      padding-right: 20px !important;
      min-height: 80vh !important;
    }
    /* Reduce large gaps in flex/grid */
    div[style*="gap:56px"], div[style*="gap: 56px"] { gap: 32px !important; }
    div[style*="gap:64px"], div[style*="gap: 64px"] { gap: 32px !important; }
    div[style*="gap:48px"], div[style*="gap: 48px"] { gap: 24px !important; }
    
    /* Reduce large top margins */
    div[style*="margin-top:56px"], h2[style*="margin-top:56px"] { margin-top: 32px !important; }
    div[style*="margin-top:64px"], h2[style*="margin-top:64px"] { margin-top: 32px !important; }
    div[style*="margin-top:96px"], h2[style*="margin-top:96px"] { margin-top: 48px !important; }
    
    /* Adjust font sizes slightly if they are huge */
    h2 { font-size: clamp(24px, 6vw, 32px) !important; }
  }
</style>
</head>

<body>
<x-dc>
<helmet>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600;700;800;900&family=Tajawal:wght@400;500;700&display=swap" rel="stylesheet">
<style>
  *{box-sizing:border-box}
  body{margin:0}
  a{color:#1466b8;text-decoration:none}
  a:hover{color:#0e4d8c}
  @keyframes drFade{from{opacity:0;transform:translateY(14px)}to{opacity:1;transform:none}}
  .dr-scroll::-webkit-scrollbar{height:0}
  @media(min-width:960px){.dr-mobilebar{display:none !important}}
  @media(max-width:1024px){.dr-navlinks{display:none !important}.dr-hamburger{display:flex !important}}
  @media(min-width:1025px){.dr-mobilemenu{display:none !important}.dr-hamburger{display:none !important}}
  @media(min-width:900px){
    .svc-hero{padding-top:0 !important}
    .svc-hero-bg{bottom:auto !important;height:280px !important}
    .svc-hero-inner{min-height:280px;display:flex;flex-direction:column;justify-content:center}
    .svc-hero-crumb{margin-bottom:10px !important}
    .svc-hero-h1{font-size:clamp(28px,3.2vw,42px) !important;margin:12px 0 0 !important}
    .svc-hero-lead{display:none !important}
    .svc-hero-grid{padding-bottom:0 !important;gap:24px !important}
  }
</style>
</helmet>
<div dir="rtl" lang="ar" style="font-family:Tajawal,system-ui,sans-serif;color:#22303f;background:#f4f8fd;overflow-x:clip;line-height:1.7;">

  <header style="position:sticky;top:14px;z-index:60;max-width:1266px;margin:14px auto 0;background:linear-gradient(180deg,rgba(14,45,82,0.97),rgba(12,35,64,0.95));backdrop-filter:blur(18px);border:1px solid rgba(255,255,255,.12);border-radius:20px;box-shadow:0 16px 34px -16px rgba(12,35,64,.5);">
    <div style="max-width:1240px;margin:0 auto;padding:14px 24px;display:flex;align-items:center;gap:20px;">
      <a href="index.php" style="display:flex;align-items:center;gap:12px;flex-shrink:0;">
        <span style="width:44px;height:44px;border-radius:12px;background:linear-gradient(160deg,#1466b8,#0c2340);display:flex;align-items:center;justify-content:center;box-shadow:0 8px 20px -8px rgba(20,102,184,.6);">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M12 3c-.9 2.4-2.6 3.4-4.6 3.7C5.6 7 5 8 5 9.6c0 3.1 2.6 5.9 7 8.9 4.4-3 7-5.8 7-8.9 0-1.6-.6-2.6-2.4-2.9C14.6 6.4 12.9 5.4 12 3Z" stroke="#fff" stroke-width="1.5" stroke-linejoin="round"/><path d="M9 11h1.5l1 2 1.5-4 1 2H15" stroke="#7ec6ff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </span>
        <span style="display:flex;flex-direction:column;line-height:1.15;">
          <b style="font-family:Cairo;font-weight:900;font-size:18px;color:#fff;">د. أرون ساروهـا</b>
          <span style="font-size:12px;color:#a9c3e0;font-weight:500;">جراحة المخ والأعصاب والعمود الفقري</span>
        </span>
      </a>
      <nav class="dr-navlinks dr-scroll" style="flex:1;display:flex;align-items:center;gap:4px;overflow-x:auto;justify-content:flex-start;scrollbar-width:none;">
        <sc-for list="{{ nav }}" as="item" hint-placeholder-count="6">
          <a href="{{ item.href }}" style="white-space:nowrap;padding:8px 12px;border-radius:8px;font-family:Cairo;font-weight:700;font-size:14.5px;color:#dce8f6;" style-hover="background:rgba(255,255,255,.14);color:#fff;">{{ item.label }}</a>
        </sc-for>
      </nav>
      <div style="display:flex;align-items:center;gap:14px;flex-shrink:0;">
        <a href="index.php#appointment" style="background:linear-gradient(180deg,#1466b8,#0e4d8c);color:#fff;padding:11px 22px;border-radius:10px;font-family:Cairo;font-weight:800;font-size:14.5px;white-space:nowrap;box-shadow:0 10px 22px -10px rgba(20,102,184,.65);" style-hover="filter:brightness(1.08);transform:translateY(-1px);">احجز موعدك</a>
        <button class="dr-hamburger" onClick="{{ toggleMenu }}" aria-label="القائمة" aria-expanded="{{ menuOpenStr }}" aria-controls="dr-mobile-nav" style="display:none;width:44px;height:44px;border:1px solid rgba(255,255,255,.3);border-radius:10px;background:rgba(255,255,255,.1);align-items:center;justify-content:center;cursor:pointer;flex-shrink:0;">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none"><path d="M4 7h16M4 12h16M4 17h16" stroke="#fff" stroke-width="1.8" stroke-linecap="round"/></svg>
        </button>
      </div>
    </div>
    <sc-if value="{{ menuOpen }}" hint-placeholder-val="{{ false }}">
      <nav id="dr-mobile-nav" aria-label="القائمة الرئيسية" class="dr-mobilemenu" style="border-top:1px solid rgba(255,255,255,.12);padding:10px 24px 16px;display:flex;flex-direction:column;gap:2px;">
        <sc-for list="{{ nav }}" as="item" hint-placeholder-count="6">
          <a href="{{ item.href }}" onClick="{{ closeMenu }}" style="padding:12px 12px;border-radius:9px;font-family:Cairo;font-weight:700;font-size:15.5px;color:#dce8f6;" style-hover="background:rgba(255,255,255,.14);color:#fff;">{{ item.label }}</a>
        </sc-for>
      </nav>
    </sc-if>
  </header>

  <sc-if value="{{ loaded }}" hint-placeholder-val="{{ true }}">
  <div style="animation:drFade .5s ease both;">

    <!-- HERO -->
    <section class="svc-hero" style="position:relative;background:linear-gradient(135deg,#0c2340 0%,#0e3a66 100%);color:#fff;padding:48px 24px 0;overflow:hidden;">
      <sc-if value="{{ hasHeroBg }}" hint-placeholder-val="{{ false }}">
        <div class="svc-hero-bg" style="position:absolute;inset:0;">
          <img src="{{ heroBg }}" alt="" role="presentation" style="width:100%;height:100%;object-fit:cover;object-position:center;display:block;">
          <div style="position:absolute;inset:0;background:linear-gradient(to left,rgba(8,20,40,.94) 0%,rgba(8,20,40,.7) 34%,rgba(8,20,40,.32) 62%,rgba(8,20,40,.12) 100%);"></div>
          <div style="position:absolute;inset:0;background:linear-gradient(to top,rgba(6,16,32,.6),transparent 40%);"></div>
        </div>
      </sc-if>
      <div style="position:absolute;top:-120px;left:-80px;width:420px;height:420px;border-radius:50%;background:radial-gradient(circle,rgba(126,198,255,.16),transparent 70%);"></div>
      <div class="svc-hero-inner" style="max-width:1240px;margin:0 auto;position:relative;">
        <nav aria-label="مسار التصفح" class="svc-hero-crumb" style="display:flex;flex-wrap:wrap;align-items:center;gap:8px;font-size:13.5px;color:#a9c3e0;font-family:Cairo;font-weight:700;margin-bottom:30px;">
          <a href="index.php" style="color:#a9c3e0;" style-hover="color:#fff;">الرئيسية</a>
          <span style="opacity:.6;">←</span>
          <a href="services.php" style="color:#a9c3e0;" style-hover="color:#fff;">الخدمات</a>
          <span style="opacity:.6;">←</span>
          <span style="color:#fff;">{{ title }}</span>
        </nav>
        <div class="svc-hero-grid" style="display:grid;grid-template-columns:repeat(auto-fit,minmax(320px,1fr));gap:48px;align-items:center;padding-bottom:56px;">
          <div>
            <span style="display:inline-flex;align-items:center;gap:8px;background:rgba(255,255,255,.12);border:1px solid rgba(255,255,255,.22);color:#eaf4ff;font-family:Cairo;font-weight:800;font-size:12.5px;padding:7px 16px;border-radius:999px;white-space:nowrap;backdrop-filter:blur(4px);">{{ catLabel }}</span>
            <h1 class="svc-hero-h1" style="font-family:Cairo;font-weight:900;font-size:clamp(32px,4.8vw,52px);line-height:1.15;color:#fff;margin:18px 0 0;text-wrap:balance;">{{ title }}</h1>
            <p class="svc-hero-lead" style="font-size:clamp(17px,1.7vw,20px);color:#cfe0f2;margin:20px 0 0;text-wrap:pretty;">{{ lead }}</p>
            <div style="display:flex;flex-wrap:wrap;gap:14px;margin-top:30px;">
              <a href="index.php#appointment" style="background:linear-gradient(180deg,#2a8ee0,#0e4d8c);color:#fff;padding:15px 30px;border-radius:12px;font-family:Cairo;font-weight:800;font-size:16px;box-shadow:0 14px 30px -12px rgba(20,102,184,.8);" style-hover="filter:brightness(1.08);transform:translateY(-1px);">احجز استشارتك الآن</a>
              <a href="https://wa.me/917860000705" style="display:inline-flex;align-items:center;gap:9px;background:rgba(255,255,255,.1);color:#fff;padding:15px 26px;border-radius:12px;font-family:Cairo;font-weight:800;font-size:16px;border:1px solid rgba(255,255,255,.3);" style-hover="background:rgba(255,255,255,.2);">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="#39d878"><path d="M12 2a10 10 0 0 0-8.6 15l-1.3 4.7 4.8-1.3A10 10 0 1 0 12 2Zm5.3 14.2c-.2.6-1.3 1.2-1.8 1.2-.5.1-1 .3-3.4-.7-2.9-1.2-4.7-4.2-4.9-4.4-.1-.2-1.1-1.5-1.1-2.9 0-1.3.7-2 1-2.3.2-.3.5-.3.7-.3h.5c.2 0 .4 0 .6.5.2.6.8 2 .9 2.1.1.1.1.3 0 .5s-.2.4-.3.6c-.2.2-.3.4-.5.6-.1.1-.3.3-.1.6.2.3.8 1.4 1.8 2.2 1.3 1.1 2.3 1.5 2.6 1.6.3.1.5.1.6-.1.2-.2.7-.8.9-1.1.2-.3.4-.2.6-.1l1.9.9c.3.1.5.2.5.3.1.2.1.9-.1 1.5Z"/></svg>
                واتساب
              </a>
            </div>
          </div>
          <sc-if value="{{ showHeroImg }}" hint-placeholder-val="{{ true }}">
            <div style="border-radius:24px;overflow:hidden;box-shadow:0 34px 70px -26px rgba(0,0,0,.55);aspect-ratio:16/12;background:#0a1f3a;border:1px solid rgba(255,255,255,.1);">
              <img src="{{ img }}" alt="{{ imgAlt }}" loading="lazy" style="width:100%;height:100%;object-fit:cover;display:block;">
            </div>
          </sc-if>
          <sc-if value="{{ showHeroIcon }}" hint-placeholder-val="{{ false }}">
            <div style="border-radius:24px;aspect-ratio:16/12;background:linear-gradient(145deg,rgba(255,255,255,.08),rgba(255,255,255,.02));border:1px solid rgba(255,255,255,.14);display:flex;align-items:center;justify-content:center;">
              <span ref="{{ heroIconRef }}" style="display:inline-flex;opacity:.9;"></span>
            </div>
          </sc-if>
          <sc-if value="{{ hasHeroBg }}" hint-placeholder-val="{{ false }}"><div></div></sc-if>
        </div>
      </div>
      <!-- quick facts card -->
      <div style="max-width:1276px;margin:0 auto;padding:26px 24px 48px;position:relative;z-index:2;">
        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));background:linear-gradient(180deg,#0f2f57,#0b2038);border:1px solid rgba(255,255,255,.12);border-radius:20px;box-shadow:0 18px 40px -18px rgba(0,0,0,.55);overflow:hidden;">
          <sc-for list="{{ quickFacts }}" as="q" hint-placeholder-count="3">
            <div style="padding:24px 28px;border-inline-start:1px solid rgba(255,255,255,.08);">
              <div style="font-size:12.5px;color:#89a6c6;font-family:Cairo;font-weight:700;">{{ q.k }}</div>
              <div style="font-size:15px;color:#fff;font-family:Cairo;font-weight:800;margin-top:4px;">{{ q.v }}</div>
            </div>
          </sc-for>
        </div>
      </div>
    </section>

    <!-- INTRO (two column) -->
    <section style="padding:88px 24px;background:#fff;">
      <div style="max-width:1160px;margin:0 auto;display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:48px;align-items:start;">
        <div style="grid-column:span 1;">
          <span style="font-family:Cairo;font-weight:800;font-size:14px;color:#0e9e90;">نبذة عن الخدمة</span>
          <h2 style="font-family:Cairo;font-weight:900;font-size:clamp(26px,3.2vw,38px);color:#0c2340;margin:12px 0 0;line-height:1.25;">نبذة عن {{ title }}</h2>
          <div style="display:flex;flex-direction:column;gap:16px;margin-top:20px;">
            <sc-for list="{{ introP }}" as="para" hint-placeholder-count="2"><p style="font-size:17px;color:#4a5a6d;margin:0;text-wrap:pretty;">{{ para }}</p></sc-for>
          </div>
          <div style="display:flex;flex-wrap:wrap;align-items:center;gap:10px 16px;margin-top:24px;padding-top:18px;border-top:1px solid #eef2f7;font-size:13.5px;color:#5d6b7c;">
            <span style="display:inline-flex;align-items:center;gap:7px;font-family:Cairo;font-weight:800;color:#0c2340;">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="11" fill="#e4f4f1"/><path d="M7.5 12.3l3 3 6-6.5" stroke="#0b7d71" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
              راجعه طبياً: د. أرون ساروهـا
            </span>
            <span>MCh جراحة المخ والأعصاب — PGIMER شانديغار</span>
            <span style="margin-inline-start:auto;">آخر مراجعة طبية: مارس 2026</span>
          </div>
        </div>
        <div style="background:linear-gradient(160deg,#f0f6fd,#e4eefb);border:1px solid #dbe6f1;border-radius:22px;padding:34px 32px;">
          <svg width="40" height="40" viewBox="0 0 24 24" fill="none" style="opacity:.5;"><path d="M10 11H7a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v6c0 2-1 3-3 4M20 11h-3a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v6c0 2-1 3-3 4" stroke="#1466b8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
          <p style="font-family:Cairo;font-weight:700;font-size:19px;color:#0c2340;margin:18px 0 0;line-height:1.6;">نبدأ دائماً بالخيارات التحفظية، ولا نوصي بالجراحة إلا عندما تحقق أفضل النتائج على المدى الطويل.</p>
          <div style="display:flex;align-items:center;gap:12px;margin-top:22px;padding-top:20px;border-top:1px solid #cddcec;">
            <span style="width:44px;height:44px;border-radius:12px;background:linear-gradient(160deg,#1466b8,#0c2340);display:flex;align-items:center;justify-content:center;">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none"><path d="M12 3c-.9 2.4-2.6 3.4-4.6 3.7C5.6 7 5 8 5 9.6c0 3.1 2.6 5.9 7 8.9 4.4-3 7-5.8 7-8.9 0-1.6-.6-2.6-2.4-2.9C14.6 6.4 12.9 5.4 12 3Z" stroke="#fff" stroke-width="1.5" stroke-linejoin="round"/></svg>
            </span>
            <div>
              <div style="font-family:Cairo;font-weight:900;font-size:15px;color:#0c2340;">الدكتور أرون ساروهـا</div>
              <div style="font-size:13px;color:#5d6b7c;">استشاري جراحة المخ والأعصاب والعمود الفقري</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- SYMPTOMS & WARNING SIGNS -->
    <sc-if value="{{ hasSymptoms }}" hint-placeholder-val="{{ true }}">
    <section style="padding:0 24px 88px;background:#fff;">
      <div style="max-width:1160px;margin:0 auto;display:grid;grid-template-columns:repeat(auto-fit,minmax(320px,1fr));gap:48px;align-items:center;">
        <div style="border-radius:24px;overflow:hidden;box-shadow:0 26px 56px -28px rgba(12,35,64,.4);aspect-ratio:4/3;background:#eaf2fb;border:1px solid #e3ecf5;">
          <sc-if value="{{ hasImg }}" hint-placeholder-val="{{ true }}">
            <img src="{{ img }}" alt="{{ imgAlt }}" loading="lazy" style="width:100%;height:100%;object-fit:cover;display:block;">
          </sc-if>
          <sc-if value="{{ noImg }}" hint-placeholder-val="{{ false }}">
            <div style="width:100%;height:100%;background:linear-gradient(145deg,#0e3a66,#0c2340);display:flex;align-items:center;justify-content:center;"><span ref="{{ heroIconRef }}" style="display:inline-flex;"></span></div>
          </sc-if>
        </div>
        <div>
          <span style="font-family:Cairo;font-weight:800;font-size:13px;letter-spacing:.08em;color:#1466b8;">التعرّف المبكر</span>
          <h2 style="font-family:Cairo;font-weight:900;font-size:clamp(24px,2.8vw,34px);color:#0c2340;margin:10px 0 0;line-height:1.25;">الأعراض والعلامات التحذيرية</h2>
          <p style="font-size:16px;color:#5d6b7c;margin:14px 0 24px;text-wrap:pretty;">التعرّف المبكر على أعراض {{ title }} يساعد على التشخيص الدقيق واختيار العلاج الأنسب في الوقت المناسب.</p>
          <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:16px;">
            <div style="background:#f4f8fd;border:1px solid #e3ecf5;border-radius:18px;padding:22px 22px;">
              <div style="display:flex;align-items:center;gap:9px;margin-bottom:14px;">
                <span style="width:34px;height:34px;border-radius:10px;background:#e2eefb;display:flex;align-items:center;justify-content:center;flex-shrink:0;"><svg width="18" height="18" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="6" r="2.4" stroke="#1466b8" stroke-width="1.6"/><path d="M12 8.5v6m0-2.5-3 4.5m3-4.5 3 4.5M8.5 10.5 12 9.5l3.5 1" stroke="#1466b8" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                <b style="font-family:Cairo;font-weight:800;font-size:16px;color:#0c2340;">علامات جسدية</b>
              </div>
              <div style="display:flex;flex-direction:column;gap:11px;">
                <sc-for list="{{ symptomsA }}" as="s" hint-placeholder-count="3">
                  <div style="display:flex;align-items:flex-start;gap:9px;"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" style="flex-shrink:0;margin-top:2px;"><path d="M5 12.5l4.5 4.5L19 7" stroke="#1466b8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span style="font-size:14.5px;color:#3c4c5f;line-height:1.6;">{{ s }}</span></div>
                </sc-for>
              </div>
            </div>
            <div style="background:#f4f8fd;border:1px solid #e3ecf5;border-radius:18px;padding:22px 22px;">
              <div style="display:flex;align-items:center;gap:9px;margin-bottom:14px;">
                <span style="width:34px;height:34px;border-radius:10px;background:#e0f2ef;display:flex;align-items:center;justify-content:center;flex-shrink:0;"><svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M9 5a3 3 0 0 0-3 3 2.5 2.5 0 0 0-1 4.6A3 3 0 0 0 8 17.5h8a3 3 0 0 0 2-4.9A2.5 2.5 0 0 0 18 8a3 3 0 0 0-3-3 3 3 0 0 0-6 0Z" stroke="#0e9e90" stroke-width="1.5" stroke-linejoin="round"/></svg></span>
                <b style="font-family:Cairo;font-weight:800;font-size:16px;color:#0c2340;">علامات حسية وعصبية</b>
              </div>
              <div style="display:flex;flex-direction:column;gap:11px;">
                <sc-for list="{{ symptomsB }}" as="s" hint-placeholder-count="2">
                  <div style="display:flex;align-items:flex-start;gap:9px;"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" style="flex-shrink:0;margin-top:2px;"><path d="M5 12.5l4.5 4.5L19 7" stroke="#0e9e90" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span style="font-size:14.5px;color:#3c4c5f;line-height:1.6;">{{ s }}</span></div>
                </sc-for>
              </div>
            </div>
          </div>
          <div style="display:flex;align-items:flex-start;gap:12px;margin-top:16px;background:#eef4fb;border:1px solid #dbe6f1;border-radius:14px;padding:16px 18px;">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" style="flex-shrink:0;margin-top:2px;"><circle cx="12" cy="12" r="9" stroke="#1466b8" stroke-width="1.5"/><path d="M12 8h.01M11 12h1v4h1" stroke="#1466b8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            <div>
              <b style="font-family:Cairo;font-weight:800;font-size:14.5px;color:#0c2340;">دوّن أعراضك قبل الاستشارة</b>
              <p style="font-size:13.5px;color:#4a5a6d;margin:5px 0 0;line-height:1.7;">تسجيل وقت بدء الأعراض وشدتها ومحفزاتها ومدى تكرارها يساعد الطبيب على الوصول إلى تشخيص أدق وأسرع.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    </sc-if>

    <!-- CAUSES + DIAGNOSIS -->
    <section style="padding:0 24px 88px;background:#fff;">
      <div style="max-width:1160px;margin:0 auto;display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:28px;">
        <div style="background:#f4f8fd;border:1px solid #e3ecf5;border-radius:20px;padding:32px 30px;">
          <h2 style="font-family:Cairo;font-weight:800;font-size:21px;color:#0c2340;margin:0 0 14px;">الأسباب وعوامل الخطر</h2>
          <p style="font-size:15.5px;color:#4a5a6d;margin:0;line-height:1.85;">{{ causes }}</p>
        </div>
        <div style="background:#f4f8fd;border:1px solid #e3ecf5;border-radius:20px;padding:32px 30px;">
          <h2 style="font-family:Cairo;font-weight:800;font-size:21px;color:#0c2340;margin:0 0 14px;">التشخيص والفحوصات</h2>
          <p style="font-size:15.5px;color:#4a5a6d;margin:0;line-height:1.85;">{{ diagnosis }}</p>
        </div>
      </div>
    </section>

    <!-- CONDITIONS WE TREAT -->
    <section style="padding:0 24px 88px;background:#fff;">
      <div style="max-width:1160px;margin:0 auto;">
        <div style="text-align:center;max-width:640px;margin:0 auto 44px;">
          <span style="font-family:Cairo;font-weight:800;font-size:13px;letter-spacing:.08em;color:#1466b8;">التطبيقات</span>
          <h2 style="font-family:Cairo;font-weight:900;font-size:clamp(26px,3.2vw,40px);color:#0c2340;margin:10px 0 0;">الحالات التي نعالجها</h2>
          <p style="font-size:16.5px;color:#5d6b7c;margin:14px 0 0;">من انضغاط الأعصاب إلى عدم الاستقرار البنيوي، هذه أبرز الحالات التي نشخّصها ونعالجها.</p>
        </div>
        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:24px;">
          <sc-for list="{{ conditionCards }}" as="c" hint-placeholder-count="3">
            <div style="background:#fff;border:1px solid #e3ecf5;border-radius:22px;padding:32px 30px;box-shadow:0 10px 30px -18px rgba(12,35,64,.22);">
              <span style="width:52px;height:52px;border-radius:14px;background:linear-gradient(160deg,#eaf2fb,#dbe8f8);display:flex;align-items:center;justify-content:center;"><span ref="{{ c.iconRef }}" style="display:inline-flex;"></span></span>
              <h3 style="font-family:Cairo;font-weight:800;font-size:19px;color:#0c2340;margin:20px 0 0;">{{ c.title }}</h3>
              <p style="font-size:14.5px;color:#5d6b7c;margin:10px 0 0;line-height:1.8;">{{ c.desc }}</p>
              <div style="display:flex;flex-wrap:wrap;gap:8px;margin-top:18px;">
                <sc-for list="{{ c.tags }}" as="t" hint-placeholder-count="2"><span style="background:#eef4fb;color:#0e4d8c;font-family:Cairo;font-weight:700;font-size:12.5px;padding:6px 13px;border-radius:999px;">{{ t }}</span></sc-for>
              </div>
            </div>
          </sc-for>
        </div>
      </div>
    </section>

    <!-- APPROACH / TECHNOLOGY -->
    <section style="padding:88px 24px;background:#f4f8fd;">
      <div style="max-width:1160px;margin:0 auto;">
        <div style="text-align:center;max-width:660px;margin:0 auto 44px;">
          <span style="font-family:Cairo;font-weight:800;font-size:14px;color:#0e9e90;">الأسلوب الجراحي</span>
          <h2 style="font-family:Cairo;font-weight:900;font-size:clamp(24px,2.8vw,32px);color:#0c2340;margin:12px 0 0;">التقنيات والأسلوب الجراحي</h2>
          <p style="font-size:16.5px;color:#4a5a6d;margin:12px 0 0;">نهج دقيق يجمع بين الخبرة الجراحية وأحدث التقنيات الطبية لتحقيق أعلى مستويات الأمان.</p>
        </div>
        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:22px;">
          <sc-for list="{{ approach }}" as="a" hint-placeholder-count="4">
            <div style="background:#fff;border:1px solid #e3ecf5;border-radius:18px;padding:28px 26px;box-shadow:0 6px 20px -14px rgba(12,35,64,.18);">
              <span style="font-family:Cairo;font-weight:900;font-size:20px;color:#1466b8;">{{ a.n }}</span>
              <h3 style="font-family:Cairo;font-weight:800;font-size:17.5px;color:#0c2340;margin:10px 0 0;">{{ a.t }}</h3>
              <p style="font-size:14.5px;color:#5d6b7c;margin:8px 0 0;">{{ a.d }}</p>
            </div>
          </sc-for>
        </div>
      </div>
    </section>

    <!-- WHEN + PROCEDURE -->
    <section style="padding:88px 24px 40px;background:#fff;">
      <div style="max-width:1160px;margin:0 auto;display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:28px;">
        <div style="background:linear-gradient(160deg,#0c2340,#0e3a66);color:#fff;border-radius:22px;padding:38px 34px;">
          <span style="width:52px;height:52px;border-radius:14px;background:rgba(126,198,255,.16);display:flex;align-items:center;justify-content:center;">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="8" stroke="#7ec6ff" stroke-width="1.5"/><path d="M12 8v4l3 2" stroke="#7ec6ff" stroke-width="1.5" stroke-linecap="round"/></svg>
          </span>
          <h2 style="font-family:Cairo;font-weight:800;font-size:22px;color:#fff;margin:20px 0 12px;">متى قد تحتاج إلى هذا العلاج؟</h2>
          <p style="font-size:16px;color:#cfe0f2;margin:0;">{{ when }}</p>
        </div>
        <div style="background:#f4f8fd;border:1px solid #e3ecf5;border-radius:22px;padding:38px 34px;">
          <span style="width:52px;height:52px;border-radius:14px;background:#eaf2fb;display:flex;align-items:center;justify-content:center;">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none"><path d="M9 3h6v3l-1 1v3l4 8H6l4-8V7L9 6V3Z" stroke="#1466b8" stroke-width="1.5" stroke-linejoin="round"/></svg>
          </span>
          <h2 style="font-family:Cairo;font-weight:800;font-size:22px;color:#0c2340;margin:20px 0 12px;">كيف يتم العلاج؟</h2>
          <div style="display:flex;flex-direction:column;gap:12px;"><sc-for list="{{ procedureP }}" as="para" hint-placeholder-count="2"><p style="font-size:16px;color:#4a5a6d;margin:0;">{{ para }}</p></sc-for></div>
        </div>
      </div>
    </section>

    <!-- RECOVERY -->
    <section style="padding:40px 24px;background:#fff;">
      <div style="max-width:1160px;margin:0 auto;border-radius:24px;padding:44px 40px;background-image:linear-gradient(160deg,#0c2340,#0e3a66);color:#fff;">
        <span style="font-family:Cairo;font-weight:800;font-size:13px;color:#7ec6ff;">بعد العلاج</span>
        <h2 style="font-family:Cairo;font-weight:900;font-size:clamp(22px,2.6vw,30px);color:#fff;margin:10px 0 14px;">التعافي والمتابعة</h2>
        <p style="font-size:16.5px;color:#cfe0f2;margin:0;max-width:860px;line-height:1.9;">{{ recovery }}</p>
      </div>
    </section>

    <!-- BENEFITS -->
    <section style="padding:40px 24px 88px;background:#fff;">
      <div style="max-width:1160px;margin:0 auto;background:linear-gradient(160deg,#f0f6fd,#e4eefb);border:1px solid #dbe6f1;border-radius:24px;padding:44px 40px;">
        <h2 style="font-family:Cairo;font-weight:900;font-size:clamp(22px,2.6vw,30px);color:#0c2340;margin:0 0 26px;">مزايا العلاج مع الدكتور أرون ساروهـا</h2>
        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:16px;">
          <sc-for list="{{ benefits }}" as="b" hint-placeholder-count="4">
            <div style="display:flex;align-items:flex-start;gap:12px;">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" style="flex-shrink:0;margin-top:1px;"><circle cx="12" cy="12" r="11" fill="#dff0fb"/><path d="M7.5 12.3l3 3 6-6.5" stroke="#1466b8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
              <span style="font-size:15.5px;color:#2b3a4d;font-weight:600;">{{ b }}</span>
            </div>
          </sc-for>
        </div>
      </div>
    </section>

    <!-- WHY CHOOSE -->
    <section style="padding:80px 24px;background:linear-gradient(180deg,#0c2340,#0e2f52);color:#fff;">
      <div style="max-width:1100px;margin:0 auto;">
        <h2 style="font-family:Cairo;font-weight:900;font-size:clamp(24px,3vw,34px);color:#fff;text-align:center;margin:0 0 40px;">لماذا الدكتور أرون ساروهـا؟</h2>
        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(230px,1fr));gap:20px;">
          <sc-for list="{{ why }}" as="w" hint-placeholder-count="4">
            <div style="background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.12);border-radius:16px;padding:26px 24px;">
              <h3 style="font-family:Cairo;font-weight:800;font-size:16.5px;color:#fff;margin:0 0 8px;">{{ w.t }}</h3>
              <p style="font-size:14px;color:#bcd0e6;margin:0;">{{ w.d }}</p>
            </div>
          </sc-for>
        </div>
      </div>
    </section>

    <!-- RELATED -->
    <section style="padding:88px 24px;background:#f4f8fd;">
      <div style="max-width:1240px;margin:0 auto;">
        <h2 style="font-family:Cairo;font-weight:900;font-size:clamp(24px,3vw,34px);color:#0c2340;text-align:center;margin:0 0 40px;">خدمات ذات صلة</h2>
        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:24px;">
          <sc-for list="{{ related }}" as="r" hint-placeholder-count="3">
            <a href="{{ r.href }}" style="display:flex;flex-direction:column;background:#fff;border:1px solid #e3ecf5;border-radius:20px;overflow:hidden;box-shadow:0 6px 20px -12px rgba(12,35,64,.15);transition:transform .2s,box-shadow .2s;" style-hover="transform:translateY(-4px);box-shadow:0 24px 46px -22px rgba(12,35,64,.28);">
              <sc-if value="{{ r.hasImg }}" hint-placeholder-val="{{ true }}">
                <div style="aspect-ratio:16/9;background:#dfeaf6;overflow:hidden;"><img src="{{ r.img }}" alt="{{ r.title }}" loading="lazy" style="width:100%;height:100%;object-fit:cover;display:block;"></div>
              </sc-if>
              <sc-if value="{{ r.noImg }}" hint-placeholder-val="{{ false }}">
                <div style="aspect-ratio:16/9;background:linear-gradient(135deg,#0e3a66,#0c2340);display:flex;align-items:center;justify-content:center;"><svg width="42" height="42" viewBox="0 0 24 24" fill="none"><path d="M12 21s-7-5.5-7-11a7 7 0 0 1 14 0c0 5.5-7 11-7 11Z" stroke="#7ec6ff" stroke-width="1.4"/><circle cx="12" cy="10" r="2.4" stroke="#7ec6ff" stroke-width="1.4"/></svg></div>
              </sc-if>
              <div style="padding:22px 24px;flex:1;">
                <h3 style="font-family:Cairo;font-weight:800;font-size:18px;color:#0c2340;margin:0;">{{ r.title }}</h3>
                <span style="display:inline-block;margin-top:12px;font-family:Cairo;font-weight:800;font-size:14px;color:#1466b8;">اعرف المزيد ←</span>
              </div>
            </a>
          </sc-for>
        </div>
      </div>
    </section>

    <!-- AUTHOR / MEDICAL REVIEWER (E-E-A-T) -->
    <section style="padding:88px 24px;background:#f4f8fd;">
      <div style="max-width:1160px;margin:0 auto;">
        <span style="font-family:Cairo;font-weight:800;font-size:14px;color:#0e9e90;">تعرّف على المختص</span>
        <div style="display:flex;flex-wrap:wrap;gap:40px;align-items:flex-start;margin-top:20px;">
          <div style="flex:0 0 320px;max-width:320px;border-radius:24px;overflow:hidden;background:#dfeaf6;box-shadow:0 24px 50px -20px rgba(12,35,64,.4);aspect-ratio:3/4;">
            <img src="https://spineandbrainindia.com/assets/img/drimg.webp" alt="الدكتور أرون ساروهـا — أفضل جراح مخ وأعصاب وعمود فقري في الهند" loading="lazy" style="width:100%;height:100%;object-fit:cover;object-position:center top;display:block;">
          </div>
          <div style="flex:1;min-width:300px;">
            <h2 style="font-family:Cairo;font-weight:900;font-size:clamp(26px,3.2vw,40px);color:#0c2340;line-height:1.2;margin:0;">الدكتور أرون ساروهـا <span style="color:#1466b8;">من أفضل جراحي المخ والأعصاب</span> في الهند</h2>
            <div style="display:flex;flex-direction:column;gap:10px;margin-top:18px;">
              <div style="display:flex;align-items:flex-start;gap:10px;font-family:Cairo;font-weight:700;font-size:14.5px;color:#1466b8;"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" style="flex-shrink:0;margin-top:2px;"><path d="M12 21s-7-5.5-7-11a7 7 0 0 1 14 0c0 5.5-7 11-7 11Z" stroke="#1466b8" stroke-width="1.6"/><circle cx="12" cy="10" r="2.4" stroke="#1466b8" stroke-width="1.6"/></svg>مدير أول ورئيس وحدة جراحة المخ والأعصاب والعمود الفقري — مستشفى ماكس</div>
              <div style="display:flex;align-items:flex-start;gap:10px;font-family:Cairo;font-weight:700;font-size:14.5px;color:#1466b8;"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" style="flex-shrink:0;margin-top:2px;"><path d="M4 19V5m0 14h16M8 15l3-4 3 2 4-6" stroke="#1466b8" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>أكثر من 26 عاماً من الخبرة الجراحية وأكثر من 9,000 عملية ناجحة</div>
              <div style="display:flex;align-items:flex-start;gap:10px;font-family:Cairo;font-weight:700;font-size:14.5px;color:#1466b8;"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" style="flex-shrink:0;margin-top:2px;"><path d="M12 3l2.3 4.6 5.1.8-3.7 3.6.9 5.1L12 15.8 7.4 17.1l.9-5.1L4.6 8.4l5.1-.8L12 3Z" stroke="#1466b8" stroke-width="1.5" stroke-linejoin="round"/></svg>حائز على جائزة أفضل جراح عمود فقري — عضو الجمعية العصبية في الهند</div>
            </div>
            <p style="font-size:15.5px;color:#4a5a6d;margin:20px 0 0;line-height:1.9;">تُعد جراحة المخ والأعصاب من أدق التخصصات الطبية التي تتطلب دقة وابتكاراً ورعاية إنسانية. ويُعد الدكتور أرون ساروهـا من الأسماء الموثوقة في هذا المجال، إذ قدّم على مدى أكثر من 26 عاماً رعاية متقدمة لآلاف المرضى في تشخيص وعلاج حالات المخ والعمود الفقري المعقدة داخل الهند وخارجها.</p>
            <p style="font-family:Cairo;font-weight:800;font-size:15px;color:#0c2340;margin:22px 0 14px;">أبرز المؤهلات والخبرات المهنية:</p>
            <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:11px 24px;border-inline-start:3px solid #1466b8;padding-inline-start:18px;">
              <div style="display:flex;align-items:flex-start;gap:9px;font-size:14px;color:#3c4c5f;"><span style="width:6px;height:6px;border-radius:50%;background:#1466b8;flex-shrink:0;margin-top:8px;"></span>بكالوريوس الطب والجراحة (MBBS) — كلية رابندرانات طاغور</div>
              <div style="display:flex;align-items:flex-start;gap:9px;font-size:14px;color:#3c4c5f;"><span style="width:6px;height:6px;border-radius:50%;background:#1466b8;flex-shrink:0;margin-top:8px;"></span>ماجستير الجراحة العامة (MS) — PGIMER شانديغار</div>
              <div style="display:flex;align-items:flex-start;gap:9px;font-size:14px;color:#3c4c5f;"><span style="width:6px;height:6px;border-radius:50%;background:#1466b8;flex-shrink:0;margin-top:8px;"></span>زمالة MCh في جراحة المخ والأعصاب — PGIMER</div>
              <div style="display:flex;align-items:flex-start;gap:9px;font-size:14px;color:#3c4c5f;"><span style="width:6px;height:6px;border-radius:50%;background:#1466b8;flex-shrink:0;margin-top:8px;"></span>أكثر من 9,000 عملية ناجحة للمخ والعمود الفقري</div>
              <div style="display:flex;align-items:flex-start;gap:9px;font-size:14px;color:#3c4c5f;"><span style="width:6px;height:6px;border-radius:50%;background:#1466b8;flex-shrink:0;margin-top:8px;"></span>حائز على جائزة أفضل جراح عمود فقري</div>
              <div style="display:flex;align-items:flex-start;gap:9px;font-size:14px;color:#3c4c5f;"><span style="width:6px;height:6px;border-radius:50%;background:#1466b8;flex-shrink:0;margin-top:8px;"></span>رعاية مرضى من أكثر من 50 دولة حول العالم</div>
            </div>
            <p style="font-size:15.5px;color:#4a5a6d;margin:22px 0 0;line-height:1.9;">من خلال رؤيته والتزامه بأحدث التقنيات الجراحية والنهج الذي يركّز على المريض، يواصل الدكتور أرون ساروهـا تقديم رعاية عصبية متميزة للمرضى من الهند ودول الخليج والعالم.</p>
            <a href="index.php#about" style="display:inline-flex;align-items:center;gap:8px;margin-top:24px;background:linear-gradient(90deg,#1466b8,#0e4d8c);color:#fff;padding:14px 30px;border-radius:999px;font-family:Cairo;font-weight:800;font-size:15px;box-shadow:0 14px 30px -12px rgba(20,102,184,.6);" style-hover="filter:brightness(1.08);transform:translateY(-1px);">المزيد عن الدكتور <span style="font-size:17px;">←</span></a>
          </div>
        </div>
        <div style="display:flex;align-items:flex-start;gap:12px;margin-top:22px;background:#eef4fb;border:1px solid #dbe6f1;border-radius:14px;padding:18px 20px;">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" style="flex-shrink:0;margin-top:2px;"><circle cx="12" cy="12" r="9" stroke="#1466b8" stroke-width="1.5"/><path d="M12 8h.01M11 12h1v4h1" stroke="#1466b8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
          <p style="font-size:13.5px;color:#4a5a6d;margin:0;line-height:1.7;">إخلاء مسؤولية طبية: المحتوى الوارد في هذه الصفحة لأغراض توعوية وتثقيفية فقط، وقد راجعه الدكتور أرون ساروهـا، ولا يُعد بديلاً عن الاستشارة الطبية المباشرة أو التشخيص الفردي. يُرجى مراجعة طبيب مختص لتقييم حالتك.</p>
        </div>
      </div>
    </section>

    <!-- REVIEWS -->
    <section style="padding:88px 24px;background:#fff;">
      <div style="max-width:1160px;margin:0 auto;">
        <div style="text-align:center;max-width:620px;margin:0 auto;">
          <span style="font-family:Cairo;font-weight:800;font-size:14px;color:#0e9e90;">آراء المرضى</span>
          <h2 style="font-family:Cairo;font-weight:900;font-size:clamp(24px,2.8vw,32px);color:#0c2340;margin:12px 0 0;">ماذا يقول مرضانا؟</h2>
        </div>
        <div style="display:flex;justify-content:center;margin-top:24px;">
          <div style="display:flex;align-items:center;gap:10px;background:#f4f8fd;border:1px solid #e3ecf5;border-radius:999px;padding:10px 20px;">
            <span style="color:#f6b93b;font-size:17px;letter-spacing:2px;">★★★★★</span>
            <span dir="ltr" style="font-family:Cairo;font-weight:900;font-size:18px;color:#0c2340;">4.9</span>
            <span style="font-size:14px;color:#5d6b7c;">تقييم المرضى على Google</span>
          </div>
        </div>
        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:22px;margin-top:38px;">
          <sc-for list="{{ testimonials }}" as="tm" hint-placeholder-count="3">
            <div style="background:#f4f8fd;border:1px solid #e3ecf5;border-radius:20px;padding:30px 28px;display:flex;flex-direction:column;">
              <svg width="32" height="32" viewBox="0 0 24 24" fill="none" style="opacity:.28;"><path d="M10 11H7a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v6c0 2-1 3-3 4M20 11h-3a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v6c0 2-1 3-3 4" stroke="#1466b8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
              <div style="display:flex;gap:3px;color:#f6b93b;font-size:15px;margin-top:12px;letter-spacing:1px;">★★★★★</div>
              <p style="font-size:15px;color:#3c4c5f;margin:12px 0 0;line-height:1.85;flex:1;">{{ tm.quote }}</p>
              <div style="display:flex;align-items:center;gap:12px;margin-top:22px;padding-top:18px;border-top:1px solid #e6edf5;">
                <span style="width:44px;height:44px;border-radius:50%;background:linear-gradient(160deg,#d7e7f8,#eaf2fb);display:flex;align-items:center;justify-content:center;font-family:Cairo;font-weight:900;font-size:14px;color:#0e4d8c;flex-shrink:0;">{{ tm.initial }}</span>
                <div>
                  <div style="font-family:Cairo;font-weight:800;font-size:15px;color:#0c2340;">{{ tm.name }}</div>
                  <div style="font-size:12.5px;color:#5d6b7c;margin-top:2px;">{{ tm.country }}</div>
                </div>
              </div>
            </div>
          </sc-for>
        </div>
        <p style="text-align:center;font-size:13px;color:#5d6b7c;margin:24px 0 0;">شهادات مرضى منشورة — الأسماء والدول كما وردت من المرضى.</p>
      </div>
    </section>

    <!-- WATCH & LEARN -->
    <section style="padding:88px 24px;background:#f4f8fd;">
      <div style="max-width:1160px;margin:0 auto;">
        <div style="text-align:center;max-width:620px;margin:0 auto 44px;">
          <span style="font-family:Cairo;font-weight:800;font-size:14px;color:#0e9e90;">شاهد وتعلّم</span>
          <h2 style="font-family:Cairo;font-weight:900;font-size:clamp(24px,2.8vw,32px);color:#0c2340;margin:12px 0 0;">فيديوهات طبية توعوية</h2>
          <p style="font-size:16.5px;color:#5d6b7c;margin:14px 0 0;">شاهد شروحات ونصائح الدكتور أرون ساروهـا حول صحة المخ والأعصاب والعمود الفقري على قناته في يوتيوب.</p>
        </div>
        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:24px;">
          <sc-for list="{{ videos }}" as="v" hint-placeholder-count="3">
            <a href="{{ v.href }}" target="_blank" rel="noopener" style="display:block;cursor:pointer;text-decoration:none;background:#fff;border:1px solid #e3ecf5;border-radius:20px;overflow:hidden;box-shadow:0 8px 24px -16px rgba(12,35,64,.2);transition:transform .2s,box-shadow .2s;" style-hover="transform:translateY(-4px);box-shadow:0 24px 46px -22px rgba(12,35,64,.28);">
              <div style="position:relative;aspect-ratio:16/9;background:linear-gradient(140deg,#0c2340,#0e3a66);display:flex;align-items:center;justify-content:center;">
                <span style="width:58px;height:58px;border-radius:50%;background:rgba(255,255,255,.95);display:flex;align-items:center;justify-content:center;box-shadow:0 8px 20px -6px rgba(0,0,0,.4);"><svg width="24" height="24" viewBox="0 0 24 24" fill="#e02f2f"><path d="M8 5v14l11-7L8 5Z"/></svg></span>
                <span style="position:absolute;bottom:12px;right:14px;display:inline-flex;align-items:center;gap:6px;font-family:Cairo;font-weight:700;font-size:12px;color:#fff;"><svg width="16" height="16" viewBox="0 0 24 24" fill="#fff"><path d="M21.6 7.2s-.2-1.4-.8-2c-.8-.8-1.6-.8-2-.9C16 4 12 4 12 4s-4 0-6.8.3c-.4 0-1.2.1-2 .9-.6.6-.8 2-.8 2S2 8.8 2 10.5v1.9c0 1.6.2 3.3.2 3.3s.2 1.4.8 2c.8.8 1.8.8 2.3.9 1.7.1 6.7.2 6.7.2s4 0 6.8-.3c.4 0 1.2-.1 2-.9.6-.6.8-2 .8-2s.2-1.6.2-3.3v-1.9c0-1.6-.2-3.3-.2-3.3ZM10 14.6V8.9l5 2.9-5 2.8Z"/></svg>يوتيوب</span>
              </div>
              <div style="padding:22px 24px;">
                <h3 style="font-family:Cairo;font-weight:800;font-size:16.5px;color:#0c2340;margin:0;line-height:1.5;">{{ v.t }}</h3>
                <span style="display:inline-block;margin-top:12px;font-family:Cairo;font-weight:800;font-size:14px;color:#1466b8;">مشاهدة على يوتيوب ←</span>
              </div>
            </a>
          </sc-for>
        </div>
        <div style="text-align:center;margin-top:36px;">
          <a href="{{ ytChannel }}" target="_blank" rel="noopener" style="display:inline-flex;align-items:center;gap:9px;cursor:pointer;text-decoration:none;background:#fff;border:1px solid #e3ecf5;color:#0c2340;padding:14px 28px;border-radius:999px;font-family:Cairo;font-weight:800;font-size:15px;box-shadow:0 8px 22px -14px rgba(12,35,64,.25);" style-hover="border-color:#1466b8;">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="#e02f2f"><path d="M21.6 7.2s-.2-1.4-.8-2c-.8-.8-1.6-.8-2-.9C16 4 12 4 12 4s-4 0-6.8.3c-.4 0-1.2.1-2 .9-.6.6-.8 2-.8 2S2 8.8 2 10.5v1.9c0 1.6.2 3.3.2 3.3s.2 1.4.8 2c.8.8 1.8.8 2.3.9 1.7.1 6.7.2 6.7.2s4 0 6.8-.3c.4 0 1.2-.1 2-.9.6-.6.8-2 .8-2s.2-1.6.2-3.3v-1.9c0-1.6-.2-3.3-.2-3.3ZM10 14.6V8.9l5 2.9-5 2.8Z"/></svg>
            زيارة قناة الدكتور على يوتيوب
          </a>
        </div>
      </div>
    </section>

    <!-- FAQ -->
    <section style="padding:0 24px 88px;background:#f4f8fd;">
      <div style="max-width:820px;margin:0 auto;">
        <h2 style="font-family:Cairo;font-weight:900;font-size:clamp(24px,3vw,34px);color:#0c2340;text-align:center;margin:0 0 32px;">الأسئلة الشائعة</h2>
        <div style="display:flex;flex-direction:column;gap:14px;">
          <sc-for list="{{ faqs }}" as="f" hint-placeholder-count="3">
            <div style="border:1px solid #e3ecf5;border-radius:16px;overflow:hidden;background:#fff;">
              <button onClick="{{ f.toggle }}" aria-expanded="{{ f.expanded }}" aria-controls="{{ f.answerId }}" style="width:100%;display:flex;align-items:center;justify-content:space-between;gap:16px;padding:20px 24px;background:none;border:none;cursor:pointer;text-align:right;font-family:Cairo;font-weight:800;font-size:16.5px;color:#0c2340;">
                <span>{{ f.q }}</span>
                <span style="flex-shrink:0;width:28px;height:28px;border-radius:8px;background:#eaf2fb;color:#1466b8;display:flex;align-items:center;justify-content:center;font-size:20px;">{{ f.sign }}</span>
              </button>
              <div id="{{ f.answerId }}" role="region" style="{{ f.answerStyle }}">{{ f.a }}</div>
            </div>
          </sc-for>
        </div>
      </div>
    </section>

    <!-- APPOINTMENT FORM -->
    <section id="booking" style="padding:88px 24px;background:linear-gradient(180deg,#f4f8fd,#e8f0fa);">
      <div style="max-width:1100px;margin:0 auto;display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:44px;align-items:start;">
        <div>
          <span style="font-family:Cairo;font-weight:800;font-size:14px;color:#0e9e90;">احجز الآن</span>
          <h2 style="font-family:Cairo;font-weight:900;font-size:clamp(24px,3vw,34px);color:#0c2340;margin:12px 0 0;line-height:1.3;">احجز استشارتك حول {{ title }}</h2>
          <p style="font-size:16.5px;color:#4a5a6d;margin:16px 0 0;">أرسل تفاصيل حالتك وتقاريرك الطبية، وسيتواصل معك فريق الدكتور أرون ساروهـا خلال 24 ساعة لترتيب الاستشارة المناسبة.</p>
          <div style="display:flex;flex-direction:column;gap:14px;margin-top:28px;">
            <a href="https://wa.me/917860000705" style="display:inline-flex;align-items:center;gap:12px;background:#fff;border:1px solid #e3ecf5;border-radius:14px;padding:16px 20px;color:#0c2340;box-shadow:0 6px 18px -12px rgba(12,35,64,.2);" style-hover="border-color:#20b858;">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="#20b858"><path d="M12 2a10 10 0 0 0-8.6 15l-1.3 4.7 4.8-1.3A10 10 0 1 0 12 2Zm5.3 14.2c-.2.6-1.3 1.2-1.8 1.2-.5.1-1 .3-3.4-.7-2.9-1.2-4.7-4.2-4.9-4.4-.1-.2-1.1-1.5-1.1-2.9 0-1.3.7-2 1-2.3.2-.3.5-.3.7-.3h.5c.2 0 .4 0 .6.5.2.6.8 2 .9 2.1.1.1.1.3 0 .5s-.2.4-.3.6c-.2.2-.3.4-.5.6-.1.1-.3.3-.1.6.2.3.8 1.4 1.8 2.2 1.3 1.1 2.3 1.5 2.6 1.6.3.1.5.1.6-.1.2-.2.7-.8.9-1.1.2-.3.4-.2.6-.1l1.9.9c.3.1.5.2.5.3.1.2.1.9-.1 1.5Z"/></svg>
              <span style="font-family:Cairo;font-weight:800;">تواصل عبر واتساب</span>
            </a>
            <a href="tel:+917860000705" style="display:inline-flex;align-items:center;gap:12px;background:#fff;border:1px solid #e3ecf5;border-radius:14px;padding:16px 20px;color:#0c2340;box-shadow:0 6px 18px -12px rgba(12,35,64,.2);" style-hover="border-color:#1466b8;">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none"><path d="M4 5c0-.6.4-1 1-1h2.3c.5 0 .9.3 1 .8l.7 3c.1.4 0 .8-.3 1L8 10.5a12 12 0 0 0 5.5 5.5l.7-1.7c.2-.3.6-.5 1-.4l3 .7c.5.1.8.5.8 1V18c0 1-1 2-2 2A16 16 0 0 1 4 6Z" stroke="#1466b8" stroke-width="1.6" stroke-linejoin="round"/></svg>
              <span dir="ltr" style="font-family:Cairo;font-weight:800;">+91 78600 00705</span>
            </a>
          </div>
        </div>
        <form onSubmit="{{ onSubmit }}" style="background:#fff;border-radius:24px;padding:32px;box-shadow:0 30px 70px -30px rgba(12,35,64,.4);">
          <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(190px,1fr));gap:16px;">
            <label style="display:flex;flex-direction:column;gap:8px;font-family:Cairo;font-weight:700;font-size:14px;color:#0c2340;"><span>الاسم الكامل <span style="color:#0e9e90;">*</span></span>
              <input type="text" required="required" placeholder="الاسم الكامل" style="width:100%;padding:13px 15px;border:1.5px solid #d8e4f0;border-radius:12px;font-family:Tajawal;font-size:15px;color:#22303f;background:#f9fbfe;" style-focus="border-color:#1466b8;outline:none;background:#fff;box-shadow:0 0 0 3px rgba(20,102,184,.12);">
            </label>
            <label style="display:flex;flex-direction:column;gap:8px;font-family:Cairo;font-weight:700;font-size:14px;color:#0c2340;"><span>الهاتف / واتساب <span style="color:#0e9e90;">*</span></span>
              <input type="tel" required="required" dir="ltr" placeholder="+971 xx xxx xxxx" style="width:100%;padding:13px 15px;border:1.5px solid #d8e4f0;border-radius:12px;font-family:Tajawal;font-size:15px;color:#22303f;background:#f9fbfe;text-align:right;" style-focus="border-color:#1466b8;outline:none;background:#fff;box-shadow:0 0 0 3px rgba(20,102,184,.12);">
            </label>
          </div>
          <label style="display:flex;flex-direction:column;gap:8px;font-family:Cairo;font-weight:700;font-size:14px;color:#0c2340;margin-top:16px;">الرسالة / وصف الحالة
            <textarea rows="4" placeholder="اشرح حالتك والأعراض التي تعاني منها باختصار..." style="width:100%;padding:13px 15px;border:1.5px solid #d8e4f0;border-radius:12px;font-family:Tajawal;font-size:15px;color:#22303f;background:#f9fbfe;resize:vertical;line-height:1.7;" style-focus="border-color:#1466b8;outline:none;background:#fff;box-shadow:0 0 0 3px rgba(20,102,184,.12);"></textarea>
          </label>
          <button type="submit" style="width:100%;margin-top:20px;display:flex;align-items:center;justify-content:center;gap:10px;background:linear-gradient(180deg,#1466b8,#0e4d8c);color:#fff;padding:16px;border:none;border-radius:14px;font-family:Cairo;font-weight:800;font-size:16.5px;cursor:pointer;box-shadow:0 16px 34px -12px rgba(20,102,184,.65);" style-hover="filter:brightness(1.08);transform:translateY(-1px);">إرسال طلب الاستشارة
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M20 4 3 11l6 2 2 6 9-15Z" stroke="#fff" stroke-width="1.6" stroke-linejoin="round"/></svg>
          </button>
          <p style="font-size:12.5px;color:#5d6b7c;text-align:center;margin:14px 0 0;">بياناتك سرية وتُستخدم فقط لأغراض الاستشارة الطبية.</p>
        </form>
      </div>
    </section>

    <!-- FINAL CTA -->
    <section style="padding:88px 24px;background:linear-gradient(135deg,#0e3a66,#0c2340);color:#fff;text-align:center;">
      <div style="max-width:720px;margin:0 auto;">
        <h2 style="font-family:Cairo;font-weight:900;font-size:clamp(26px,3.4vw,40px);color:#fff;margin:0;">هل تحتاج إلى استشارة متخصصة؟</h2>
        <p style="font-size:18px;color:#cfe0f2;margin:16px 0 0;">احجز موعدك مع الدكتور أرون ساروهـا اليوم واحصل على تقييم دقيق لحالتك.</p>
        <div style="display:flex;flex-wrap:wrap;gap:14px;justify-content:center;margin-top:30px;">
          <a href="index.php#appointment" style="background:linear-gradient(180deg,#2a8ee0,#0e4d8c);color:#fff;padding:15px 32px;border-radius:12px;font-family:Cairo;font-weight:800;font-size:16px;box-shadow:0 14px 30px -12px rgba(20,102,184,.7);" style-hover="filter:brightness(1.08);transform:translateY(-1px);">احجز استشارتك الآن</a>
          <a href="https://wa.me/917860000705" style="background:#20b858;color:#fff;padding:15px 30px;border-radius:12px;font-family:Cairo;font-weight:800;font-size:16px;" style-hover="filter:brightness(1.06);">تواصل عبر واتساب</a>
        </div>
      </div>
    </section>

  </div>
  </sc-if>

  <footer style="background:#081a30;color:#c3d3e5;padding:64px 24px 110px;">
    <div style="max-width:1240px;margin:0 auto;display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:40px;">
      <div>
        <div style="display:flex;align-items:center;gap:12px;">
          <span style="width:44px;height:44px;border-radius:12px;background:linear-gradient(160deg,#1466b8,#0c2340);display:flex;align-items:center;justify-content:center;">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M12 3c-.9 2.4-2.6 3.4-4.6 3.7C5.6 7 5 8 5 9.6c0 3.1 2.6 5.9 7 8.9 4.4-3 7-5.8 7-8.9 0-1.6-.6-2.6-2.4-2.9C14.6 6.4 12.9 5.4 12 3Z" stroke="#fff" stroke-width="1.5" stroke-linejoin="round"/><path d="M9 11h1.5l1 2 1.5-4 1 2H15" stroke="#7ec6ff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </span>
          <b style="font-family:Cairo;font-weight:900;font-size:18px;color:#fff;">د. أرون ساروهـا</b>
        </div>
        <p style="font-size:14px;color:#8ba3bf;margin:18px 0 0;max-width:280px;">استشاري جراحة المخ والأعصاب والعمود الفقري — رعاية متقدمة ودعم متكامل للمرضى الدوليين.</p>
      </div>
      <div>
        <b style="font-family:Cairo;font-weight:800;font-size:15px;color:#fff;">روابط سريعة</b>
        <div style="display:flex;flex-direction:column;gap:11px;margin-top:18px;">
          <a href="index.php#about" style="color:#a8bdd6;font-size:14.5px;" style-hover="color:#fff;">عن الدكتور</a>
          <a href="services.php" style="color:#a8bdd6;font-size:14.5px;" style-hover="color:#fff;">الخدمات</a>
          <a href="index.php#international" style="color:#a8bdd6;font-size:14.5px;" style-hover="color:#fff;">المرضى الدوليون</a>
          <a href="index.php#blog" style="color:#a8bdd6;font-size:14.5px;" style-hover="color:#fff;">المقالات الطبية</a>
        </div>
      </div>
      <div>
        <b style="font-family:Cairo;font-weight:800;font-size:15px;color:#fff;">تواصل</b>
        <div style="display:flex;flex-direction:column;gap:11px;margin-top:18px;font-size:14.5px;color:#a8bdd6;">
          <a href="tel:+917860000705" dir="ltr" style="color:#c3d3e5;text-align:right;">+91 78600 00705</a>
          <a href="mailto:drarunsaroha@gmail.com" style="color:#c3d3e5;">drarunsaroha@gmail.com</a>
          <span style="line-height:1.6;">مستشفى ماكس، جوروجرام ودواركا، الهند</span>
        </div>
      </div>
    </div>
    <div style="max-width:1240px;margin:40px auto 0;padding-top:24px;border-top:1px solid rgba(255,255,255,.1);">
      <p style="font-size:13px;color:#7c93b0;margin:0 0 12px;">المعلومات الواردة في هذا الموقع لأغراض توعوية ولا تُعد بديلاً عن الاستشارة الطبية المباشرة.</p>
      <p style="font-size:13px;color:#7a90ac;margin:0;">© 2026 د. أرون ساروهـا. جميع الحقوق محفوظة.</p>
    </div>
  </footer>

  <div class="dr-mobilebar" style="position:fixed;bottom:0;right:0;left:0;z-index:70;display:flex;background:#fff;border-top:1px solid #e3ecf5;box-shadow:0 -8px 24px -12px rgba(12,35,64,.2);">
    <a href="tel:+917860000705" style="flex:1;display:flex;flex-direction:column;align-items:center;gap:3px;padding:11px 4px;font-family:Cairo;font-weight:800;font-size:12px;color:#0c2340;">
      <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M4 5c0-.6.4-1 1-1h2.3c.5 0 .9.3 1 .8l.7 3c.1.4 0 .8-.3 1L8 10.5a12 12 0 0 0 5.5 5.5l.7-1.7c.2-.3.6-.5 1-.4l3 .7c.5.1.8.5.8 1V18c0 1-1 2-2 2A16 16 0 0 1 4 6Z" stroke="#1466b8" stroke-width="1.6"/></svg>
      اتصل الآن
    </a>
    <a href="https://wa.me/917860000705" style="flex:1;display:flex;flex-direction:column;align-items:center;gap:3px;padding:11px 4px;font-family:Cairo;font-weight:800;font-size:12px;color:#0c2340;border-right:1px solid #eef3f9;border-left:1px solid #eef3f9;">
      <svg width="20" height="20" viewBox="0 0 24 24" fill="#20b858"><path d="M12 2a10 10 0 0 0-8.6 15l-1.3 4.7 4.8-1.3A10 10 0 1 0 12 2Zm5.3 14.2c-.2.6-1.3 1.2-1.8 1.2-.5.1-1 .3-3.4-.7-2.9-1.2-4.7-4.2-4.9-4.4-.1-.2-1.1-1.5-1.1-2.9 0-1.3.7-2 1-2.3.2-.3.5-.3.7-.3h.5c.2 0 .4 0 .6.5.2.6.8 2 .9 2.1.1.1.1.3 0 .5s-.2.4-.3.6c-.2.2-.3.4-.5.6-.1.1-.3.3-.1.6.2.3.8 1.4 1.8 2.2 1.3 1.1 2.3 1.5 2.6 1.6.3.1.5.1.6-.1.2-.2.7-.8.9-1.1.2-.3.4-.2.6-.1l1.9.9c.3.1.5.2.5.3.1.2.1.9-.1 1.5Z"/></svg>
      واتساب
    </a>
    <a href="index.php#appointment" style="flex:1;display:flex;flex-direction:column;align-items:center;gap:3px;padding:11px 4px;font-family:Cairo;font-weight:800;font-size:12px;color:#fff;background:linear-gradient(180deg,#1466b8,#0e4d8c);">
      <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M8 2v3m8-3v3M4 9h16M5 5h14a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Z" stroke="#fff" stroke-width="1.6"/></svg>
      احجز موعد
    </a>
  </div>

</div>
</x-dc>
<script type="text/x-dc" data-dc-script data-props="{&quot;$preview&quot;:{&quot;width&quot;:&quot;100%&quot;,&quot;height&quot;:&quot;100%&quot;},&quot;slug&quot;:{&quot;editor&quot;:&quot;text&quot;,&quot;default&quot;:&quot;back-pain-treatment&quot;,&quot;tsType&quot;:&quot;string&quot;}}">
class Component extends DCLogic {
  state = { svc: null, related: [], openFaq: 0, menuOpen: false };

  nav = [
    { label: 'عن الدكتور', href: 'index.php#about' },
    { label: 'الخدمات', href: 'services.php' },
    { label: 'معرض الصور', href: 'gallery.php' },
    { label: 'العلاجات والعمليات', href: 'services.php' },
    { label: 'المرضى الدوليون', href: 'index.php#international' },
    { label: 'المقالات الطبية', href: 'index.php#blog' },
    { label: 'تواصل معنا', href: 'index.php#appointment' },
  ];

  why = [
    { t: 'خبرة جراحية متقدمة', d: 'رعاية متخصصة للحالات العصبية وجراحات العمود الفقري.' },
    { t: 'نهج يركّز على المريض', d: 'خطة علاجية مصممة وفق احتياجات وحالة كل مريض.' },
    { t: 'تقنيات طبية حديثة', d: 'الاستفادة من أحدث الأساليب والتقنيات الجراحية المناسبة.' },
    { t: 'رعاية للمرضى الدوليين', d: 'دعم المرضى القادمين من خارج الهند خلال رحلة العلاج.' },
  ];

  approach = [
    { n: '٠١', t: 'الجراحة الموجّهة بالملاحة', d: 'تحديد دقيق للمسار الجراحي لتحقيق أعلى درجات الأمان.' },
    { n: '٠٢', t: 'المراقبة العصبية أثناء العملية', d: 'متابعة وظائف الأعصاب لحظة بلحظة لحماية الأنسجة الحيوية.' },
    { n: '٠٣', t: 'التقنيات طفيفة التوغل', d: 'شقوق أصغر وألم أقل وتعافٍ أسرع كلما كانت الحالة مناسبة.' },
    { n: '٠٤', t: 'خطة علاجية مخصصة', d: 'تقييم شامل لكل حالة واختيار الأنسب من الخيارات العلاجية.' },
  ];

  benefits = [
    'تقييم دقيق قبل اتخاذ قرار الجراحة',
    'الحفاظ على الأنسجة السليمة قدر الإمكان',
    'تقليل الألم وفترة الإقامة في المستشفى',
    'تعافٍ أسرع وعودة أسرع للحياة الطبيعية',
    'متابعة ما بعد العلاج ودعم المرضى الدوليين',
    'تواصل واضح وشرح مفصّل لكل خطوة',
  ];

  _ref(svg) { return (el) => { if (el && el.__ic !== svg) { el.innerHTML = svg; el.__ic = svg; } }; }
  _ci(p) { return '<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none">' + p + '</svg>'; }
  spineConditions = [
    { icon: this._ci('<path d="M12 3v5M12 16v5" stroke="#1466b8" stroke-width="1.5" stroke-linecap="round"/><rect x="7.5" y="8" width="9" height="8" rx="2.5" stroke="#1466b8" stroke-width="1.5"/>'), title: 'الانزلاق الغضروفي', desc: 'تخفيف الضغط عن الأعصاب المنضغطة في العمود الفقري القطني أو العنقي واستعادة الحركة دون ألم.', tags: ['عرق النسا', 'راحة الأعصاب'] },
    { icon: this._ci('<path d="M8 5c2 1.2 6 1.2 8 0M8 19c2-1.2 6-1.2 8 0M9.5 5v14M14.5 5v14" stroke="#1466b8" stroke-width="1.5" stroke-linecap="round"/>'), title: 'تضيّق القناة الشوكية', desc: 'توسيع المساحات الضيقة داخل القناة الشوكية لتخفيف الضغط عن الحبل الشوكي واستعادة القدرة على المشي.', tags: ['إزالة الضغط', 'الحركة'] },
    { icon: this._ci('<path d="M12 4 4 8l8 4 8-4-8-4ZM4 12l8 4 8-4M4 16l8 4 8-4" stroke="#1466b8" stroke-width="1.5" stroke-linejoin="round"/>'), title: 'الانزلاق الفقاري وعدم الاستقرار', desc: 'تثبيت الفقرات المنزلقة بتقنيات دقيقة تحافظ على أكبر قدر ممكن من الحركة الطبيعية للعمود الفقري.', tags: ['تثبيت دقيق', 'الاستقرار'] },
  ];
  brainConditions = [
    { icon: this._ci('<path d="M9 5a3 3 0 0 0-3 3 2.5 2.5 0 0 0-1 4.6A3 3 0 0 0 8 17.5h8a3 3 0 0 0 2-4.9A2.5 2.5 0 0 0 18 8a3 3 0 0 0-3-3 3 3 0 0 0-6 0Z" stroke="#1466b8" stroke-width="1.5" stroke-linejoin="round"/><circle cx="14" cy="12" r="1.6" fill="#1466b8"/>'), title: 'أورام الدماغ', desc: 'استئصال الأورام الحميدة والخبيثة بتقنيات مجهرية وملاحية تحافظ على الأنسجة السليمة والوظائف الحيوية.', tags: ['جراحة مجهرية', 'دقة عالية'] },
    { icon: this._ci('<path d="M12 3c-3 4-5 6-5 9a5 5 0 0 0 10 0c0-3-2-5-5-9Z" stroke="#1466b8" stroke-width="1.5" stroke-linejoin="round"/>'), title: 'تمدد الأوعية الدموية', desc: 'عزل تمدد الأوعية عن الدورة الدموية لمنع النزيف وحماية الدماغ من المضاعفات الخطيرة.', tags: ['وقاية', 'حماية عصبية'] },
    { icon: this._ci('<circle cx="12" cy="12" r="8" stroke="#1466b8" stroke-width="1.5"/><path d="M9 12a3 3 0 0 0 6 0" stroke="#1466b8" stroke-width="1.5" stroke-linecap="round"/>'), title: 'استسقاء الدماغ', desc: 'تصريف السائل الدماغي الزائد وتخفيف الضغط داخل الجمجمة عبر تقنيات حديثة للأطفال والبالغين.', tags: ['تصريف', 'تخفيف الضغط'] },
  ];

  testimonials = [
    { quote: 'عانيت من ألم شديد في الظهر بسبب انزلاق غضروفي لأكثر من عامين. أجرى الدكتور أرون ساروهـا جراحة العمود الفقري طفيفة التوغل، وخلال ثلاثة أسابيع عدت إلى حياتي الطبيعية. منحتني خبرته وهدوؤه الثقة طوال الرحلة.', initial: 'ر.ك', name: 'راجيش كومار', country: 'جراحة انزلاق غضروفي — دلهي' },
    { quote: 'شُخّصت والدتي بورم في الدماغ وكنا في غاية الخوف، لكن الدكتور ساروهـا شرح لنا كل شيء بوضوح وأجرى الجراحة بدقة مذهلة. استُؤصل الورم بالكامل وتعافت أسرع مما توقعنا. نحن ممتنون له إلى الأبد.', initial: 'ف.ح', name: 'فاطمة الحسن', country: 'جراحة ورم دماغي — مريضة دولية، سلطنة عُمان' },
    { quote: 'كنت أعاني من الجنف الذي يزداد سوءاً كل عام، ونصحني عدة أطباء بجراحة مفتوحة معقّدة. استخدم الدكتور ساروهـا تقنية تصحيح حديثة بأقل فقد للدم، ومشيت خلال يومين. أفضل قرار اتخذته في حياتي.', initial: 'ب.ش', name: 'بريا شارما', country: 'تصحيح الجنف — جايبور' },
  ];

  ytChannel = 'https://www.youtube.com/@spineandbrainindiabydr.aru6509';
  ytKeywords = {
    'back-pain-treatment': 'back pain treatment', 'cervical-spine-surgery': 'cervical spine surgery',
    'degenerative-disc-disease': 'degenerative disc disease', 'disc-replacement-surgery': 'disc replacement surgery',
    'scoliosis-treatment': 'scoliosis surgery', 'spinal-stenosis-surgery': 'spinal stenosis',
    'minimally-invasive-spine-surgery': 'minimally invasive spine surgery', 'endoscopic-spine-surgery': 'endoscopic spine surgery',
    'brain-tumor-surgery': 'brain tumor surgery', 'brain-aneurysm-treatment': 'brain aneurysm',
    'headache-treatment': 'headache treatment', 'hydrocephalus-treatment': 'hydrocephalus',
    'head-injury': 'head injury', 'skull-base-surgery': 'skull base surgery', 'complex-nerve-surgery': 'nerve surgery',
    'herniated-disc-treatment': 'herniated disc slip disc treatment', 'spine-surgery-overview': 'spine surgery',
    'brain-surgery-overview': 'neurosurgery', 'stroke-management': 'stroke treatment',
    'microvascular-decompression': 'microvascular decompression trigeminal neuralgia',
    'atlantoaxial-dislocation': 'atlantoaxial dislocation', 'spinal-fusion-surgery': 'spinal fusion',
    'spinal-tuberculosis': 'spinal tuberculosis', 'brachial-plexus-surgery': 'brachial plexus injury surgery',
    'nerve-grafting-surgery': 'nerve graft surgery',
  };

  quickFacts = [
    { k: 'التخصص', v: 'جراحة المخ والأعصاب والعمود الفقري' },
    { k: 'المستشفى', v: 'مستشفى ماكس — جوروجرام ودواركا' },
    { k: 'الاستشارة', v: 'حضورية أو عن بُعد للمرضى الدوليين' },
  ];

  _icon(cat) {
    const spine = '<path d="M12 3v18M9 6h6M8.5 9.5h7M8 13h8M8.5 16.5h7M9 20h6" stroke="#7ec6ff" stroke-width="1.4" stroke-linecap="round"/>';
    const brain = '<path d="M9 5a3 3 0 0 0-3 3 2.5 2.5 0 0 0-1 4.6A3 3 0 0 0 8 17.5h8a3 3 0 0 0 2-4.9A2.5 2.5 0 0 0 18 8a3 3 0 0 0-3-3 3 3 0 0 0-6 0Z" stroke="#7ec6ff" stroke-width="1.4" stroke-linejoin="round"/><circle cx="14" cy="12" r="1.7" fill="#7ec6ff"/>';
    return '<svg xmlns="http://www.w3.org/2000/svg" width="88" height="88" viewBox="0 0 24 24" fill="none">' + (cat === 'spine' ? spine : brain) + '</svg>';
  }

  _injectSchema(svc) {
    document.querySelectorAll('script[data-svc-schema]').forEach(n => n.remove());
    const physician = {
      '@type': 'Physician', name: 'الدكتور أرون ساروهـا', alternateName: 'Dr. Arun Saroha',
      medicalSpecialty: 'Neurologic', alumniOf: 'PGIMER Chandigarh',
      worksFor: { '@type': 'MedicalClinic', name: 'Max Super Speciality Hospital', address: 'Gurugram & Dwarka, India' },
    };
    const page = {
      '@context': 'https://schema.org', '@type': 'MedicalWebPage',
      name: svc.title, description: svc.lead, inLanguage: 'ar',
      datePublished: '2026-03-01', dateModified: '2026-03-01', lastReviewed: '2026-03-01',
      about: {
        '@type': 'MedicalProcedure', name: svc.title,
        description: (svc.introP || []).join(' '),
        howPerformed: (svc.procedureP || []).join(' '),
      },
      image: svc.heroBg || undefined,
      author: physician, reviewedBy: physician,
      publisher: { '@type': 'MedicalOrganization', name: 'Dr. Arun Saroha — Spine & Brain', url: 'https://spineandbrainindia.com/' },
    };
    const faq = {
      '@context': 'https://schema.org', '@type': 'FAQPage',
      mainEntity: (svc.faqs || []).map(f => ({ '@type': 'Question', name: f.q, acceptedAnswer: { '@type': 'Answer', text: f.a } })),
    };
    [page, faq].forEach(obj => {
      const s = document.createElement('script');
      s.type = 'application/ld+json'; s.setAttribute('data-svc-schema', '1');
      s.textContent = JSON.stringify(obj);
      document.head.appendChild(s);
    });
  }

  async componentDidMount() {
    try {
      const mod = await import('../services-data.js');
      const list = mod.SERVICES || [];
      const svc = list.find(s => s.slug === this.props.slug) || list[0];
      const related = list.filter(s => s.cat === svc.cat && s.slug !== svc.slug).slice(0, 3);
      document.title = svc.title + ' | الدكتور أرون ساروهـا — ' + (svc.cat === 'spine' ? 'جراحة العمود الفقري' : 'جراحة المخ والأعصاب');
      const md = document.querySelector('meta[name="description"]');
      if (md) md.setAttribute('content', svc.lead);
      this._injectSchema(svc);
      this.setState({ svc, related });
    } catch (e) { console.error(e); }
  }

  renderVals() {
    const svc = this.state.svc;
    const openFaq = this.state.openFaq;
    const cat = svc ? svc.cat : 'spine';
    return {
      loaded: !!svc,
      title: svc ? svc.title : '',
      lead: svc ? svc.lead : '',
      introP: svc ? (svc.introP || (svc.intro ? [svc.intro] : [])) : [],
      causes: svc ? (svc.causes || '') : '',
      diagnosis: svc ? (svc.diagnosis || '') : '',
      recovery: svc ? (svc.recovery || '') : '',
      catLabel: cat === 'spine' ? 'جراحة العمود الفقري' : 'جراحة المخ والأعصاب',
      hasImg: !!(svc && svc.img),
      noImg: !!(svc && !svc.img),
      hasHeroBg: !!(svc && svc.heroBg),
      heroBg: svc && svc.heroBg ? svc.heroBg : '',
      showHeroImg: !!(svc && svc.img && !svc.heroBg),
      showHeroIcon: !!(svc && !svc.img && !svc.heroBg),
      img: svc && svc.img ? svc.img : '',
      imgAlt: svc ? svc.title + ' — الدكتور أرون ساروهـا' : '',
      heroIconRef: (el) => { if (el && svc) { const h = this._icon(cat); if (el.__ic !== h) { el.innerHTML = h; el.__ic = h; } } },
      symptomsA: (() => { const s = svc ? (svc.symptoms || []) : []; return s.slice(0, Math.ceil(s.length / 2)); })(),
      symptomsB: (() => { const s = svc ? (svc.symptoms || []) : []; return s.slice(Math.ceil(s.length / 2)); })(),
      hasSymptoms: !!(svc && svc.symptoms && svc.symptoms.length),
      when: svc ? svc.when : '',
      procedureP: svc ? (svc.procedureP || (svc.procedure ? [svc.procedure] : [])) : [],
      approach: this.approach,
      benefits: this.benefits,
      quickFacts: this.quickFacts,
      conditionCards: (cat === 'spine' ? this.spineConditions : this.brainConditions).map(c => ({ ...c, iconRef: this._ref(c.icon) })),
      testimonials: this.testimonials,
      videos: (() => {
        const kw = (svc && this.ytKeywords[svc.slug]) || 'brain and spine surgery';
        const q = (t) => this.ytChannel + '/search?query=' + encodeURIComponent('Dr Arun Saroha ' + t);
        return [
          { t: 'شاهد: ' + (svc ? svc.title : ''), href: q(kw) },
          { t: 'متى تحتاج إلى جراحة المخ والأعصاب؟', href: q('when do you need surgery') },
          { t: 'تجارب مرضى وقصص تعافٍ حقيقية', href: q('patient testimonial recovery') },
        ];
      })(),
      ytChannel: this.ytChannel,
      why: this.why,
      related: this.state.related.map(r => ({ title: r.title, href: r.slug + '.php', hasImg: !!r.img, noImg: !r.img, img: r.img || '' })),
      faqs: svc ? svc.faqs.map((f, i) => ({
        q: f.q, a: f.a, isOpen: openFaq === i, sign: openFaq === i ? '−' : '+',
        answerId: 'faq-answer-' + i,
        expanded: openFaq === i ? 'true' : 'false',
        answerStyle: 'padding:0 24px 22px;font-size:15.5px;color:#4a5a6d;line-height:1.85;'
          + (openFaq === i ? '' : 'display:none;'),
        toggle: () => this.setState(s => ({ openFaq: s.openFaq === i ? -1 : i })),
      })) : [],
      nav: this.nav,
      menuOpen: this.state.menuOpen,
      menuOpenStr: this.state.menuOpen ? 'true' : 'false',
      toggleMenu: () => this.setState(s => ({ menuOpen: !s.menuOpen })),
      closeMenu: () => this.setState({ menuOpen: false }),
      onSubmit: (e) => { e.preventDefault(); alert('شكراً لك! تم استلام طلبك وسيتواصل معك فريق الدكتور أرون ساروهـا قريباً.'); },
    };
  }
}
</script>
</body>
</html>
