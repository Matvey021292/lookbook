@if($books)
<div class="billetContainerNoOverflow">
    <div class="billetContainerWrapper">
        <a href="javascript:void(0)">
            <div class="LandingContentContainer__title">
                <div class="title-2">Новинки</div>
                <div class="LandingContentContainer__link">
                    <span class="link LandingContentContainer__linkText">Все новинки</span><i class="shortArrow"></i>
                </div>
            </div>
        </a>
        <p>Популярные и начинающие авторы, крупнейшие и нишевые издательства</p>
    </div>
    <div class="ContentCarousel__wrapper glide">
        <div data-glide-el="track" class="swiper-container glide__track swiper-container-horizontal swiper-container-free-mode">
            <div class="swiper-wrapper glide__slides">
                @foreach($books as $book)
                    @include(env('THEME') . '.card-book', ['items'=>$book,'book' => $book, 'carousel' => true])
                @endforeach
            </div>
        </div>
        <div class="glide__arrows" data-glide-el="controls">
            <div class="ContentCarousel__buttonPrev  glide__arrow glide__arrow--left" data-glide-dir="<">
                <span class="arrowLeft"></span>
            </div>
            <div class="ContentCarousel__buttonNext glide__arrow glide__arrow--right" data-glide-dir=">">
                <span class="arrowRight"></span>
            </div>
        </div>
    </div>
</div>
@endif