@props([
    'title' => 'Gyakori kérdések',
    'headingId' => 'gyik-cim',
    'centered' => false,
])

<section {{ $attributes->class(['section section-alt']) }} aria-labelledby="{{ $headingId }}">
    <div @class(['container-site', 'section-header' => $centered, 'max-w-6xl' => ! $centered])>
        <div @class(['deco-bar', 'deco-bar--center' => $centered])></div>
        <h2 id="{{ $headingId }}" class="heading-2">{{ $title }}</h2>
        @if ($centered)
            <p class="text-lead mx-auto mt-4 max-w-2xl text-center">
                Válaszok a leggyakoribb kérdésekre kulcsmásolás, gravírozás, élezés és cipőjavítás témában.
            </p>
        @endif

        <div class="faq-grid mt-10">
            @foreach (config('seo.faqs') as $faq)
                <article class="faq-card">
                    <h3 class="faq-card__question">{{ $faq['question'] }}</h3>
                    <p class="faq-card__answer">{{ $faq['answer'] }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>
