@extends('layouts.app')

@section('title', 'Rólunk – Kulcsmásolás Dunaújváros | ' . config('seo.brand'))
@section('meta_description', config('seo.brand') . ' – ' . config('seo.alternate_name') . ' Dunaújvárosban. Kulcsmásolás, gravírozás, élezés és cipőjavítás szakértői segítséggel, gyors kiszolgálással.')

@section('content')
    <section class="section bg-surface-alt" aria-labelledby="rolunk-cim">
        <div class="container-site">
            <div class="grid items-center gap-12 lg:grid-cols-2">
                <div>
                    <h1 id="rolunk-cim" class="heading-1">Rólunk – kulcsmásoló Dunaújvárosban</h1>
                    <p class="text-lead mt-4">
                        A {{ config('seo.brand') }} – ismertebb nevén {{ config('seo.alternate_name') }} – Dunaújvárosban elsősorban kulcsmásolással, gravírozással és élezéssel foglalkozik, emellett teljes körű cipőjavítási szolgáltatásokat is kínál.
                    </p>
                </div>
                <x-deco-image
                    :src="asset('storage/images/kulcsmasolo-uzlet.webp')"
                    alt="{{ config('seo.brand') }} üzlet – {{ config('seo.alternate_name') }}, Dunaújváros"
                    class="ml-auto"
                />
            </div>
        </div>
    </section>

    <section class="section section-bg reveal" aria-labelledby="ki-vagyunk-cim">
        <x-section-bg image="shoe-repair3.jpg" position="left" fade="surface" opacity="0.08" />
        <div class="container-site space-y-8">
            <div class="about-panel">
                <div class="grid items-center gap-8 lg:grid-cols-2 lg:gap-12">
                    <div>
                        <div class="deco-bar !mx-0"></div>
                        <h2 id="ki-vagyunk-cim" class="heading-2">Ki vagyunk mi?</h2>
                        <p class="text-body mt-4">
                            Célunk, hogy ügyfeleink gyorsan és megbízhatóan kapják meg a szükséges szolgáltatást – legyen szó egy egyszerű lakáskulcs másolásáról, autókulcs pótlásáról vagy egy kedvelt cipő megmentéséről.
                        </p>
                        <p class="text-body mt-4">
                            Szakértő csapatunk segít a megfelelő megoldás kiválasztásában, és minden kulcsmásolási és cipőjavítási munkát gondosan, precízen végzünk el.
                        </p>
                    </div>
                    <img
                        src="{{ asset('storage/images/logo.png') }}"
                        alt="{{ config('seo.brand') }} logó"
                        class="logo-plain mx-auto lg:ml-auto"
                        width="240"
                        height="240"
                        loading="lazy"
                        decoding="async"
                    >
                </div>
            </div>

            <div class="about-panel">
                <h2 class="heading-2">Miért válasszon minket?</h2>
                <div class="about-benefits">
                    <div class="about-benefit">
                        <p class="about-benefit__title">Gyors kiszolgálás</p>
                        <p class="about-benefit__text">Rövid várakozási idő, gyakori munkák helyben, megvárhatóan.</p>
                    </div>
                    <div class="about-benefit">
                        <p class="about-benefit__title">Széles kínálat</p>
                        <p class="about-benefit__text">Kulcsmásolástól a cipőjavításig – sok igény egy helyen.</p>
                    </div>
                    <div class="about-benefit">
                        <p class="about-benefit__title">Segítőkész ügyfélszolgálat</p>
                        <p class="about-benefit__text">Barátságos tanácsadás, hogy a megfelelő megoldást válassza.</p>
                    </div>
                    <div class="about-benefit">
                        <p class="about-benefit__title">Megbízható munka</p>
                        <p class="about-benefit__text">Precíz, tartós javítások és kulcsmásolás minden munkánál.</p>
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap gap-4">
                <a href="{{ route('kulcsmasolas') }}" class="btn-outline">Kulcsmásolás</a>
                <a href="{{ route('egyeb-szolgaltatasok') }}" class="btn-outline">Egyéb szolgáltatások</a>
                <a href="{{ route('cipojavitas') }}" class="btn-outline">Cipőjavítás</a>
            </div>
        </div>
    </section>
@endsection
