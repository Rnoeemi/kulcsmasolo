@extends('layouts.app')

@section('title', 'Cipőjavítás Dunaújváros – Talpbetét, Sarok és Cipőzár | ' . config('seo.brand'))
@section('meta_description', 'Cipőjavítás Dunaújvárosban: talpbetét csere, sarokjavítás, cipőzár javítás. ' . config('seo.brand') . ' – megbízható javítás, tartós anyagok.')

@push('page_structured_data')
<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'name' => 'Cipőjavítás',
    'serviceType' => 'Cipőjavítás',
    'provider' => ['@id' => rtrim(config('seo.url'), '/') . '/#business'],
    'url' => route('cipojavitas'),
    'description' => 'Talpbetét csere, sarokjavítás, cipőzár javítás és egyéb cipőjavítási munkák.',
    'areaServed' => 'HU',
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) !!}
</script>
@endpush

@section('content')
    <section class="section bg-surface-alt" aria-labelledby="cipojavitas-cim">
        <div class="container-site">
            <div class="grid items-center gap-12 lg:grid-cols-2">
                <div>
                    <h1 id="cipojavitas-cim" class="heading-1">Cipőjavítás Dunaújvárosban</h1>
                    <p class="text-lead mt-4">
                        Kedvenc cipőit is megmenthetjük Dunaújvárosban – talpbetét cserétől a teljes felújításig széles javítási palettával állunk rendelkezésére.
                    </p>
                </div>
                <x-deco-image
                    :src="asset('storage/images/cipojavitas.png')"
                    alt="Cipőjavítás szolgáltatás – bőrcipő javítás műhelyben"
                    class="ml-auto"
                />
            </div>
        </div>
    </section>

    <section class="section section-bg reveal" aria-labelledby="cipojavitas-szolgaltatasok-cim">
        <x-section-bg image="shoe repair2.jpg" position="left" fade="surface" />
        <div class="container-site max-w-3xl">
            <div class="deco-bar"></div>
            <h2 id="cipojavitas-szolgaltatasok-cim" class="heading-2">Cipőjavítási szolgáltatásaink</h2>
            <p class="text-lead mt-4">
                A leggyakoribb cipőjavítási munkáktól az egyedi felújításig – minden munkát gondosan, tartós anyagokkal végzünk.
            </p>

            <div class="mt-10 space-y-6">
                <div class="about-panel">
                    <h3 class="heading-3">Talpbetét csere</h3>
                    <p class="text-body mt-3">
                        Elhasználódott vagy sérült talpbetét cseréje kényelmes, tartós anyagokkal – a cipő újra kényelmesen viselhető.
                    </p>
                </div>

                <div class="about-panel">
                    <h3 class="heading-3">Sarokjavítás</h3>
                    <p class="text-body mt-3">
                        Kopott vagy sérült sarok helyreállítása, hogy cipője újra stabilan tartson és tovább szolgálja Önt.
                    </p>
                </div>

                <div class="about-panel">
                    <h3 class="heading-3">Cipőzár javítás</h3>
                    <p class="text-body mt-3">
                        Beragadt, eltört vagy hiányzó cipőzár javítása és cseréje – gyors megoldás mindennapi problémákra.
                    </p>
                </div>

                <div class="about-panel">
                    <h3 class="heading-3">Egyéb javítások</h3>
                    <p class="text-body mt-3">
                        Varrás, ragasztás, bőrfestés és egyéb kisebb-nagyobb cipőjavítási munkák kedvenc lábbelii megmentéséhez.
                    </p>
                </div>
            </div>

            <div class="mt-12">
                <p class="text-lead">Hozza be cipőit – felmérjük az állapotukat és tájékoztatjuk a lehetőségekről.</p>
                <a href="{{ route('kapcsolat') }}" class="btn-primary mt-6">Cipőjavítás – kapcsolatfelvétel</a>
            </div>
        </div>
    </section>
@endsection
