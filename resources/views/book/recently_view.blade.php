@if($books_view)
<div class="billetContainerNoOverflow">
    <div class="billetContainerWrapper">
        <a href="javascript:void(0)">
            <div class="LandingContentContainer__title">
                <div class="title-2">Просмотренные книги</div>
            </div>
        </a>
    </div>
    @if(count($books_view) > 7)
    <div class="ContentCarousel__wrapper glide">
        <div data-glide-el="track"  class="swiper-container glide__track swiper-container-horizontal swiper-container-free-mode">
            <div class="swiper-wrapper glide__slides">
                @foreach($books_view as $book)
                @include(env('THEME') . '.card-book', ['items'=>$book,'book' => $book, 'carousel' => true])
                @endforeach
            </div>
        </div>
    </div>
    @else
    <div class="ContentCarousel__wrapper ">
        <div class="swiper-container  swiper-container-horizontal swiper-container-free-mode">
            <div class="swiper-wrapper">
                @foreach($books_view as $book)
                @include(env('THEME') . '.card-book', ['items'=>$book,'book' => $book, 'carousel' => false])
                @endforeach
            </div>
        </div>
    </div>
    @endif
</div>
@endif
