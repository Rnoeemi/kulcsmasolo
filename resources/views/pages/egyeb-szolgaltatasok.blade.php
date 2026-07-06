@extends('layouts.app')

@section('title', 'Egyéb Szolgáltatások Dunaújváros – Gravírozás, Élezés | ' . config('seo.brand'))
@section('meta_description', 'Gravírozás, kés- és láncfűrész élezés Dunaújvárosban. Időnként elérhető műszaki cikkek – olló, lakat. Nem webshop, érdemes betérni vagy érdeklődni.')

@push('page_structured_data')
<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'name' => 'Egyéb szolgáltatások',
    'serviceType' => 'Gravírozás és élezés',
    'provider' => ['@id' => rtrim(config('seo.url'), '/') . '/#business'],
    'url' => route('egyeb-szolgaltatasok'),
    'description' => 'Gravírozás, kés- és láncfűrész élezés Dunaújvárosban.',
    'areaServed' => config('seo.city'),
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) !!}
</script>
@endpush

@section('content')
    <section class="section bg-surface-alt" aria-labelledby="egyeb-cim">
        <div class="container-site max-w-3xl">
            <div class="deco-bar"></div>
            <h1 id="egyeb-cim" class="heading-1">Gravírozás és élezés Dunaújvárosban</h1>
            <p class="text-lead mt-4">
                A kulcsmásolás és cipőjavítás mellett Dunaújvárosban gravírozást, élezést is vállalunk – és időnként néhány hasznos műszaki cikk is kapható üzletünkben.
            </p>
        </div>
    </section>

    <section id="gravirozas" class="section section-bg reveal" aria-labelledby="gravirozas-cim">
        <x-section-bg image="keys.jpg" position="left" fade="surface" opacity="0.08" />
        <div class="container-site">
            <div class="about-panel">
                <div class="grid items-center gap-8 lg:grid-cols-2 lg:gap-12">
                    <div>
                        <h2 id="gravirozas-cim" class="heading-2">Gravírozás</h2>
                        <p class="text-body mt-4">
                            Névtáblák, kutya- és macskabiléták gravírozása akár 1 órán belül. Egyedi feliratok precíz kivitelezéssel – személyes ajándéknak vagy azonosításra egyaránt.
                        </p>
                        <ul class="text-body mt-6 list-inside list-disc space-y-2 text-text-muted">
                            <li>Névtábla gravírozás</li>
                            <li>Kutya- és macskabiléta</li>
                            <li>Gyors elkészítés, akár 1 órán belül</li>
                        </ul>
                    </div>
                    <x-deco-image
                        :src="asset('storage/images/gravirozas.png')"
                        alt="Gravírozás – névtábla és biléta"
                        class="ml-auto"
                    />
                </div>
            </div>
        </div>
    </section>

    <section id="elezes" class="section-alt reveal" aria-labelledby="elezes-cim">
        <div class="container-site">
            <div class="about-panel">
                <div class="grid items-center gap-8 lg:grid-cols-2 lg:gap-12">
                    <x-deco-image
                        :src="asset('storage/images/keselezes.png')"
                        alt="Élezés – kés, olló, láncfűrész lánc"
                        left
                    />
                    <div>
                        <h2 id="elezes-cim" class="heading-2">Élezés</h2>
                        <p class="text-body mt-4">
                            Kés, olló, láncfűrész lánc és egyéb szerszámok élezése – esetenként megvárható. Hozza el elhasználódott eszközeit, és újra élesen használhatja őket.
                        </p>
                        <ul class="text-body mt-6 list-inside list-disc space-y-2 text-text-muted">
                            <li>Kés- és ollóélezés</li>
                            <li>Láncfűrész lánc élezés</li>
                            <li>Esetenként helyben, megvárható</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="muszaki-cikkek" class="section section-bg reveal" aria-labelledby="muszaki-cikkek-cim">
        <x-section-bg image="key clone.jpg" position="left" fade="surface" opacity="0.07" />
        <div class="container-site max-w-3xl">
            <div class="about-panel">
                <h2 id="muszaki-cikkek-cim" class="heading-2">Időnként elérhető műszaki cikkek</h2>
                <p class="text-body mt-4 text-text-muted">
                    Nem webshop jelleggel dolgozunk – időnként előfordulnak hasznos apróságok, például ollók vagy lakatok. A kínálat változó, érdemes személyesen betérni vagy érdeklődni.
                </p>
                <ul class="text-body mt-6 list-inside list-disc space-y-2 text-text-muted">
                    <li>Ollók</li>
                    <li>Lakatok</li>
                    <li>Egyéb kisebb műszaki cikkek – változó kínálat</li>
                </ul>

                <div class="mt-10 flex flex-wrap gap-4">
                    <a href="{{ route('kapcsolat') }}" class="btn-primary">Érdeklődés / elérhetőség</a>
                    <a href="{{ config('seo.facebook') }}" class="btn-outline" target="_blank" rel="noopener noreferrer">Facebook oldal</a>
                </div>
            </div>
        </div>
    </section>
@endsection
