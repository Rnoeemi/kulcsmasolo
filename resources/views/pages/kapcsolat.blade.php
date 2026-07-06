@extends('layouts.app')

@section('title', 'Kapcsolat Dunaújváros – Elérhetőségek és Nyitvatartás | ' . config('seo.brand'))
@section('meta_description', 'Kapcsolat – Piactéri Kulcsmásoló, Dunaújváros, szolgáltatóház 1. Tel.: ' . config('seo.phone') . '. Nyitvatartás: hétköznap 8–17, szombat 8–12.')

@include('partials.faq-schema')

@section('content')
    <section class="section section--compact bg-surface-alt" aria-labelledby="kapcsolat-cim">
        <div class="container-site">
            <div class="grid gap-8 lg:grid-cols-2 lg:items-start">
                <div>
                    <div class="deco-bar"></div>
                    <h1 id="kapcsolat-cim" class="heading-1">Kapcsolat – Piactéri Kulcsmásoló</h1>
                    <p class="text-lead mt-4">
                        Kérdése van kulcsmásolással, gravírozással vagy cipőjavítással kapcsolatban? Keressen minket Dunaújvárosban – a {{ config('seo.alternate_name') }} üzletben szívesen segítünk.
                    </p>
                </div>

                <div class="contact-highlight">
                    <h2 class="heading-3">Nyitvatartás</h2>
                    <p class="text-body mt-3 text-text-muted">
                        Hétfő – Péntek: <time datetime="{{ config('seo.opening_hours.weekdays.open') }}">{{ config('seo.opening_hours.weekdays.open') }}</time> – <time datetime="{{ config('seo.opening_hours.weekdays.close') }}">{{ config('seo.opening_hours.weekdays.close') }}</time><br>
                        Szombat: <time datetime="{{ config('seo.opening_hours.saturday.open') }}">{{ config('seo.opening_hours.saturday.open') }}</time> – <time datetime="{{ config('seo.opening_hours.saturday.close') }}">{{ config('seo.opening_hours.saturday.close') }}</time>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section section--tight-top section-bg reveal" aria-labelledby="elerhetosegek-cim">
        <x-section-bg image="keys-2.jpg" fade="surface" opacity="0.08" />
        <div class="container-site">
            <div class="grid gap-8 lg:grid-cols-2 lg:items-start">
                <div class="space-y-6">
                    <div class="contact-panel contact-panel--compact">
                        <h2 id="elerhetosegek-cim" class="heading-2">Elérhetőségek</h2>

                        <ul class="contact-list">
                            <li class="contact-list__item">
                                <span class="contact-list__icon" aria-hidden="true">
                                    <img src="{{ asset('storage/images/icons/location.svg') }}" alt="" class="contact-list__icon-img" width="20" height="20" loading="lazy" decoding="async">
                                </span>
                                <div class="contact-list__body">
                                    <span class="contact-list__label">Helyszín</span>
                                    <span class="contact-list__value">
                                        {{ config('seo.alternate_name') }}, {{ config('seo.address') }}
                                    </span>
                                </div>
                            </li>
                            @if (config('seo.phone'))
                                <li class="contact-list__item">
                                    <span class="contact-list__icon" aria-hidden="true">
                                        <img src="{{ asset('storage/images/icons/telephone.svg') }}" alt="" class="contact-list__icon-img" width="20" height="20" loading="lazy" decoding="async">
                                    </span>
                                    <div class="contact-list__body">
                                        <span class="contact-list__label">Telefon</span>
                                        <span class="contact-list__value">
                                            <a href="tel:{{ preg_replace('/\s+/', '', config('seo.phone')) }}">{{ config('seo.phone') }}</a>
                                        </span>
                                    </div>
                                </li>
                            @endif
                            @if (config('seo.email'))
                                <li class="contact-list__item">
                                    <span class="contact-list__icon" aria-hidden="true">
                                        <img src="{{ asset('storage/images/icons/email.svg') }}" alt="" class="contact-list__icon-img" width="20" height="20" loading="lazy" decoding="async">
                                    </span>
                                    <div class="contact-list__body">
                                        <span class="contact-list__label">E-mail</span>
                                        <span class="contact-list__value">
                                            <a href="mailto:{{ config('seo.email') }}">{{ config('seo.email') }}</a>
                                        </span>
                                    </div>
                                </li>
                            @endif
                            <li class="contact-list__item">
                                <span class="contact-list__icon" aria-hidden="true">
                                    <img src="{{ asset('storage/images/icons/facebook.svg') }}" alt="" class="contact-list__icon-img" width="20" height="20" loading="lazy" decoding="async">
                                </span>
                                <div class="contact-list__body">
                                    <span class="contact-list__label">Facebook</span>
                                    <span class="contact-list__value">
                                        <a href="{{ config('seo.facebook') }}" target="_blank" rel="noopener noreferrer">Facebook oldal</a>
                                    </span>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="contact-map" aria-labelledby="terkep-cim">
                        <h2 id="terkep-cim" class="sr-only">Megközelítés</h2>
                        <iframe
                            src="{{ config('seo.google_maps_embed') }}"
                            class="contact-map__embed"
                            allowfullscreen
                            loading="lazy"
                            referrerpolicy="strict-origin-when-cross-origin"
                            title="{{ config('seo.alternate_name') }} – Google Térkép, {{ config('seo.city') }}"
                        ></iframe>
                    </div>
                </div>

                <div class="contact-panel">
                    <h2 class="heading-2">Üzenet küldése</h2>

                    @if (session('contact_sent'))
                        <div class="form-alert form-alert--success mt-6" role="status">
                            Köszönjük üzenetét! Hamarosan felvesszük Önnel a kapcsolatot.
                        </div>
                    @endif

                    @if (session('contact_error'))
                        <div class="form-alert form-alert--error mt-6" role="alert">
                            Az üzenet küldése sikertelen volt. Kérjük, próbálja újra később, vagy hívjon minket telefonon.
                        </div>
                    @endif

                    <form class="mt-6 space-y-4" action="{{ route('kapcsolat.send') }}" method="post" aria-label="Kapcsolatfelvételi űrlap">
                        @csrf
                        <div class="form-honeypot" aria-hidden="true">
                            <label for="website">Weboldal</label>
                            <input type="text" id="website" name="website" tabindex="-1" autocomplete="off">
                        </div>
                        <div>
                            <label for="name" class="form-label">Név</label>
                            <input
                                type="text"
                                id="name"
                                name="name"
                                value="{{ old('name') }}"
                                class="form-input @error('name') form-input--error @enderror"
                                placeholder="Teljes név"
                                autocomplete="name"
                                required
                            >
                            @error('name')
                                <p class="form-error">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="email" class="form-label">E-mail</label>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                value="{{ old('email') }}"
                                class="form-input @error('email') form-input--error @enderror"
                                placeholder="pelda@email.hu"
                                autocomplete="email"
                                required
                            >
                            @error('email')
                                <p class="form-error">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="message" class="form-label">Üzenet</label>
                            <textarea
                                id="message"
                                name="message"
                                rows="5"
                                class="form-input @error('message') form-input--error @enderror"
                                placeholder="Írja le kérését – pl. kulcsmásolás, gravírozás, cipőjavítás..."
                                required
                            >{{ old('message') }}</textarea>
                            @error('message')
                                <p class="form-error">{{ $message }}</p>
                            @enderror
                        </div>
                        <button type="submit" class="btn-primary w-full sm:w-auto">Küldés</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <x-faq-section class="reveal" centered heading-id="gyik-kapcsolat-cim" />
@endsection
