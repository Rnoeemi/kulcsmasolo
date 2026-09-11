<div
    id="cookie-banner"
    class="cookie-banner"
    role="dialog"
    aria-labelledby="cookie-banner-title"
    aria-describedby="cookie-banner-text"
    hidden
>
    <div class="cookie-banner__inner">
        <div class="cookie-banner__copy">
            <p id="cookie-banner-title" class="cookie-banner__title">Sütik használata</p>
            <p id="cookie-banner-text" class="cookie-banner__text">
                Az oldal a látogatottság méréséhez Google Analytics sütiket használ.
                Részletek az
                <a href="{{ route('adatvedelem') }}#sutik" class="cookie-banner__link">adatvédelmi tájékoztatóban</a>.
            </p>
        </div>
        <div class="cookie-banner__actions">
            <button type="button" class="cookie-banner__btn cookie-banner__btn--ghost" data-cookie-consent="declined">
                Elutasítom
            </button>
            <button type="button" class="cookie-banner__btn cookie-banner__btn--primary" data-cookie-consent="accepted">
                Elfogadom
            </button>
        </div>
    </div>
</div>
