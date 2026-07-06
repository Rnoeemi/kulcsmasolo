@props([
    'src' => null,
    'alt' => '',
    'left' => false,
    'wide' => false,
    'contain' => false,
    'hero' => false,
    'flat' => false,
])

<div {{ $attributes->class([
    'deco-frame',
    'deco-frame--left' => $left,
    'deco-frame--wide' => $wide,
    'deco-frame--contain' => $contain,
    'deco-frame--hero' => $hero,
    'deco-frame--flat' => $flat,
]) }}>
    @unless ($flat)
        <div class="deco-frame__accent" aria-hidden="true"></div>
    @endunless
    <div class="deco-frame__media">
        @if ($src)
            <img src="{{ $src }}" alt="{{ $alt }}" class="deco-frame__img" loading="lazy" decoding="async">
        @else
            <div class="deco-frame__placeholder" aria-hidden="true"></div>
        @endif
    </div>
</div>
