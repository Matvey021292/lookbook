<div class="wrapper-row">
    @foreach($tranlate_items as $item)
    @if(isset($item['category']))
    <div class="AuthorDetailView__container billetContainerNoOverflow">
        <div class="AuthorDetailListTitle__container">
            <h2 class="section-title">{{ $item['category']->Title }}</h2>
        </div>
        <div class="ContentCarousel__wrapper glide">
            <div data-glide-el="track" class="swiper-container glide__track swiper-container-horizontal swizper-container-free-mode">
                <div class="swiper-wrapper glide__slides">
                    @foreach ($item['books'] as $book)
                    @include(env('THEME') . '.card.card-book', ['items'=>$book,'book' => $book, 'carousel' => true, 'author' => false])
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
    @else
    <div class="AuthorDetailView__container billetContainerNoOverflow">
        <div class="AuthorDetailListTitle__container">
            <h2 class="section-title">{{ __('Вне авторских серий') }}</h2>
        </div>
        <div class="ContentCarousel__wrapper glide">
            <div data-glide-el="track" class="swiper-container glide__track swiper-container-horizontal swizper-container-free-mode">
                <div class="swiper-wrapper glide__slides">
                    @foreach ($item['books'] as $book)
                    @include(env('THEME') . '.card.card-book', ['items'=>$book,'book' => $book, 'carousel' => true, 'author' => false])
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
    @endforeach
</div>