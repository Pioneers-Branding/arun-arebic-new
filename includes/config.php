<?php
/**
 * config.php — single source of truth for the whole site.
 *
 * Every page includes this (through header.php) so that contact details,
 * navigation and small helpers live in exactly one place.
 */

/* ------------------------------------------------------------------ paths */
/**
 * Base URL of the site. Leave empty when the site sits at the web root,
 * or set it to a sub-folder, e.g. '/drarunsaroha'.
 */
define('BASE_URL', '');

/**
 * Where this site actually lives. Canonical tags, hreflang, the sitemap and
 * every absolute URL in the structured data are built from this, so it has
 * to match the domain the pages are served from — scheme included, no
 * trailing slash.
 */
define('SITE_URL', 'https://ar.spineandbrainindia.com');

/**
 * The English edition of the same site. Used only to pair the two languages
 * with hreflang, which is what tells Google these are translations of one
 * another rather than duplicates competing for the same result.
 */
define('SITE_URL_EN', 'https://spineandbrainindia.com');

/** Build an absolute-from-root URL for an asset or page. */
function url(string $path = ''): string
{
    return BASE_URL . '/' . ltrim($path, '/');
}

/**
 * URL of an image, preferring the WebP that tools/build-images.py writes.
 *
 * The PNGs under assets/ are 1.8-2.1 MB sources. The WebP beside each one is
 * the same picture at the size the page actually renders it, around 95%
 * smaller, which is the difference between a home page that weighs 11 MB and
 * one that weighs a few hundred kilobytes. This prefers the WebP when it is
 * there and falls back to the original when it is not, so the site renders
 * correctly whether or not the build script has been run.
 */
function img_url(string $path): string
{
    $webp = preg_replace('/\.(png|jpe?g)$/i', '.webp', $path);

    if ($webp !== null && $webp !== $path && is_file(__DIR__ . '/../' . ltrim($webp, '/'))) {
        return url($webp);
    }

    return url($path);
}

/** Escape a string for safe HTML output. */
function e(?string $value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

/*
 * The Arabic URL map. Loaded straight after url() and e() because everything
 * below builds links through it.
 */
require_once __DIR__ . '/routes.php';

/**
 * Trim a meta description to something a search result will actually show.
 *
 * Google truncates around 155-160 characters. Arabic runs shorter per glyph
 * than Latin, so the cut is on a word boundary rather than a character count
 * alone — a description that ends mid-word reads as broken in a SERP.
 */
function meta_description(string $text, int $limit = 158): string
{
    $text = trim(preg_replace('/\s+/u', ' ', $text));

    /*
     * Counting and cutting is done with PCRE's /u modifier rather than
     * mbstring. mbstring is not compiled into every PHP build, and an Arabic
     * site that fatals on a host without it is a bad trade for one helper.
     */
    if (preg_match_all('/./us', $text) <= $limit) {
        return $text;
    }

    preg_match('/^.{0,' . $limit . '}/us', $text, $m);
    $cut = $m[0];

    /* A space is ASCII and UTF-8 is self-synchronising, so a byte search for
       the last space cannot land inside a multi-byte character. */
    $space = strrpos($cut, ' ');

    return rtrim($space !== false ? substr($cut, 0, $space) : $cut, ' ،.') . '…';
}

/**
 * The breadcrumb trail as schema.org JSON-LD.
 *
 * Google renders this as the path shown under the title in a result, which
 * on an Arabic SERP is the difference between a readable trail and a raw
 * percent-encoded URL.
 *
 * @param array<int, array{name:string, url:string}> $crumbs
 */
function breadcrumb_schema(array $crumbs): array
{
    $items = [];

    foreach ($crumbs as $i => $crumb) {
        $items[] = [
            '@type'    => 'ListItem',
            'position' => $i + 1,
            'name'     => $crumb['name'],
            'item'     => abs_url($crumb['url']),
        ];
    }

    return ['@type' => 'BreadcrumbList', 'itemListElement' => $items];
}

/* --------------------------------------------------------------- identity */
define('SITE_NAME',      'د. أرون ساروهـا');
define('SITE_TAGLINE',   'جراحة المخ والأعصاب والعمود الفقري');
define('SITE_LOCALE',    'ar');
define('SITE_DIR',       'rtl');

define('PHONE',          '+91 78600 00705');
define('PHONE_LINK',     'tel:+917860000705');
define('WHATSAPP_LINK',  'https://wa.me/917860000705');
define('EMAIL',          'drarunsaroha@gmail.com');

/**
 * Appointment form delivery.
 * MAIL_ENABLED stays false until a mail transport is configured on the server —
 * the form still validates and confirms, it simply does not try to send.
 */
define('MAIL_ENABLED', false);
define('MAIL_TO',      EMAIL);

define('FACEBOOK_URL',   'https://www.facebook.com/spineandbrainindia');
define('INSTAGRAM_URL',  'https://www.instagram.com/spineandbrainindia/');
define('YOUTUBE_URL',    'https://www.youtube.com/@spineandbrainindiabydr.aru6509');
define('LINKEDIN_URL',   'https://in.linkedin.com/in/arunsaroha');

define('ADDRESS_GURUGRAM', 'مستشفى ماكس، جوروجرام: B Block، سوشانت لوك 1، سيكتور 43، جوروجرام – 122001');
define('ADDRESS_DWARKA',   'مستشفى ماكس، دواركا: سيكتور 10، دواركا، دلهي – 110075');

define('COPYRIGHT',  '© 2026 د. أرون ساروهـا. جميع الحقوق محفوظة.');
define('DISCLAIMER', 'المعلومات الواردة في هذا الموقع لأغراض توعوية ولا تُعد بديلاً عن الاستشارة الطبية المباشرة.');

/* ------------------------------------------------------------- navigation */
/**
 * Primary navigation and footer columns.
 *
 * These are functions rather than the plain arrays they used to be. Pages are
 * included from inside dispatch(), so anything defined at this file's top
 * level lands in whichever scope happened to load config.php first and is
 * invisible to the templates. A function is reachable from every scope, which
 * makes the navigation independent of where a page was included from.
 *
 * A link only ever has to be added here; the header renders the same list in
 * the desktop bar and the mobile drawer.
 */
function nav_items(): array
{
    return [
        ['label' => 'عن الدكتور',         'href' => page_url() . '#about'],
        ['label' => 'التخصصات',           'href' => page_url() . '#specialties'],
        ['label' => 'العلاجات والعمليات',  'href' => page_url('services')],
        ['label' => 'المرضى الدوليون',     'href' => page_url() . '#international'],
        ['label' => 'المقالات الطبية',     'href' => page_url() . '#blog'],
        ['label' => 'تواصل معنا',          'href' => page_url() . '#appointment'],
    ];
}

/**
 * Footer link columns.
 *
 * The middle column lists treatments by name. Those are the pages worth the
 * internal links: a site-wide link to each of the four highest-intent Arabic
 * treatment URLs does more for them than any amount of on-page tuning.
 */
function footer_links(): array
{
    return [
        'روابط سريعة' => [
            ['label' => 'عن الدكتور',         'href' => page_url() . '#about'],
            ['label' => 'التخصصات',           'href' => page_url() . '#specialties'],
            ['label' => 'العلاجات والعمليات',  'href' => page_url('services')],
            ['label' => 'الحالات المرضية',     'href' => page_url() . '#conditions'],
        ],
        'أبرز العلاجات' => [
            ['label' => 'جراحة أورام الدماغ',        'href' => service_url('brain-tumor-surgery')],
            ['label' => 'علاج الانزلاق الغضروفي',    'href' => service_url('herniated-disc-treatment')],
            ['label' => 'جراحة تضيّق القناة الشوكية', 'href' => service_url('spinal-stenosis-surgery')],
            ['label' => 'جراحة قاعدة الجمجمة',       'href' => service_url('skull-base-surgery')],
        ],
        'المزيد' => [
            ['label' => 'المرضى الدوليون', 'href' => page_url() . '#international'],
            ['label' => 'المقالات الطبية', 'href' => page_url() . '#blog'],
            ['label' => 'الأسئلة الشائعة', 'href' => page_url() . '#faq'],
            ['label' => 'تواصل معنا',      'href' => page_url() . '#appointment'],
        ],
    ];
}

/* ------------------------------------------------------------------ icons */
/**
 * Inline SVG snippets used in more than one place. Kept here so the markup
 * files stay readable.
 */
function icon_logo(string $size = '24'): string
{
    return '<svg width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="none">'
        . '<path d="M12 3c-.9 2.4-2.6 3.4-4.6 3.7C5.6 7 5 8 5 9.6c0 3.1 2.6 5.9 7 8.9 4.4-3 7-5.8 7-8.9 0-1.6-.6-2.6-2.4-2.9C14.6 6.4 12.9 5.4 12 3Z" stroke="#fff" stroke-width="1.5" stroke-linejoin="round"/>'
        . '<path d="M9 11h1.5l1 2 1.5-4 1 2H15" stroke="#a7f3e8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>';
}

function icon_phone(string $stroke = '#0f9b8e', string $size = '20'): string
{
    return '<svg width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="none">'
        . '<path d="M4 5c0-.6.4-1 1-1h2.3c.5 0 .9.3 1 .8l.7 3c.1.4 0 .8-.3 1L8 10.5a12 12 0 0 0 5.5 5.5l.7-1.7c.2-.3.6-.5 1-.4l3 .7c.5.1.8.5.8 1V18c0 1-1 2-2 2A16 16 0 0 1 4 6Z" stroke="' . $stroke . '" stroke-width="1.6" stroke-linejoin="round"/></svg>';
}

function icon_whatsapp(string $fill = '#1faa5c', string $size = '20'): string
{
    return '<svg width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="' . $fill . '">'
        . '<path d="M12 2a10 10 0 0 0-8.6 15l-1.3 4.7 4.8-1.3A10 10 0 1 0 12 2Zm5.3 14.2c-.2.6-1.3 1.2-1.8 1.2-.5.1-1 .3-3.4-.7-2.9-1.2-4.7-4.2-4.9-4.4-.1-.2-1.1-1.5-1.1-2.9 0-1.3.7-2 1-2.3.2-.3.5-.3.7-.3h.5c.2 0 .4 0 .6.5.2.6.8 2 .9 2.1.1.1.1.3 0 .5s-.2.4-.3.6c-.2.2-.3.4-.5.6-.1.1-.3.3-.1.6.2.3.8 1.4 1.8 2.2 1.3 1.1 2.3 1.5 2.6 1.6.3.1.5.1.6-.1.2-.2.7-.8.9-1.1.2-.3.4-.2.6-.1l1.9.9c.3.1.5.2.5.3.1.2.1.9-.1 1.5Z"/></svg>';
}

function icon_calendar(string $size = '20'): string
{
    return '<svg width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="none">'
        . '<path d="M8 2v3m8-3v3M4 9h16M5 5h14a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Z" stroke="#fff" stroke-width="1.6"/></svg>';
}

function icon_check(string $bg = '#d9f4f0', string $tick = '#086a61', string $size = '20'): string
{
    return '<svg width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="none">'
        . '<circle cx="12" cy="12" r="11" fill="' . $bg . '"/>'
        . '<path d="M7.5 12.3l3 3 6-6.5" stroke="' . $tick . '" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>';
}

/* ----------------------------------------------------------- form handling */
require_once __DIR__ . '/contact-handler.php';
