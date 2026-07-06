@extends('layouts.app')

@section('title', 'Kulcsmásolás Dunaújváros – Lakás-, Autó- és Chipkulcsok | ' . config('seo.brand'))
@section('meta_description', 'Kulcsmásolás Dunaújvárosban: lakás-, ház- és garázskulcsok, autókulcsok, chipkulcsok, beléptető biléták másolása. Gyors kiszolgálás, széles választék.')

@push('page_structured_data')
<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'name' => 'Kulcsmásolás',
    'serviceType' => 'Kulcsmásolás',
    'provider' => ['@id' => rtrim(config('seo.url'), '/') . '/#business'],
    'url' => route('kulcsmasolas'),
    'description' => 'Lakás-, ház-, garázs- és speciális kulcsok, autókulcsok, chipkulcsok, beléptető biléták másolása.',
    'areaServed' => 'HU',
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) !!}
</script>
@endpush

@section('content')
    <section class="section bg-surface-alt" aria-labelledby="kulcsmasolas-cim">
        <div class="container-site">
            <div class="grid items-center gap-12 lg:grid-cols-2">
                <div>
                    <h1 id="kulcsmasolas-cim" class="heading-1">Kulcsmásolás Dunaújvárosban</h1>
                    <p class="text-lead mt-4">
                        Dunaújvárosban lakás-, ház- és garázskulcsoktól az autókulcsokon és chipkulcsokon át a beléptető bilétákig – minden gyakori és speciális kulcsmásolási igényt kiszolgálunk.
                    </p>
                </div>
                <x-deco-image
                    :src="asset('storage/images/kulcsmasolas.png')"
                    alt="Kulcsmásolás szolgáltatás – lakás-, autó- és chipkulcsok"
                    class="ml-auto"
                />
            </div>
        </div>
    </section>

    <section class="section section-bg reveal" aria-labelledby="kulcsmasolas-attekintes-cim">
        <x-section-bg image="keys-2.jpg" position="left" fade="surface" opacity="0.08" />
        <div class="container-site">
            <div class="deco-bar"></div>
            <h2 id="kulcsmasolas-attekintes-cim" class="heading-2">Miben segítünk?</h2>
            <p class="text-lead mt-4 max-w-2xl">
                Négy fő kategóriában vállalunk kulcsmásolást – válasszon a részletekhez.
            </p>

            <div class="service-overview mt-8">
                <a href="#lakaskulcsok" class="service-overview__item" title="Lakáskulcsok részletei">
                    <span class="service-overview__title">Lakáskulcsok</span>
                    <span class="service-overview__text">Lakás-, ház-, garázs- és speciális kulcsok másolása.</span>
                    <span class="service-overview__link">Részletek →</span>
                </a>
                <a href="#autokulcsok" class="service-overview__item" title="Autókulcs részletei">
                    <span class="service-overview__title">Autókulcs</span>
                    <span class="service-overview__text">Másolás, pótlás és kódolás – ahol lehetséges.</span>
                    <span class="service-overview__link">Részletek →</span>
                </a>
                <a href="#chipkulcsok" class="service-overview__item" title="Chipkulcsok részletei">
                    <span class="service-overview__title">Chipkulcsok</span>
                    <span class="service-overview__text">Másolás, programozás, új chipek feliratozása.</span>
                    <span class="service-overview__link">Részletek →</span>
                </a>
                <a href="#belepteto-biletek" class="service-overview__item" title="Beléptető biléták részletei">
                    <span class="service-overview__title">Beléptető biléták</span>
                    <span class="service-overview__text">Beléptető kártyák és biléták másolása.</span>
                    <span class="service-overview__link">Részletek →</span>
                </a>
            </div>
        </div>
    </section>

    <section id="lakaskulcsok" class="section-alt reveal" aria-labelledby="lakaskulcsok-cim">
        <div class="container-site">
            <div class="grid items-center gap-12 lg:grid-cols-2">
                <div>
                    <div class="deco-bar !mx-0"></div>
                    <h2 id="lakaskulcsok-cim" class="heading-2">Lakáskulcsok</h2>
                    <p class="text-body mt-4">
                        Lakás-, ház-, garázs- és speciális kulcsok másolása a leggyakoribb zár- és kulcstípusokhoz. Yale, Zár-Kulcs és más gyártmányok, többpontos zárak, redőnyszerkezet és biztonsági profilú kulcsok egyaránt.
                    </p>
                    <ul class="text-body mt-6 list-inside list-disc space-y-2 text-text-muted">
                        <li>Lakás-, ház- és garázskulcsok</li>
                        <li>Speciális és biztonsági profilú kulcsok</li>
                        <li>Többpontos zárak, redőnyszerkezet kulcsai</li>
                        <li>Lakat, kerékpárzár és egyéb kisebb kulcsok</li>
                    </ul>
                </div>
                <x-deco-image
                    :src="asset('storage/images/lakaskulcsok.jpg')"
                    alt="Lakás-, ház- és garázskulcs másolás"
                    class="ml-auto"
                />
            </div>
        </div>
    </section>

    <section id="autokulcsok" class="section section-bg reveal" aria-labelledby="autokulcsok-cim">
        <x-section-bg image="keys.jpg" position="left" fade="surface" />
        <div class="container-site">
            <div class="grid items-center gap-12 lg:grid-cols-2">
                <x-deco-image
                    :src="asset('storage/images/4790.jpg')"
                    alt="Autókulcs másolás, pótlás és kódolás"
                    left
                />
                <div>
                    <div class="deco-bar !mx-0"></div>
                    <h2 id="autokulcsok-cim" class="heading-2">Autókulcs</h2>
                    <p class="text-body mt-4">
                        Autókulcsok másolása, pótlása, kódolása – mechanikus és elektronikus kulcsokhoz egyaránt. Autókulcs házak, csíkos kulcsok és távirányítós kulcsok, ahol lehetséges.
                    </p>
                    <ul class="text-body mt-6 list-inside list-disc space-y-2 text-text-muted">
                        <li>Autókulcs másolás és pótkulcs készítés</li>
                        <li>Autókulcs házak</li>
                        <li>Kódolás, ahol az adott típushoz elérhető</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="chipkulcsok" class="section-alt reveal" aria-labelledby="chipkulcsok-cim">
        <div class="container-site">
            <div class="grid items-center gap-12 lg:grid-cols-2">
                <div>
                    <div class="deco-bar !mx-0"></div>
                    <h2 id="chipkulcsok-cim" class="heading-2">Chipkulcsok</h2>
                    <p class="text-body mt-4">
                        Chipkulcsok másolása, programozása, új chipek feliratozása – lakás- és autókulcsokhoz egyaránt, ahol a technológia lehetővé teszi.
                    </p>
                    <ul class="text-body mt-6 list-inside list-disc space-y-2 text-text-muted">
                        <li>Chipes kulcsok másolása</li>
                        <li>Chip programozása és párosítása</li>
                        <li>Új chipek feliratozása</li>
                        <li>Távirányítós / elektronikus kulcsok</li>
                    </ul>
                </div>
                <x-deco-image
                    :src="asset('storage/images/chip-kulcs.jpg')"
                    alt="Chipkulcs másolás és programozás"
                    class="ml-auto"
                />
            </div>
        </div>
    </section>

    <section id="belepteto-biletek" class="section section-bg reveal" aria-labelledby="belepteto-biletek-cim">
        <x-section-bg image="key clone.jpg" position="left" fade="surface" opacity="0.08" />
        <div class="container-site">
            <div class="grid items-center gap-12 lg:grid-cols-2">
                <x-deco-image
                    :src="asset('storage/images/belepteto-bileta.jpg')"
                    alt="Beléptető kártyák és biléták másolása"
                    left
                />
                <div>
                    <div class="deco-bar !mx-0"></div>
                    <h2 id="belepteto-biletek-cim" class="heading-2">Beléptető biléták</h2>
                    <p class="text-body mt-4">
                        Beléptető kártyák és biléták másolása – lakóépületekhez, munkahelyekhez és egyéb beléptető rendszerekhez.
                    </p>
                    <ul class="text-body mt-6 list-inside list-disc space-y-2 text-text-muted">
                        <li>Beléptető kártyák klónozása</li>
                        <li>Beléptető biléták másolása</li>
                        <li>Gyors, megbízható kiszolgálás</li>
                    </ul>

                    <div class="mt-10 flex flex-wrap gap-4">
                        <a href="{{ route('kapcsolat') }}" class="btn-primary">Érdeklődés kulcsmásolásról</a>
                        <a href="{{ route('egyeb-szolgaltatasok') }}" class="btn-outline">Egyéb szolgáltatások</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
