@if($sliders)
<div class="billetContainerNoOverflow">
    <div class="billetContainerWrapper">
        <div class="LandingContentContainer__title  d-flex-center">
            <div class="section-title">Наиболее подходящие</div>
            <div class="LandingContentContainer__link">
                <a href="/books" class=" row center-xs middle-xs"> <span class="link LandingContentContainer__linkText">посмотреть все книги</span><i class="fas fa-angle-right"></i></a>
            </div>
        </div>
    </div>
    <div class="ContentCarousel__wrapper glide" data-slide-count='4'>
        <div data-glide-el="track" class="swiper-container glide__track swiper-container-horizontal swiper-container-free-mode">
            <div class="swiper-wrapper glide__slides">
                @foreach($sliders as $slider)
                @include(env('THEME') . '.card.card-book-horizontally', ['items'=>$slider, 'book' => $slider, 'carousel' => true, 'desc' => false])
                @endforeach
            </div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        </div>
        @include(env('THEME') . '.custom.card-custom')
    </div>
</div>
@endif