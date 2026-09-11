const toggle = document.getElementById('mobile-menu-toggle');
const nav = document.getElementById('main-nav');

if (toggle && nav) {
    toggle.addEventListener('click', () => {
        const isOpen = nav.classList.toggle('flex');
        nav.classList.toggle('hidden', !isOpen);
        nav.classList.toggle('absolute', isOpen);
        nav.classList.toggle('right-4', isOpen);
        nav.classList.toggle('top-full', isOpen);
        nav.classList.toggle('z-50', isOpen);
        nav.classList.toggle('mobile-nav-panel', isOpen);
        toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
    });
}

const header = document.getElementById('site-header');

if (header) {
    const onScroll = () => {
        header.classList.toggle('site-header--scrolled', window.scrollY > 8);
    };

    onScroll();
    window.addEventListener('scroll', onScroll, { passive: true });
}

if (!window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    const revealElements = document.querySelectorAll('.reveal');

    if (revealElements.length > 0) {
        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('reveal--visible');
                        observer.unobserve(entry.target);
                    }
                });
            },
            { threshold: 0.12, rootMargin: '0px 0px -40px 0px' },
        );

        revealElements.forEach((element) => observer.observe(element));
    }
}

const GA_MEASUREMENT_ID = 'G-6FJ0DJMXXW';
const COOKIE_CONSENT_KEY = 'cookie_consent';

function loadGoogleAnalytics() {
    if (window.__gaLoaded) {
        return;
    }

    window.__gaLoaded = true;
    window.dataLayer = window.dataLayer || [];
    window.gtag = function gtag() {
        window.dataLayer.push(arguments);
    };
    window.gtag('js', new Date());
    window.gtag('config', GA_MEASUREMENT_ID);

    const script = document.createElement('script');
    script.async = true;
    script.src = `https://www.googletagmanager.com/gtag/js?id=${GA_MEASUREMENT_ID}`;
    document.head.appendChild(script);
}

const cookieBanner = document.getElementById('cookie-banner');

if (cookieBanner) {
    const consent = localStorage.getItem(COOKIE_CONSENT_KEY);

    if (consent === 'accepted') {
        loadGoogleAnalytics();
    } else if (consent !== 'declined') {
        cookieBanner.hidden = false;
    }

    cookieBanner.querySelectorAll('[data-cookie-consent]').forEach((button) => {
        button.addEventListener('click', () => {
            const value = button.getAttribute('data-cookie-consent');

            if (value !== 'accepted' && value !== 'declined') {
                return;
            }

            localStorage.setItem(COOKIE_CONSENT_KEY, value);
            cookieBanner.hidden = true;

            if (value === 'accepted') {
                loadGoogleAnalytics();
            }
        });
    });
}
