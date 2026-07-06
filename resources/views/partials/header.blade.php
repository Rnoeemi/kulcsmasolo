<header class="site-header" id="site-header">
    <div class="container-site relative flex items-center justify-between py-4">
        <a href="{{ route('home') }}" class="shrink-0" title="{{ config('seo.brand') }} – Főoldal" aria-label="{{ config('seo.brand') }} – vissza a főoldalra">
            <img
                src="{{ asset('storage/images/logo.png') }}"
                alt="{{ config('seo.brand') }} – kulcsmásolás és cipőjavítás logó"
                class="site-logo"
                width="160"
                height="48"
            >
        </a>

        <button
            type="button"
            id="mobile-menu-toggle"
            class="flex h-10 w-10 items-center justify-center rounded-none border border-border text-primary lg:hidden"
            aria-label="Menü megnyitása"
            aria-expanded="false"
            aria-controls="main-nav"
        >
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>

        <nav id="main-nav" class="hidden flex-col gap-4 lg:flex lg:flex-row lg:flex-wrap lg:items-center lg:justify-end lg:gap-x-6 lg:gap-y-2" aria-label="Fő navigáció">
            <a href="{{ route('kulcsmasolas') }}" @class(['nav-link', 'nav-link-active' => request()->routeIs('kulcsmasolas')]) title="Kulcsmásolás szolgáltatások">
                Kulcsmásolás
            </a>
            <a href="{{ route('cipojavitas') }}" @class(['nav-link', 'nav-link-active' => request()->routeIs('cipojavitas')]) title="Cipőjavítás szolgáltatások">
                Cipőjavítás
            </a>
            <a href="{{ route('egyeb-szolgaltatasok') }}" @class(['nav-link', 'nav-link-active' => request()->routeIs('egyeb-szolgaltatasok')]) title="Gravírozás, élezés és egyéb szolgáltatások">
                Egyéb szolgáltatások
            </a>
            <a href="{{ route('rolunk') }}" @class(['nav-link', 'nav-link-active' => request()->routeIs('rolunk')]) title="Rólunk">
                Rólunk
            </a>
            <a href="{{ route('kapcsolat') }}" class="btn-primary btn-sm" title="Kapcsolat és elérhetőségek">
                Kapcsolat
            </a>
        </nav>
    </div>
</header>
