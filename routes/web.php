<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/kulcsmasolas', [PageController::class, 'kulcsmasolas'])->name('kulcsmasolas');
Route::get('/cipojavitas', [PageController::class, 'cipojavitas'])->name('cipojavitas');
Route::get('/egyeb-szolgaltatasok', [PageController::class, 'egyebSzolgaltatasok'])->name('egyeb-szolgaltatasok');
Route::get('/rolunk', [PageController::class, 'rolunk'])->name('rolunk');
Route::get('/kapcsolat', [PageController::class, 'kapcsolat'])->name('kapcsolat');
Route::post('/kapcsolat', [ContactController::class, 'store'])
    ->middleware('throttle:5,1')
    ->name('kapcsolat.send');

Route::get('/sitemap.xml', function () {
    $pages = [
        ['loc' => route('home'), 'priority' => '1.0', 'changefreq' => 'weekly'],
        ['loc' => route('kulcsmasolas'), 'priority' => '0.9', 'changefreq' => 'monthly'],
        ['loc' => route('cipojavitas'), 'priority' => '0.9', 'changefreq' => 'monthly'],
        ['loc' => route('egyeb-szolgaltatasok'), 'priority' => '0.8', 'changefreq' => 'monthly'],
        ['loc' => route('rolunk'), 'priority' => '0.7', 'changefreq' => 'monthly'],
        ['loc' => route('kapcsolat'), 'priority' => '0.8', 'changefreq' => 'monthly'],
    ];

    return response()->view('sitemap', ['pages' => $pages])
        ->header('Content-Type', 'application/xml');
})->name('sitemap');

Route::get('/robots.txt', function () {
    $sitemap = rtrim(config('seo.url'), '/') . '/sitemap.xml';

    return response("User-agent: *\nAllow: /\n\nSitemap: {$sitemap}\n", 200, [
        'Content-Type' => 'text/plain',
    ]);
})->name('robots');
