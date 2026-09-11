@extends('layouts.app')

@section('title', 'Impresszum | ' . config('seo.brand'))
@section('meta_description', 'Impresszum – ' . config('seo.brand') . ', ' . config('seo.alternate_name') . ', Dunaújváros.')
@section('robots', 'noindex, follow')

@section('content')
    <section class="section bg-surface-alt" aria-labelledby="impresszum-cim">
        <div class="container-site max-w-3xl">
            <div class="deco-bar"></div>
            <h1 id="impresszum-cim" class="heading-1">Impresszum</h1>

            <div class="about-panel mt-8 space-y-4 text-body text-text-muted">
                <p><strong class="text-primary">Szolgáltató neve:</strong> {{ config('seo.brand') }} ({{ config('seo.alternate_name') }})</p>
                <p><strong class="text-primary">Székhely:</strong> {{ config('seo.address') }}</p>
                @if (config('seo.phone'))
                    <p><strong class="text-primary">Telefon:</strong> {{ config('seo.phone') }}</p>
                @endif
                @if (config('seo.email'))
                    <p><strong class="text-primary">E-mail:</strong> <a href="mailto:{{ config('seo.email') }}" class="text-primary hover:underline">{{ config('seo.email') }}</a></p>
                @endif
            </div>

            <div class="about-panel mt-6 space-y-4 text-body text-text-muted">
                <h2 class="heading-3 text-primary">Tárhelyszolgáltató adatai</h2>
                <p><strong class="text-primary">Név:</strong> Romix Webműhely Kft.</p>
                <p><strong class="text-primary">Telephely:</strong> 7020 Dunaföldvár, Dézsma sor 17.</p>
                <p><strong class="text-primary">Adószám:</strong> 25824641-2-17</p>
                <p><strong class="text-primary">EU adószám:</strong> HU25824641</p>
                <p><strong class="text-primary">E-mail:</strong> <a href="mailto:info@romix.hu" class="text-primary hover:underline">info@romix.hu</a></p>
                <p><strong class="text-primary">Tel.:</strong> <a href="tel:+36302158796" class="text-primary hover:underline">+36 30 215-8796</a></p>
            </div>
        </div>
    </section>
@endsection
