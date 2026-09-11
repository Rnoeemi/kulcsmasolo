<footer class="border-t border-primary-hover bg-primary text-white">
    <div class="container-site py-8">
        <div class="grid gap-8 md:grid-cols-3">
            <div>
                <img
                    src="{{ asset('storage/images/logo.png') }}"
                    alt="{{ config('seo.brand') }}"
                    class="footer-logo"
                    width="140"
                    height="42"
                >
                <p class="mt-4 text-sm text-white/70">{{ config('seo.alternate_name') }} · {{ config('seo.city') }}</p>
                <p class="mt-2 text-sm text-white/80">
                    Kulcsmásolás, gravírozás, élezés és cipőjavítás Dunaújvárosban.
                </p>
                @if (config('seo.phone'))
                    <a href="tel:{{ preg_replace('/\s+/', '', config('seo.phone')) }}" class="footer-phone">
                        {{ config('seo.phone') }}
                    </a>
                @endif
                <p class="mt-3 text-sm text-white/80">
                    Hétköznap {{ config('seo.opening_hours.weekdays.open') }}–{{ config('seo.opening_hours.weekdays.close') }},
                    szombat {{ config('seo.opening_hours.saturday.open') }}–{{ config('seo.opening_hours.saturday.close') }}
                </p>
            </div>

            <nav aria-label="Szolgáltatások">
                <h2 class="font-semibold">Szolgáltatások</h2>
                <ul class="mt-2 space-y-1 text-sm text-white/80">
                    <li><a href="{{ route('kulcsmasolas') }}" class="hover:text-white" title="Kulcsmásolás Dunaújváros">Kulcsmásolás</a></li>
                    <li><a href="{{ route('cipojavitas') }}" class="hover:text-white" title="Cipőjavítás Dunaújváros">Cipőjavítás</a></li>
                    <li><a href="{{ route('egyeb-szolgaltatasok') }}" class="hover:text-white" title="Gravírozás, élezés">Egyéb szolgáltatások</a></li>
                </ul>
            </nav>

            <nav aria-label="Információ">
                <h2 class="font-semibold">Információ</h2>
                <ul class="mt-2 space-y-1 text-sm text-white/80">
                    <li><a href="{{ route('rolunk') }}" class="hover:text-white" title="Rólunk">Rólunk</a></li>
                    <li><a href="{{ route('kapcsolat') }}" class="hover:text-white" title="Kapcsolat és nyitvatartás">Kapcsolat</a></li>
                    <li>
                        <a href="{{ config('seo.facebook') }}" class="hover:text-white" target="_blank" rel="noopener noreferrer" title="Facebook oldal">
                            Facebook
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="footer-sub footer-grant" aria-label="Pályázati támogatás">
            <div class="footer-grant__logos">
                @if (file_exists(storage_path('app/public/images/dsp.png')))
                    <a href="{{ route('palyazat') }}" class="footer-grant__logo-link" title="Pályázati tájékoztató">
                        <img
                            src="{{ asset('storage/images/dsp.png') }}"
                            alt="Demján Sándor Program"
                            class="footer-grant__logo"
                            width="240"
                            height="96"
                            loading="lazy"
                            decoding="async"
                        >
                    </a>
                @else
                    <a href="{{ route('palyazat') }}" class="footer-grant__logo-link footer-grant__logo-placeholder" title="Pályázati tájékoztató">DSP</a>
                @endif
                @if (file_exists(storage_path('app/public/images/neum.png')))
                    <a href="{{ route('palyazat') }}" class="footer-grant__logo-link" title="Pályázati tájékoztató">
                        <img
                            src="{{ asset('storage/images/neum.png') }}"
                            alt="NEUM"
                            class="footer-grant__logo"
                            width="240"
                            height="96"
                            loading="lazy"
                            decoding="async"
                        >
                    </a>
                @else
                    <a href="{{ route('palyazat') }}" class="footer-grant__logo-link footer-grant__logo-placeholder" title="Pályázati tájékoztató">NEUM</a>
                @endif
            </div>
            <p class="footer-grant__text">
                A weboldal a Demján Sándor Program keretében és támogatásával valósult meg.
            </p>
        </div>

        <div class="footer-sub footer-legal" aria-label="Jogi információk">
            <nav class="footer-legal__nav" aria-label="Jogi dokumentumok">
                <a href="{{ route('impresszum') }}" class="footer-legal__link">Impresszum</a>
                <span class="footer-legal__sep" aria-hidden="true">|</span>
                <a href="{{ route('adatvedelem') }}" class="footer-legal__link">Adatvédelmi tájékoztató</a>
            </nav>
            <p class="footer-legal__credits">
                Készítette: Auri Consulting Tanácsadó KFT., WHATTHEBRAND Studio KFT. és PROMERA MENEDZSMENT KFT.
            </p>
            <p class="footer-legal__copy">
                &copy; {{ date('Y') }} {{ config('seo.brand') }}. Minden jog fenntartva.
            </p>
        </div>
    </div>
</footer>
