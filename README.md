# Dr. Arun Saroha — PHP site

The Arabic (RTL) site converted from the original `.dc.html` design canvas to plain PHP
with shared includes and one external stylesheet.

## Run it

```bash
php -S localhost:8000
```

Then open <http://localhost:8000>. On a real host, point the document root at this folder.

## Structure

```
index.php                  home page
services.php               services index (grouped: spine / brain)
<slug>.php                 25 service pages — each is 2 lines, naming its slug

includes/
  config.php               site constants, nav arrays, shared SVG icons, helpers
  header-link.php          everything inside <head>: meta, OG, fonts, CSS <link>
  header.php               <!DOCTYPE> … <head> … <body> + sticky site header
  footer.php               footer, mobile action bar, scripts, closing tags
  services-data.php        all 25 services (copy, images, FAQs) — single source
  home-data.php            home page content arrays
  service-page.php         the layout shared by every service page
  contact-form.php         appointment form markup
  contact-handler.php      appointment form POST validation / delivery

css/style.css              the whole design — no inline styles anywhere
js/main.js                 mobile menu, FAQ accordion, smooth anchors
assets/                    images (shared by both the PHP site and html/)

html/                      the ORIGINAL Claude Design canvas pages (28 × .dc.html)
support.js                 canvas runtime — loaded by html/*.dc.html as ../support.js
image-slot.js              canvas image-slot widget
services-data.js           canvas copy of the service data
```

`html/` holds the design source the PHP site was converted from. It is kept for reference
and is not part of the running site — nothing in the PHP site loads from it. Its three
runtime scripts stay at the root and the pages reach them with `../`. If you ever move
those scripts into `html/`, drop the `../` from the `<script src>` tags and from the
`assets/` paths in `services-data.js`.

> The canvas copy `services-data.js` uses `../assets/…` (its pages sit one level down);
> the PHP copy `includes/services-data.php` uses `assets/…` (its pages sit at the root).
> They are separate files — edit the PHP one to change the live site.

## How a page is built

```php
<?php
require_once __DIR__ . '/includes/config.php';

$page_title       = '...';   // optional, all have defaults
$page_description = '...';
$page_canonical   = '...';

require __DIR__ . '/includes/header.php';
?>
   ... page content ...
<?php require __DIR__ . '/includes/footer.php'; ?>
```

`header.php` pulls in `header-link.php`, which is where the stylesheet is attached:

```html
<link rel="stylesheet" href="/css/style.css">
```

Add another sheet for one page by setting `$extra_css = ['css/print.css'];` before
including `header.php`. Add a script the same way with `$extra_js`.

## Editing content

- **Navigation and footer links** — the `$NAV` and `$FOOTER_LINKS` arrays in `includes/config.php`.
- **Phone, WhatsApp, email, addresses, social** — constants at the top of `includes/config.php`.
- **Service copy, symptoms, FAQs** — `includes/services-data.php`. Adding an entry there
  plus a two-line `<slug>.php` is all a new service needs; it appears on `services.php`
  and in "related services" automatically.
- **Home page copy** — `includes/home-data.php`.

## Sub-folder installs

If the site does not sit at the web root, set the base path once:

```php
define('BASE_URL', '/drarunsaroha');   // includes/config.php
```

Every link and asset is built through `url()`, so nothing else needs changing.

## Appointment form

`includes/contact-handler.php` validates the submission (name, phone and country are
required; email is format-checked) and re-renders the form with the values kept and a
success or error message.

Email delivery is **off** by default so the form cannot fail on a host with no mail
transport. Turn it on in `includes/config.php`:

```php
define('MAIL_ENABLED', true);
define('MAIL_TO', 'drarunsaroha@gmail.com');
```

For production, prefer SMTP (PHPMailer or similar) over PHP's `mail()`, and add a
CSRF token and a spam check before going live. The uploaded-reports field is accepted
by the browser but is not yet stored server-side.
