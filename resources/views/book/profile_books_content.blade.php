@if(!$books->isEmpty())
<div class="billetContainerNoOverflow" id="mybook">
    <div class="billetContainerWrapper">
        <div class="LandingContentContainer__title">
            <div class="section-title">  {{__('Мои книги')}}   </div>
        </div>
    </div>
    @if(count($books) > 7)
    <div class="ContentCarousel__wrapper glide">
        <div data-glide-el="track"  class="swiper-container glide__track swiper-container-horizontal swiper-container-free-mode">
            <div class="swiper-wrapper glide__slides">
                @foreach($books as $book)
                @include(env('THEME') . '.card.card-book', ['items'=>$book,'book' => $book, 'carousel' => true, 'author' => false])
                @endforeach
            </div>
        </div>
    </div>
    @else
    <div class="ContentCarousel__wrapper ">
        <div class="swiper-container  swiper-container-horizontal swiper-container-free-mode">
            <div class="swiper-wrapper">
                @foreach($books as $book)
                @include(env('THEME') . '.card.card-book', ['items'=>$book,'book' => $book, 'carousel' => false, 'author' => false])
                @endforeach
            </div>
        </div>
    </div>
    @endif
</div>
@endif