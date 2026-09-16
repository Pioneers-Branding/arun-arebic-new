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
<title>معرض الصور | الدكتور أرون ساروهـا</title>
<meta name="description" content="خدمات وعلاجات الدكتور أرون ساروهـا في جراحة المخ والأعصاب والعمود الفقري: أورام الدماغ، الانزلاق الغضروفي، تضيّق القناة الشوكية، الجراحة طفيفة التوغل والمزيد.">
<link rel="canonical" href="https://drarunsaroha.example/services">
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
</style>
</helmet>
<div dir="rtl" lang="ar" style="font-family:Tajawal,system-ui,sans-serif;color:#22303f;background:#f4f8fd;overflow-x:clip;line-height:1.7;">

  <header style="position:sticky;top:14px;z-index:60;max-width:1276px;margin:14px auto 0;background:linear-gradient(180deg,rgba(14,45,82,0.97),rgba(12,35,64,0.95));backdrop-filter:blur(18px);border:1px solid rgba(255,255,255,.12);border-radius:20px;box-shadow:0 16px 34px -16px rgba(12,35,64,.5);">
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
        <button class="dr-hamburger" onClick="{{ toggleMenu }}" aria-label="القائمة" style="display:none;width:44px;height:44px;border:1px solid rgba(255,255,255,.3);border-radius:10px;background:rgba(255,255,255,.1);align-items:center;justify-content:center;cursor:pointer;flex-shrink:0;">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none"><path d="M4 7h16M4 12h16M4 17h16" stroke="#fff" stroke-width="1.8" stroke-linecap="round"/></svg>
        </button>
      </div>
    </div>
    <sc-if value="{{ menuOpen }}" hint-placeholder-val="{{ false }}">
      <nav style="border-top:1px solid rgba(255,255,255,.12);padding:10px 24px 16px;display:flex;flex-direction:column;gap:2px;">
        <sc-for list="{{ nav }}" as="item" hint-placeholder-count="6">
          <a href="{{ item.href }}" onClick="{{ closeMenu }}" style="padding:12px 12px;border-radius:9px;font-family:Cairo;font-weight:700;font-size:15.5px;color:#dce8f6;" style-hover="background:rgba(255,255,255,.14);color:#fff;">{{ item.label }}</a>
        </sc-for>
      </nav>
    </sc-if>
  </header>
  <style>
    .gallery-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); gap: 24px; padding: 40px 24px; max-width: 1240px; margin: 0 auto; }
    .gal-item { position: relative; border-radius: 16px; overflow: hidden; aspect-ratio: 1; cursor: pointer; box-shadow: 0 4px 12px rgba(0,0,0,0.1); transition: transform 0.3s; }
    .gal-item:hover { transform: translateY(-4px); }
    .gal-item img { width: 100%; height: 100%; object-fit: cover; display: block; }
    .gal-overlay { position: absolute; inset: 0; background: rgba(12,35,64,0.6); display: flex; align-items: center; justify-content: center; opacity: 0; transition: opacity 0.3s; }
    .gal-item:hover .gal-overlay { opacity: 1; }
    .lightbox { position: fixed; inset: 0; background: rgba(0,0,0,0.9); z-index: 9999; display: none; align-items: center; justify-content: center; flex-direction: column; }
    .lightbox.active { display: flex; }
    .lightbox img { max-width: 90%; max-height: 90vh; border-radius: 8px; box-shadow: 0 10px 40px rgba(0,0,0,0.5); }
    .lightbox-close { position: absolute; top: 20px; right: 20px; color: #fff; cursor: pointer; background: rgba(255,255,255,0.2); padding: 12px; border-radius: 50%; }
  </style>

  <section style="background:linear-gradient(135deg,#0c2340,#0e3a66);color:#fff;padding:48px 24px 60px;">
    <div style="max-width:1240px;margin:0 auto;text-align:center;">
      <h1 style="font-family:Cairo;font-weight:900;font-size:clamp(30px,4.4vw,48px);color:#fff;margin:0;">معرض الصور</h1>
      <p style="font-size:clamp(16px,1.6vw,19px);color:#cfe0f2;margin:16px auto 0;max-width:640px;text-wrap:pretty;">نظرة عن كثب على رحلتنا الطبية وتفانينا في رعاية المرضى وتوفير أفضل العلاجات الجراحية.</p>
    </div>
  </section>

  <div class="gallery-grid">
        <div class="gal-item" onclick="openLightbox('uploads\PHOTO-2026-09-14-10-26-100.jpg')">
            <img src="uploads\PHOTO-2026-09-14-10-26-100.jpg" alt="معرض الصور" loading="lazy">
            <div class="gal-overlay">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
        </div>
        <div class="gal-item" onclick="openLightbox('uploads\PHOTO-2026-09-14-10-26-101.jpg')">
            <img src="uploads\PHOTO-2026-09-14-10-26-101.jpg" alt="معرض الصور" loading="lazy">
            <div class="gal-overlay">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
        </div>
        <div class="gal-item" onclick="openLightbox('uploads\PHOTO-2026-09-14-10-26-102.jpg')">
            <img src="uploads\PHOTO-2026-09-14-10-26-102.jpg" alt="معرض الصور" loading="lazy">
            <div class="gal-overlay">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
        </div>
        <div class="gal-item" onclick="openLightbox('uploads\PHOTO-2026-09-14-10-26-103.jpg')">
            <img src="uploads\PHOTO-2026-09-14-10-26-103.jpg" alt="معرض الصور" loading="lazy">
            <div class="gal-overlay">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
        </div>
        <div class="gal-item" onclick="openLightbox('uploads\PHOTO-2026-09-14-10-26-104.jpg')">
            <img src="uploads\PHOTO-2026-09-14-10-26-104.jpg" alt="معرض الصور" loading="lazy">
            <div class="gal-overlay">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
        </div>
        <div class="gal-item" onclick="openLightbox('uploads\PHOTO-2026-09-14-10-26-105.jpg')">
            <img src="uploads\PHOTO-2026-09-14-10-26-105.jpg" alt="معرض الصور" loading="lazy">
            <div class="gal-overlay">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
        </div>
        <div class="gal-item" onclick="openLightbox('uploads\PHOTO-2026-09-14-10-26-106.jpg')">
            <img src="uploads\PHOTO-2026-09-14-10-26-106.jpg" alt="معرض الصور" loading="lazy">
            <div class="gal-overlay">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
        </div>
        <div class="gal-item" onclick="openLightbox('uploads\PHOTO-2026-09-14-10-26-107.jpg')">
            <img src="uploads\PHOTO-2026-09-14-10-26-107.jpg" alt="معرض الصور" loading="lazy">
            <div class="gal-overlay">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
        </div>
        <div class="gal-item" onclick="openLightbox('uploads\PHOTO-2026-09-14-10-26-108.jpg')">
            <img src="uploads\PHOTO-2026-09-14-10-26-108.jpg" alt="معرض الصور" loading="lazy">
            <div class="gal-overlay">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
        </div>
        <div class="gal-item" onclick="openLightbox('uploads\PHOTO-2026-09-14-10-26-109.jpg')">
            <img src="uploads\PHOTO-2026-09-14-10-26-109.jpg" alt="معرض الصور" loading="lazy">
            <div class="gal-overlay">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
        </div>
        <div class="gal-item" onclick="openLightbox('uploads\PHOTO-2026-09-14-10-26-110.jpg')">
            <img src="uploads\PHOTO-2026-09-14-10-26-110.jpg" alt="معرض الصور" loading="lazy">
            <div class="gal-overlay">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
        </div>
        <div class="gal-item" onclick="openLightbox('uploads\PHOTO-2026-09-14-10-26-111.jpg')">
            <img src="uploads\PHOTO-2026-09-14-10-26-111.jpg" alt="معرض الصور" loading="lazy">
            <div class="gal-overlay">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
        </div>
        <div class="gal-item" onclick="openLightbox('uploads\PHOTO-2026-09-14-10-26-112.jpg')">
            <img src="uploads\PHOTO-2026-09-14-10-26-112.jpg" alt="معرض الصور" loading="lazy">
            <div class="gal-overlay">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
        </div>
        <div class="gal-item" onclick="openLightbox('uploads\PHOTO-2026-09-14-10-26-55.jpg')">
            <img src="uploads\PHOTO-2026-09-14-10-26-55.jpg" alt="معرض الصور" loading="lazy">
            <div class="gal-overlay">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
        </div>
        <div class="gal-item" onclick="openLightbox('uploads\PHOTO-2026-09-14-10-26-56.jpg')">
            <img src="uploads\PHOTO-2026-09-14-10-26-56.jpg" alt="معرض الصور" loading="lazy">
            <div class="gal-overlay">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
        </div>
        <div class="gal-item" onclick="openLightbox('uploads\PHOTO-2026-09-14-10-26-57.jpg')">
            <img src="uploads\PHOTO-2026-09-14-10-26-57.jpg" alt="معرض الصور" loading="lazy">
            <div class="gal-overlay">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
        </div>
        <div class="gal-item" onclick="openLightbox('uploads\PHOTO-2026-09-14-10-26-58.jpg')">
            <img src="uploads\PHOTO-2026-09-14-10-26-58.jpg" alt="معرض الصور" loading="lazy">
            <div class="gal-overlay">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
        </div>
        <div class="gal-item" onclick="openLightbox('uploads\PHOTO-2026-09-14-10-26-59.jpg')">
            <img src="uploads\PHOTO-2026-09-14-10-26-59.jpg" alt="معرض الصور" loading="lazy">
            <div class="gal-overlay">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
        </div>
        <div class="gal-item" onclick="openLightbox('uploads\PHOTO-2026-09-14-10-26-60.jpg')">
            <img src="uploads\PHOTO-2026-09-14-10-26-60.jpg" alt="معرض الصور" loading="lazy">
            <div class="gal-overlay">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
        </div>
        <div class="gal-item" onclick="openLightbox('uploads\PHOTO-2026-09-14-10-26-61.jpg')">
            <img src="uploads\PHOTO-2026-09-14-10-26-61.jpg" alt="معرض الصور" loading="lazy">
            <div class="gal-overlay">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
        </div>
        <div class="gal-item" onclick="openLightbox('uploads\PHOTO-2026-09-14-10-26-62.jpg')">
            <img src="uploads\PHOTO-2026-09-14-10-26-62.jpg" alt="معرض الصور" loading="lazy">
            <div class="gal-overlay">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
        </div>
        <div class="gal-item" onclick="openLightbox('uploads\PHOTO-2026-09-14-10-26-63.jpg')">
            <img src="uploads\PHOTO-2026-09-14-10-26-63.jpg" alt="معرض الصور" loading="lazy">
            <div class="gal-overlay">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
        </div>
        <div class="gal-item" onclick="openLightbox('uploads\PHOTO-2026-09-14-10-26-64.jpg')">
            <img src="uploads\PHOTO-2026-09-14-10-26-64.jpg" alt="معرض الصور" loading="lazy">
            <div class="gal-overlay">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
        </div>
        <div class="gal-item" onclick="openLightbox('uploads\PHOTO-2026-09-14-10-26-65.jpg')">
            <img src="uploads\PHOTO-2026-09-14-10-26-65.jpg" alt="معرض الصور" loading="lazy">
            <div class="gal-overlay">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
        </div>
        <div class="gal-item" onclick="openLightbox('uploads\PHOTO-2026-09-14-10-26-66.jpg')">
            <img src="uploads\PHOTO-2026-09-14-10-26-66.jpg" alt="معرض الصور" loading="lazy">
            <div class="gal-overlay">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
        </div>
        <div class="gal-item" onclick="openLightbox('uploads\PHOTO-2026-09-14-10-26-67.jpg')">
            <img src="uploads\PHOTO-2026-09-14-10-26-67.jpg" alt="معرض الصور" loading="lazy">
            <div class="gal-overlay">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
        </div>
        <div class="gal-item" onclick="openLightbox('uploads\PHOTO-2026-09-14-10-26-68.jpg')">
            <img src="uploads\PHOTO-2026-09-14-10-26-68.jpg" alt="معرض الصور" loading="lazy">
            <div class="gal-overlay">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
        </div>
        <div class="gal-item" onclick="openLightbox('uploads\PHOTO-2026-09-14-10-26-69.jpg')">
            <img src="uploads\PHOTO-2026-09-14-10-26-69.jpg" alt="معرض الصور" loading="lazy">
            <div class="gal-overlay">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
        </div>
        <div class="gal-item" onclick="openLightbox('uploads\PHOTO-2026-09-14-10-26-70.jpg')">
            <img src="uploads\PHOTO-2026-09-14-10-26-70.jpg" alt="معرض الصور" loading="lazy">
            <div class="gal-overlay">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
        </div>
        <div class="gal-item" onclick="openLightbox('uploads\PHOTO-2026-09-14-10-26-71.jpg')">
            <img src="uploads\PHOTO-2026-09-14-10-26-71.jpg" alt="معرض الصور" loading="lazy">
            <div class="gal-overlay">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
        </div>
        <div class="gal-item" onclick="openLightbox('uploads\PHOTO-2026-09-14-10-26-72.jpg')">
            <img src="uploads\PHOTO-2026-09-14-10-26-72.jpg" alt="معرض الصور" loading="lazy">
            <div class="gal-overlay">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
        </div>
        <div class="gal-item" onclick="openLightbox('uploads\PHOTO-2026-09-14-10-26-73.jpg')">
            <img src="uploads\PHOTO-2026-09-14-10-26-73.jpg" alt="معرض الصور" loading="lazy">
            <div class="gal-overlay">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
        </div>
        <div class="gal-item" onclick="openLightbox('uploads\PHOTO-2026-09-14-10-26-74.jpg')">
            <img src="uploads\PHOTO-2026-09-14-10-26-74.jpg" alt="معرض الصور" loading="lazy">
            <div class="gal-overlay">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
        </div>
        <div class="gal-item" onclick="openLightbox('uploads\PHOTO-2026-09-14-10-26-75.jpg')">
            <img src="uploads\PHOTO-2026-09-14-10-26-75.jpg" alt="معرض الصور" loading="lazy">
            <div class="gal-overlay">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
        </div>
        <div class="gal-item" onclick="openLightbox('uploads\PHOTO-2026-09-14-10-26-76.jpg')">
            <img src="uploads\PHOTO-2026-09-14-10-26-76.jpg" alt="معرض الصور" loading="lazy">
            <div class="gal-overlay">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
        </div>
        <div class="gal-item" onclick="openLightbox('uploads\PHOTO-2026-09-14-10-26-77.jpg')">
            <img src="uploads\PHOTO-2026-09-14-10-26-77.jpg" alt="معرض الصور" loading="lazy">
            <div class="gal-overlay">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
        </div>
        <div class="gal-item" onclick="openLightbox('uploads\PHOTO-2026-09-14-10-26-78.jpg')">
            <img src="uploads\PHOTO-2026-09-14-10-26-78.jpg" alt="معرض الصور" loading="lazy">
            <div class="gal-overlay">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
        </div>
        <div class="gal-item" onclick="openLightbox('uploads\PHOTO-2026-09-14-10-26-79.jpg')">
            <img src="uploads\PHOTO-2026-09-14-10-26-79.jpg" alt="معرض الصور" loading="lazy">
            <div class="gal-overlay">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
        </div>
        <div class="gal-item" onclick="openLightbox('uploads\PHOTO-2026-09-14-10-26-80.jpg')">
            <img src="uploads\PHOTO-2026-09-14-10-26-80.jpg" alt="معرض الصور" loading="lazy">
            <div class="gal-overlay">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
        </div>
        <div class="gal-item" onclick="openLightbox('uploads\PHOTO-2026-09-14-10-26-81.jpg')">
            <img src="uploads\PHOTO-2026-09-14-10-26-81.jpg" alt="معرض الصور" loading="lazy">
            <div class="gal-overlay">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
        </div>
        <div class="gal-item" onclick="openLightbox('uploads\PHOTO-2026-09-14-10-26-82.jpg')">
            <img src="uploads\PHOTO-2026-09-14-10-26-82.jpg" alt="معرض الصور" loading="lazy">
            <div class="gal-overlay">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
        </div>
        <div class="gal-item" onclick="openLightbox('uploads\PHOTO-2026-09-14-10-26-83.jpg')">
            <img src="uploads\PHOTO-2026-09-14-10-26-83.jpg" alt="معرض الصور" loading="lazy">
            <div class="gal-overlay">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
        </div>
        <div class="gal-item" onclick="openLightbox('uploads\PHOTO-2026-09-14-10-26-84.jpg')">
            <img src="uploads\PHOTO-2026-09-14-10-26-84.jpg" alt="معرض الصور" loading="lazy">
            <div class="gal-overlay">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
        </div>
        <div class="gal-item" onclick="openLightbox('uploads\PHOTO-2026-09-14-10-26-85.jpg')">
            <img src="uploads\PHOTO-2026-09-14-10-26-85.jpg" alt="معرض الصور" loading="lazy">
            <div class="gal-overlay">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
        </div>
        <div class="gal-item" onclick="openLightbox('uploads\PHOTO-2026-09-14-10-26-86.jpg')">
            <img src="uploads\PHOTO-2026-09-14-10-26-86.jpg" alt="معرض الصور" loading="lazy">
            <div class="gal-overlay">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
        </div>
        <div class="gal-item" onclick="openLightbox('uploads\PHOTO-2026-09-14-10-26-87.jpg')">
            <img src="uploads\PHOTO-2026-09-14-10-26-87.jpg" alt="معرض الصور" loading="lazy">
            <div class="gal-overlay">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
        </div>
        <div class="gal-item" onclick="openLightbox('uploads\PHOTO-2026-09-14-10-26-88.jpg')">
            <img src="uploads\PHOTO-2026-09-14-10-26-88.jpg" alt="معرض الصور" loading="lazy">
            <div class="gal-overlay">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
        </div>
        <div class="gal-item" onclick="openLightbox('uploads\PHOTO-2026-09-14-10-26-89.jpg')">
            <img src="uploads\PHOTO-2026-09-14-10-26-89.jpg" alt="معرض الصور" loading="lazy">
            <div class="gal-overlay">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
        </div>
        <div class="gal-item" onclick="openLightbox('uploads\PHOTO-2026-09-14-10-26-90.jpg')">
            <img src="uploads\PHOTO-2026-09-14-10-26-90.jpg" alt="معرض الصور" loading="lazy">
            <div class="gal-overlay">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
        </div>
        <div class="gal-item" onclick="openLightbox('uploads\PHOTO-2026-09-14-10-26-91.jpg')">
            <img src="uploads\PHOTO-2026-09-14-10-26-91.jpg" alt="معرض الصور" loading="lazy">
            <div class="gal-overlay">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
        </div>
        <div class="gal-item" onclick="openLightbox('uploads\PHOTO-2026-09-14-10-26-92.jpg')">
            <img src="uploads\PHOTO-2026-09-14-10-26-92.jpg" alt="معرض الصور" loading="lazy">
            <div class="gal-overlay">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
        </div>
        <div class="gal-item" onclick="openLightbox('uploads\PHOTO-2026-09-14-10-26-93.jpg')">
            <img src="uploads\PHOTO-2026-09-14-10-26-93.jpg" alt="معرض الصور" loading="lazy">
            <div class="gal-overlay">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
        </div>
        <div class="gal-item" onclick="openLightbox('uploads\PHOTO-2026-09-14-10-26-94.jpg')">
            <img src="uploads\PHOTO-2026-09-14-10-26-94.jpg" alt="معرض الصور" loading="lazy">
            <div class="gal-overlay">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
        </div>
        <div class="gal-item" onclick="openLightbox('uploads\PHOTO-2026-09-14-10-26-95.jpg')">
            <img src="uploads\PHOTO-2026-09-14-10-26-95.jpg" alt="معرض الصور" loading="lazy">
            <div class="gal-overlay">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
        </div>
        <div class="gal-item" onclick="openLightbox('uploads\PHOTO-2026-09-14-10-26-96.jpg')">
            <img src="uploads\PHOTO-2026-09-14-10-26-96.jpg" alt="معرض الصور" loading="lazy">
            <div class="gal-overlay">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
        </div>
        <div class="gal-item" onclick="openLightbox('uploads\PHOTO-2026-09-14-10-26-97.jpg')">
            <img src="uploads\PHOTO-2026-09-14-10-26-97.jpg" alt="معرض الصور" loading="lazy">
            <div class="gal-overlay">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
        </div>
        <div class="gal-item" onclick="openLightbox('uploads\PHOTO-2026-09-14-10-26-98.jpg')">
            <img src="uploads\PHOTO-2026-09-14-10-26-98.jpg" alt="معرض الصور" loading="lazy">
            <div class="gal-overlay">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
        </div>
        <div class="gal-item" onclick="openLightbox('uploads\PHOTO-2026-09-14-10-26-99.jpg')">
            <img src="uploads\PHOTO-2026-09-14-10-26-99.jpg" alt="معرض الصور" loading="lazy">
            <div class="gal-overlay">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
        </div>
  </div>

  <div class="lightbox" id="lightbox">
    <div class="lightbox-close" onclick="closeLightbox()">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M18 6L6 18M6 6l12 12" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg>
    </div>
    <img id="lightbox-img" src="" alt="">
  </div>

  <script>
    function openLightbox(src) {
      document.getElementById('lightbox-img').src = src;
      document.getElementById('lightbox').classList.add('active');
    }
    function closeLightbox() {
      document.getElementById('lightbox').classList.remove('active');
    }
  </script>
<!-- CTA -->
  <section style="padding:80px 24px;background:linear-gradient(135deg,#0e3a66,#0c2340);color:#fff;text-align:center;">
    <div style="max-width:720px;margin:0 auto;">
      <h2 style="font-family:Cairo;font-weight:900;font-size:clamp(26px,3.4vw,38px);color:#fff;margin:0;">هل تحتاج إلى استشارة متخصصة؟</h2>
      <p style="font-size:18px;color:#cfe0f2;margin:16px 0 0;">احجز موعدك مع الدكتور أرون ساروهـا اليوم.</p>
      <div style="display:flex;flex-wrap:wrap;gap:14px;justify-content:center;margin-top:30px;">
        <a href="index.php#appointment" style="background:linear-gradient(180deg,#2a8ee0,#0e4d8c);color:#fff;padding:15px 32px;border-radius:12px;font-family:Cairo;font-weight:800;font-size:16px;box-shadow:0 14px 30px -12px rgba(20,102,184,.7);" style-hover="filter:brightness(1.08);transform:translateY(-1px);">احجز استشارتك الآن</a>
        <a href="https://wa.me/917860000705" style="background:#20b858;color:#fff;padding:15px 30px;border-radius:12px;font-family:Cairo;font-weight:800;font-size:16px;" style-hover="filter:brightness(1.06);">تواصل عبر واتساب</a>
      </div>
    </div>
  </section>

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
          <a href="index.php#faq" style="color:#a8bdd6;font-size:14.5px;" style-hover="color:#fff;">الأسئلة الشائعة</a>
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
      <p style="font-size:13px;color:#5f7794;margin:0;">© 2026 د. أرون ساروهـا. جميع الحقوق محفوظة.</p>
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
<script type="text/x-dc" data-dc-script>
class Component extends DCLogic {
  state = { spine: [], brain: [], menuOpen: false };

  nav = [
    { label: 'عن الدكتور', href: 'index.php#about' },
    { label: 'الخدمات', href: 'services.php' },
    { label: 'العلاجات والعمليات', href: 'services.php' },
    { label: 'المرضى الدوليون', href: 'index.php#international' },
    { label: 'المقالات الطبية', href: 'index.php#blog' },
    { label: 'تواصل معنا', href: 'index.php#appointment' },
  ];

  async componentDidMount() {
    try {
      const mod = await import('../services-data.js');
      const list = mod.SERVICES || [];
      const map = s => ({ title: s.title, lead: s.lead, href: s.slug + '.php', hasImg: !!s.img, noImg: !s.img, img: s.img || '' });
      this.setState({
        spine: list.filter(s => s.cat === 'spine').map(map),
        brain: list.filter(s => s.cat === 'brain').map(map),
      });
    } catch (e) { console.error(e); }
  }

  renderVals() {
    return {
      nav: this.nav,
      spine: this.state.spine,
      brain: this.state.brain,
      menuOpen: this.state.menuOpen,
      toggleMenu: () => this.setState(s => ({ menuOpen: !s.menuOpen })),
      closeMenu: () => this.setState({ menuOpen: false }),
    };
  }
}
</script>
</body>
</html>
