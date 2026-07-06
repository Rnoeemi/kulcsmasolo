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
