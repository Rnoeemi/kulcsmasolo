@extends('layouts.app')

@section('title', 'Adatvédelmi tájékoztató | ' . config('seo.brand'))
@section('meta_description', 'Adatvédelmi tájékoztató – ' . config('seo.brand') . ', ' . config('seo.alternate_name') . '.')
@section('robots', 'noindex, follow')

@section('content')
    @php
        $siteUrl = rtrim(config('seo.url'), '/');
    @endphp

    <section class="section bg-surface-alt" aria-labelledby="adatvedelem-cim">
        <div class="container-site max-w-3xl">
            <div class="deco-bar"></div>
            <h1 id="adatvedelem-cim" class="heading-1">Adatvédelmi tájékoztató</h1>
            <p class="legal-doc__meta mt-4">Hatályos: 2026.07.10.</p>

            <div class="about-panel mt-8 legal-doc">
                <p class="legal-doc__intro">
                    Jelen adatvédelmi tájékoztató célja, hogy rögzítse a(z) {{ config('seo.brand') }} ({{ config('seo.alternate_name') }}) (a továbbiakban: Adatkezelő) által alkalmazott adatvédelmi és adatkezelési elveket, valamint hogy tájékoztatást nyújtson a weboldal látogatói és a kapcsolatfelvételi űrlapot kitöltő személyek részére a személyes adatok kezeléséről az Európai Parlament és a Tanács (EU) 2016/679 rendelete (Általános Adatvédelmi Rendelet – GDPR), valamint a 2011. évi CXII. törvény (Infotv.) alapján.
                </p>

                <section class="legal-doc__section" aria-labelledby="adatvedelem-1">
                    <h2 id="adatvedelem-1" class="legal-doc__section-title">1. Az Adatkezelő adatai</h2>
                    <p><strong class="text-primary">Adatkezelő neve:</strong> {{ config('seo.brand') }} ({{ config('seo.alternate_name') }})</p>
                    <p><strong class="text-primary">Székhely:</strong> {{ config('seo.address') }}</p>
                    @if (config('seo.email'))
                        <p><strong class="text-primary">E-mail cím:</strong> <a href="mailto:{{ config('seo.email') }}" class="text-primary hover:underline">{{ config('seo.email') }}</a></p>
                    @endif
                    @if (config('seo.phone'))
                        <p><strong class="text-primary">Telefonszám:</strong> {{ config('seo.phone') }}</p>
                    @endif
                    <p><strong class="text-primary">Weboldal:</strong> <a href="https://kulcsmasoloduna.hu/" class="text-primary hover:underline">https://kulcsmasoloduna.hu//</a></p>
                    <p class="mt-3"><strong class="text-primary">Tárhelyszolgáltató:</strong></p>
                    <p>Név: Romix Webműhely Kft.</p>
                    <p>Telephely: 7020 Dunaföldvár, Dézsma sor 17.</p>
                    <p>E-mail: <a href="mailto:info@romix.hu" class="text-primary hover:underline">info@romix.hu</a></p>
                </section>

                <section class="legal-doc__section" aria-labelledby="adatvedelem-2">
                    <h2 id="adatvedelem-2" class="legal-doc__section-title">2. A kezelt személyes adatok köre</h2>
                    <p>A weboldalon található kapcsolatfelvételi űrlapon keresztül az alábbi adatok megadása szükséges:</p>
                    <ul class="legal-doc__list">
                        <li>Név</li>
                        <li>E-mail cím</li>
                        <li>Üzenet (szabad szöveges mező)</li>
                    </ul>
                    <p>Az Adatkezelő más személyes adatokat nem gyűjt automatikusan a kapcsolatfelvételi űrlapon keresztül.</p>
                </section>

                <section class="legal-doc__section" aria-labelledby="adatvedelem-3">
                    <h2 id="adatvedelem-3" class="legal-doc__section-title">3. Az adatkezelés célja</h2>
                    <p>Az adatkezelés célja:</p>
                    <ul class="legal-doc__list">
                        <li>Kapcsolatfelvétel lehetővé tétele</li>
                        <li>Az Érintett megkeresésének megválaszolása</li>
                        <li>Információ nyújtása a megkeresés tárgyában</li>
                        <li>Későbbi kapcsolattartás kezdeményezése az Érintett kérésére</li>
                        <li>Szolgáltatással kapcsolatos egyeztetés</li>
                    </ul>
                    <p>Az Adatkezelő az adatokat kizárólag kapcsolattartási céllal kezeli.</p>
                </section>

                <section class="legal-doc__section" aria-labelledby="adatvedelem-4">
                    <h2 id="adatvedelem-4" class="legal-doc__section-title">4. Az adatkezelés jogalapja</h2>
                    <p>Az adatkezelés jogalapja a GDPR 6. cikk (1) bekezdés a) pontja alapján:</p>
                    <ul class="legal-doc__list">
                        <li>az Érintett önkéntes, egyértelmű hozzájárulása</li>
                    </ul>
                    <p>A hozzájárulást az Érintett a kapcsolatfelvételi űrlap kitöltésével, az adatvédelmi tájékoztató elfogadásával és az üzenet elküldésével adja meg.</p>
                    <p>Az adatszolgáltatás önkéntes, de a kapcsolatfelvétel ennek hiányában nem valósítható meg.</p>
                </section>

                <section class="legal-doc__section" aria-labelledby="adatvedelem-5">
                    <h2 id="adatvedelem-5" class="legal-doc__section-title">5. Az adatkezelés időtartama</h2>
                    <p>Az Adatkezelő a megadott személyes adatokat az alábbi ideig tárolja:</p>
                    <ul class="legal-doc__list">
                        <li>az utolsó kapcsolatfelvételtől számított 12 hónapig, vagy</li>
                        <li>addig, amíg az Érintett nem kéri azok törlését</li>
                    </ul>
                    <p>Jogszabályi kötelezettség hiányában az adatok ezt követően véglegesen törlésre kerülnek.</p>
                </section>

                <section class="legal-doc__section" aria-labelledby="adatvedelem-6">
                    <h2 id="adatvedelem-6" class="legal-doc__section-title">6. Az adatok megismerésére jogosult személyek</h2>
                    <p>A személyes adatokat kizárólag az Adatkezelő és az általa megbízott, munkavégzésben részt vevő személyek jogosultak megismerni.</p>
                    <p>Az Adatkezelő nem értékesíti, nem bérbe adja és nem továbbítja az adatokat harmadik fél részére marketing célokra.</p>
                </section>

                <section class="legal-doc__section" aria-labelledby="adatvedelem-7">
                    <h2 id="adatvedelem-7" class="legal-doc__section-title">7. Adatfeldolgozók</h2>
                    <p>Az adatok tárolásához és kezeléséhez az Adatkezelő az alábbi adatfeldolgozót veszi igénybe:</p>
                    <p class="mt-2"><strong class="text-primary">Tárhelyszolgáltató:</strong></p>
                    <p>Név: Romix Webműhely Kft.</p>
                    <p>Telephely: 7020 Dunaföldvár, Dézsma sor 17.</p>
                    <p>E-mail: <a href="mailto:info@romix.hu" class="text-primary hover:underline">info@romix.hu</a></p>
                    <p>Tel.: <a href="tel:+36302158796" class="text-primary hover:underline">+36 30 215-8796</a></p>
                    <p class="mt-2">Az adatfeldolgozó az adatokat kizárólag technikai feladatok ellátására kezeli, saját céljára nem használja fel.</p>
                </section>

                <section class="legal-doc__section" aria-labelledby="adatvedelem-8">
                    <h2 id="adatvedelem-8" class="legal-doc__section-title">8. Az adatbiztonság</h2>
                    <p>Az Adatkezelő megfelelő technikai és szervezési intézkedésekkel gondoskodik arról, hogy a személyes adatok:</p>
                    <ul class="legal-doc__list">
                        <li>jogosulatlan hozzáférés ellen védettek legyenek,</li>
                        <li>ne kerülhessenek nyilvánosságra, ne sérülhessenek,</li>
                        <li>ne semmisüljenek meg.</li>
                    </ul>
                    <p>Az adatkezelés jelszóval védett rendszeren, SSL titkosítással történik.</p>
                </section>

                <section class="legal-doc__section" aria-labelledby="adatvedelem-9">
                    <h2 id="adatvedelem-9" class="legal-doc__section-title">9. Az Érintett jogai</h2>
                    <p>Az Érintett jogosult:</p>
                    <ul class="legal-doc__list">
                        <li>tájékoztatást kérni személyes adatainak kezeléséről</li>
                        <li>kérni adatai helyesbítését</li>
                        <li>kérni adatai törlését („elfeledtetés joga”)</li>
                        <li>kérni az adatkezelés korlátozását</li>
                        <li>kérni az adatok hordozhatóságát</li>
                    </ul>
                    <p>
                        Kérelmét az alábbi címen nyújthatja be:
                        @if (config('seo.email'))
                            <a href="mailto:{{ config('seo.email') }}" class="text-primary hover:underline">{{ config('seo.email') }}</a>
                        @else
                            a kapcsolatfelvételi űrlapon megadott elérhetőségeken
                        @endif
                    </p>
                    <p>Az Adatkezelő a kérelmet legkésőbb 30 napon belül megvizsgálja és érdemi választ ad.</p>
                </section>

                <section class="legal-doc__section" aria-labelledby="adatvedelem-10">
                    <h2 id="adatvedelem-10" class="legal-doc__section-title">10. Jogorvoslati lehetőség</h2>
                    <p>Amennyiben az Érintett jogsértést tapasztal, jogosult panasszal élni a következő hatóságnál:</p>
                    <p class="mt-2"><strong class="text-primary">Nemzeti Adatvédelmi és Információszabadság Hatóság (NAIH)</strong></p>
                    <p>Székhely: 1055 Budapest, Falk Miksa utca 9-11.</p>
                    <p>Postacím: 1363 Budapest, Pf.: 9.</p>
                    <p>Telefon: <a href="tel:+3613911400" class="text-primary hover:underline">+36 1 391 1400</a></p>
                    <p>E-mail: <a href="mailto:ugyfelszolgalat@naih.hu" class="text-primary hover:underline">ugyfelszolgalat@naih.hu</a></p>
                    <p>Weboldal: <a href="https://www.naih.hu" class="text-primary hover:underline" target="_blank" rel="noopener noreferrer">www.naih.hu</a></p>
                    <p class="mt-2">Továbbá az Érintett bírósághoz is fordulhat.</p>
                </section>

                <section class="legal-doc__section" aria-labelledby="adatvedelem-11" id="sutik">
                    <h2 id="adatvedelem-11" class="legal-doc__section-title">11. Sütik (cookie-k)</h2>
                    <p>A weboldal a látogatottság méréséhez Google Analytics szolgáltatást használ (Google Ireland Limited / Google LLC).</p>
                    <p>A mérési sütik csak az Érintett hozzájárulása esetén kerülnek elhelyezésre. A hozzájárulás a cookie tájékoztatóban bármikor megadható vagy elutasítható; a döntés a böngészőben kerül tárolásra.</p>
                    <p>Az elemzési adatok célja a weboldal használatának megismerése és fejlesztése. A hozzájárulás hiányában a Google Analytics nem töltődik be.</p>
                </section>

                <section class="legal-doc__section" aria-labelledby="adatvedelem-12">
                    <h2 id="adatvedelem-12" class="legal-doc__section-title">12. Egyéb rendelkezések</h2>
                    <p>Az Adatkezelő fenntartja a jogot a jelen tájékoztató módosítására. Az esetleges változásokat a weboldalon közzéteszi.</p>
                </section>
            </div>
        </div>
    </section>
@endsection
