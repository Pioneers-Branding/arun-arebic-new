/**
 * main.js — the small amount of behaviour the site needs.
 *   1. mobile navigation drawer
 *   2. FAQ accordion
 *   3. smooth scroll for in-page anchors
 */
(function () {
  'use strict';

  /* ------------------------------------------------ 1. mobile navigation */
  var toggle = document.getElementById('navToggle');
  var drawer = document.getElementById('navMobile');

  if (toggle && drawer) {
    toggle.addEventListener('click', function () {
      var open = drawer.classList.toggle('is-open');
      toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
    });

    // close the drawer once a link inside it is used
    drawer.addEventListener('click', function (event) {
      if (event.target.closest('a')) {
        drawer.classList.remove('is-open');
        toggle.setAttribute('aria-expanded', 'false');
      }
    });
  }

  /* ------------------------------------------------------ 2. FAQ accordion */
  var faqs = document.querySelectorAll('.faq');

  faqs.forEach(function (faq) {
    var button = faq.querySelector('.faq__q');
    var sign = faq.querySelector('.faq__sign');
    if (!button) return;

    button.addEventListener('click', function () {
      var willOpen = !faq.classList.contains('is-open');

      // only one answer stays open at a time
      faqs.forEach(function (other) {
        other.classList.remove('is-open');
        var otherBtn = other.querySelector('.faq__q');
        var otherSign = other.querySelector('.faq__sign');
        if (otherBtn) otherBtn.setAttribute('aria-expanded', 'false');
        if (otherSign) otherSign.textContent = '+';
      });

      if (willOpen) {
        faq.classList.add('is-open');
        button.setAttribute('aria-expanded', 'true');
        if (sign) sign.textContent = '−'; // minus sign
      }
    });
  });

  /* --------------------------------------------------- 3. smooth anchors */
  document.addEventListener('click', function (event) {
    var link = event.target.closest('a[href*="#"]');
    if (!link) return;

    var href = link.getAttribute('href');
    var hashIndex = href.indexOf('#');
    if (hashIndex === -1) return;

    var id = href.slice(hashIndex + 1);
    if (!id) return;

    // only intercept links that point at this same page
    var path = href.slice(0, hashIndex);
    var samePage = path === '' || path === window.location.pathname ||
      path.replace(/^.*\//, '') === window.location.pathname.replace(/^.*\//, '');
    if (!samePage) return;

    var target = document.getElementById(id);
    if (!target) return;

    event.preventDefault();
    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
    history.replaceState(null, '', '#' + id);
  });
})();
