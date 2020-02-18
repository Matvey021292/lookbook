@if($books_view)
<div class="billetContainerNoOverflow">
    <div class="billetContainerWrapper">
            <div class="LandingContentContainer__title d-flex-center">
                <div class="section-title">Просмотренные книги</div>
            </div>
    </div>
    @if(count($books_view) > 7)
    <div class="ContentCarousel__wrapper glide">
        <div data-glide-el="track"  class="swiper-container glide__track swiper-container-horizontal swiper-container-free-mode">
            <div class="swiper-wrapper glide__slides">
                @foreach($books_view as $books)
                @include(env('THEME') . '.card.card-book', ['items'=>$books,'book' => $books, 'carousel' => true, 'author' => true])
                @endforeach
            </div>
        </div>
        @include(env('THEME') . '.custom.card-custom')
    </div>
    @else
    <div class="ContentCarousel__wrapper ">
        <div class="swiper-container  swiper-container-horizontal swiper-container-free-mode">
            <div class="swiper-wrapper">
                @foreach($books_view as $books)
                @include(env('THEME') . '.card.card-book', ['items'=>$books,'book' => $books, 'carousel' => false, 'author' => true])
                @endforeach
            </div>
        </div>
    </div>
    @endif
</div>
@endif
