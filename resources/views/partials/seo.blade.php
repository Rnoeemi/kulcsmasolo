@php
    $brand = config('seo.brand');
    $siteUrl = rtrim(config('seo.url'), '/');
    $pageTitle = trim($__env->yieldContent('title'));
    $fullTitle = $pageTitle !== '' ? $pageTitle : $brand;
    $description = trim($__env->yieldContent('meta_description')) ?: config('seo.default_description');
    $canonicalPath = request()->getPathInfo();
    $canonical = trim($__env->yieldContent('canonical')) ?: $siteUrl . ($canonicalPath === '/' ? '' : $canonicalPath);
    $ogImage = $siteUrl . (trim($__env->yieldContent('og_image')) ?: config('seo.og_image'));
    $robots = trim($__env->yieldContent('robots')) ?: 'index, follow';
@endphp

<link rel="canonical" href="{{ $canonical }}">
<meta name="description" content="{{ $description }}">
<meta name="robots" content="{{ $robots }}">

<meta property="og:type" content="website">
<meta property="og:locale" content="{{ config('seo.locale') }}">
<meta property="og:site_name" content="{{ $brand }}">
<meta property="og:title" content="{{ $fullTitle }}">
<meta property="og:description" content="{{ $description }}">
<meta property="og:url" content="{{ $canonical }}">
<meta property="og:image" content="{{ $ogImage }}">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $fullTitle }}">
<meta name="twitter:description" content="{{ $description }}">
<meta name="twitter:image" content="{{ $ogImage }}">
@if (config('seo.twitter_handle'))
    <meta name="twitter:site" content="{{ config('seo.twitter_handle') }}">
@endif

@stack('structured_data')
