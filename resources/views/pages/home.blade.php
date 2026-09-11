@extends('layouts.app')

@section('title', 'Kulcsmásolás és Cipőjavítás Dunaújváros | ' . config('seo.brand'))
@section('meta_description', 'Kulcsmásolás, gravírozás és cipőjavítás Dunaújvárosban. Lakás-, autó- és biztonsági kulcsok, chipek, élezés – gyors, megbízható kiszolgálás a Piactéri Kulcsmásolónál.')
@section('og_image', '/storage/images/hero-1.png')

@section('content')
    <section class="hero-banner" aria-label="Bemutatkozás">
        <div class="hero-banner__bg" aria-hidden="true"></div>

        <div class="hero-banner__panel">
            <div class="hero-banner__inner">
                <h1 class="heading-1">Kulcsmásolás és cipőjavítás egy helyen</h1>
                <p class="text-lead mt-4">
                    Professzionális kulcsmásolás, gravírozás és cipőjavítás <strong>Dunaújvárosban</strong>: lakás-, autó- és biztonsági kulcsok, chipek, beléptető biléták, élezés, valamint talpbetét csere és cipőzár javítás – gyorsan, precízen.
                </p>
                <div class="mt-8 flex flex-wrap gap-4">
                    <a href="{{ route('kulcsmasolas') }}" class="btn-accent">Kulcsmásolás szolgáltatások</a>
                    <a href="{{ route('cipojavitas') }}" class="btn-outline">Cipőjavítás részletei</a>
                </div>
                <div class="info-badges">
                    <span class="info-badge">H–P {{ config('seo.opening_hours.weekdays.open') }}–{{ config('seo.opening_hours.weekdays.close') }}</span>
                    <span class="info-badge">Szo {{ config('seo.opening_hours.saturday.open') }}–{{ config('seo.opening_hours.saturday.close') }}</span>
                    <span class="info-badge">{{ config('seo.city') }}</span>
                </div>
            </div>
        </div>

        <img
            src="{{ asset('storage/images/hero-1.png') }}"
            alt="Kulcsmásolás és cipőjavítás – autókulcs és bőrcipő szakszolgáltatás"
            class="hero-banner__image hero-banner__image--desktop"
            width="1920"
            height="600"
            fetchpriority="high"
        >
        <img
            src="{{ asset('storage/images/hero-2.png') }}"
            alt="Kulcsmásolás és cipőjavítás műhely – autókulcs és cipő"
            class="hero-banner__image hero-banner__image--mobile"
            width="1920"
            height="800"
            fetchpriority="high"
        >
    </section>

    <section class="section section-bg reveal" aria-labelledby="szolgaltatasok-cim">
        <x-section-bg image="keys.jpg" fade="surface" />
        <div class="container-site">
            <div class="section-header">
                <div class="deco-bar"></div>
                <h2 id="szolgaltatasok-cim" class="heading-2">Szolgáltatásaink</h2>
                <p class="text-lead mx-auto mt-4 max-w-2xl text-center">
                    Kulcsmásolás, gravírozás, élezés és cipőjavítás <strong>Dunaújvárosban</strong> – a leggyakoribb igényektől a speciális munkákig.
                </p>
            </div>

            <div class="mt-12 grid gap-8 md:grid-cols-2">
                <article class="card">
                    <x-deco-image
                        :src="asset('storage/images/kulcsmasolas.png')"
                        wide
                        flat
                        alt="Kulcsmásolás – lakás-, autó- és biztonsági kulcsok"
                    />
                    <div class="card-body">
                        <h3 class="heading-3">Kulcsmásolás</h3>
                        <p class="text-body mt-3">
                            Lakás-, autó- és biztonsági kulcsok, chipek és beléptető biléták másolása – gyorsan, megbízhatóan.
                        </p>
                        <a href="{{ route('kulcsmasolas') }}" class="btn-primary mt-6" title="Kulcsmásolás szolgáltatásaink">Kulcsmásolás részletei</a>
                    </div>
                </article>

                <article class="card">
                    <x-deco-image
                        :src="asset('storage/images/cipojavitas.png')"
                        wide
                        flat
                        alt="Cipőjavítás – talpbetét, sarok és cipőzár javítás"
                    />
                    <div class="card-body">
                        <h3 class="heading-3">Cipőjavítás</h3>
                        <p class="text-body mt-3">
                            Talpbetét csere, sarokjavítás, cipőzár javítás és egyéb cipőjavítási munkák tartós anyagokkal.
                        </p>
                        <a href="{{ route('cipojavitas') }}" class="btn-primary mt-6" title="Cipőjavítás szolgáltatásaink">Cipőjavítás részletei</a>
                    </div>
                </article>
            </div>

            <div class="mt-16" aria-labelledby="egyeb-szolgaltatasok-cim">
                <h3 id="egyeb-szolgaltatasok-cim" class="heading-3 text-center">Egyéb szolgáltatások</h3>
                <p class="text-body mx-auto mt-3 max-w-2xl text-center text-text-muted">
                    Gravírozás, élezés és időnként elérhető műszaki cikkek – válasszon a részletekhez.
                </p>

                <div class="service-tiles mt-8">
                    <a href="{{ route('egyeb-szolgaltatasok') }}#gravirozas" class="service-tile" title="Gravírozás részletei">
                        <span class="service-tile__media">
                            <img
                                src="{{ asset('storage/images/gravirozas.png') }}"
                                alt=""
                                class="service-tile__img"
                                loading="lazy"
                                decoding="async"
                            >
                            <span class="service-tile__scrim" aria-hidden="true"></span>
                        </span>
                        <span class="service-tile__body">
                            <span class="service-tile__title">Gravírozás</span>
                            <span class="service-tile__text">Névtábla, kutya- és macskabiléta – akár 1 órán belül.</span>
                            <span class="service-tile__link">Részletek →</span>
                        </span>
                    </a>

                    <a href="{{ route('egyeb-szolgaltatasok') }}#elezes" class="service-tile" title="Élezés részletei">
                        <span class="service-tile__media">
                            <img
                                src="{{ asset('storage/images/keselezes.png') }}"
                                alt=""
                                class="service-tile__img"
                                loading="lazy"
                                decoding="async"
                            >
                            <span class="service-tile__scrim" aria-hidden="true"></span>
                        </span>
                        <span class="service-tile__body">
                            <span class="service-tile__title">Élezés</span>
                            <span class="service-tile__text">Kés, olló, láncfűrész lánc – esetenként megvárható.</span>
                            <span class="service-tile__link">Részletek →</span>
                        </span>
                    </a>

                    <a href="{{ route('egyeb-szolgaltatasok') }}#muszaki-cikkek" class="service-tile" title="Műszaki cikkek részletei">
                        <span class="service-tile__media">
                            @if (file_exists(storage_path('app/public/images/muszaki-cikkek.png')))
                                <img
                                    src="{{ asset('storage/images/muszaki-cikkek.png') }}"
                                    alt=""
                                    class="service-tile__img"
                                    loading="lazy"
                                    decoding="async"
                                >
                            @else
                                <span class="service-tile__placeholder" aria-hidden="true"></span>
                            @endif
                            <span class="service-tile__scrim" aria-hidden="true"></span>
                        </span>
                        <span class="service-tile__body">
                            <span class="service-tile__title">Műszaki cikkek</span>
                            <span class="service-tile__text">Időnként olló, lakat és hasonló apróságok – nem webshop, változó kínálat.</span>
                            <span class="service-tile__link">Részletek →</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="section-alt reveal" aria-labelledby="kapcsolat-cta-cim">
        <div class="container-site section-header">
            <div class="deco-bar"></div>
            <h2 id="kapcsolat-cta-cim" class="heading-2">Kérdése van?</h2>
            <p class="text-lead mx-auto mt-4 max-w-xl">
                Keressen minket bizalommal – segítünk kulcsmásolás, gravírozás, élezés vagy cipőjavítás ügyében is.
            </p>
            <a href="{{ route('kapcsolat') }}" class="btn-primary mt-8">Kapcsolatfelvétel és időpont</a>
        </div>
    </section>
@endsection
