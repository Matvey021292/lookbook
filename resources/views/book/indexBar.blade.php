@if($authors)
<div class="billetContainerNoOverflow">
    <div class="billetContainerWrapper">
        <div class="LandingContentContainer__title d-flex-center">
            <div class="section-title">Авторы</div>
            <div class="LandingContentContainer__link">
                <a href="/authors"><span class="link LandingContentContainer__linkText">посмотеть всех авторов</span><i class="fas fa-angle-right"></i></a>
            </div>
        </div>
    </div>
    <div class="ContentCarousel__wrapper glide">
        <div data-glide-el="track" class="swiper-container glide__track swiper-container-horizontal swiper-container-free-mode">
            <div class="swiper-wrapper glide__slides" style="transform: translate3d(0px, 0px, 0px);">
                @foreach($authors as $author)
                @include(env('THEME') . '.card.card-author', ['items'=>$author, 'author' => $author, 'carousel' => true])
                @endforeach
            </div>
        </div>
        @include(env('THEME') . '.custom.card-custom')
    </div>
</div>
@endif