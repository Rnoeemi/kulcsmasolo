@php
    $brand = config('seo.brand');
    $siteUrl = rtrim(config('seo.url'), '/');
    $description = trim($__env->yieldContent('meta_description')) ?: config('seo.default_description');
    $hours = config('seo.opening_hours');
    $geo = config('seo.geo');

    $localBusiness = [
        '@type' => 'LocalBusiness',
        '@id' => $siteUrl . '/#business',
        'name' => $brand,
        'alternateName' => config('seo.alternate_name'),
        'url' => $siteUrl,
        'image' => [
            $siteUrl . config('seo.og_image'),
            $siteUrl . '/storage/images/kulcsmasolo-uzlet.webp',
            $siteUrl . '/storage/images/logo.png',
        ],
        'description' => config('seo.default_description'),
        'priceRange' => '$$',
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => config('seo.street_address'),
            'postalCode' => config('seo.postal_code'),
            'addressLocality' => config('seo.city'),
            'addressCountry' => 'HU',
        ],
        'geo' => [
            '@type' => 'GeoCoordinates',
            'latitude' => $geo['latitude'],
            'longitude' => $geo['longitude'],
        ],
        'areaServed' => config('seo.city'),
        'sameAs' => [config('seo.facebook')],
        'knowsAbout' => [
            'Kulcsmásolás',
            'Autókulcs másolás',
            'Biztonsági kulcs másolás',
            'Gravírozás',
            'Élezés',
            'Cipőjavítás',
        ],
        'openingHoursSpecification' => [
            [
                '@type' => 'OpeningHoursSpecification',
                'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
                'opens' => $hours['weekdays']['open'],
                'closes' => $hours['weekdays']['close'],
            ],
            [
                '@type' => 'OpeningHoursSpecification',
                'dayOfWeek' => 'Saturday',
                'opens' => $hours['saturday']['open'],
                'closes' => $hours['saturday']['close'],
            ],
        ],
        'hasOfferCatalog' => [
            '@type' => 'OfferCatalog',
            'name' => 'Szolgáltatások',
            'itemListElement' => [
                ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'Kulcsmásolás', 'url' => route('kulcsmasolas')]],
                ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'Egyéb szolgáltatások', 'url' => route('egyeb-szolgaltatasok')]],
                ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'Cipőjavítás', 'url' => route('cipojavitas')]],
            ],
        ],
    ];

    if (config('seo.phone')) {
        $localBusiness['telephone'] = config('seo.phone');
    }

    if (config('seo.email')) {
        $localBusiness['email'] = config('seo.email');
    }
@endphp

<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'WebSite',
            '@id' => $siteUrl . '/#website',
            'url' => $siteUrl,
            'name' => $brand,
            'description' => $description,
            'inLanguage' => 'hu-HU',
            'publisher' => ['@id' => $siteUrl . '/#business'],
        ],
        $localBusiness,
    ],
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
</script>

@stack('page_structured_data')
