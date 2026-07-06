@props([
    'image',
    'position' => 'right',
    'fade' => 'alt',
    'opacity' => null,
])

@php
    $positions = [
        'left' => '0% 55%',
        'center' => '50% 45%',
        'right' => '100% 55%',
    ];

    $fades = [
        'alt' => 'var(--color-surface-alt)',
        'muted' => 'var(--color-surface-muted)',
        'surface' => 'var(--color-surface)',
    ];
@endphp

<div
    {{ $attributes->class([
        'section-bg__visual',
        'section-bg__visual--center' => $position === 'center',
        'section-bg__visual--left' => $position === 'left',
    ]) }}
    aria-hidden="true"
    style="
        --section-bg-image: url('{{ asset('storage/images/bg/'.$image) }}');
        --section-bg-position: {{ $positions[$position] ?? $positions['right'] }};
        --section-bg-fade: {{ $fades[$fade] ?? $fades['alt'] }};
        @if ($opacity) --section-bg-opacity: {{ $opacity }}; @endif
    "
></div>
