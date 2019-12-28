@if($books)
<div class="billetContainerNoOverflow">
    <div class="billetContainerWrapper">
        <div class="LandingContentContainer__title d-flex-center">
            <div class="section-title">Последние поступления</div>
            <div class="LandingContentContainer__link">
                <a href="/books" class=" row center-xs middle-xs"> <span class="link LandingContentContainer__linkText">посмотреть все книги</span><i class="fas fa-angle-right"></i></a>
            </div>
        </div>
    </div>
    <div class="ContentCarousel__wrapper glide">
        <div data-glide-el="track" class="swiper-container glide__track swiper-container-horizontal swiper-container-free-mode">
            <div class="swiper-wrapper glide__slides">
                @foreach($books as $book)
                @include(env('THEME') . '.card.card-book', ['items'=>$book,'book' => $book, 'carousel' => true, 'author' => true])
                @endforeach
            </div>
        </div>
        @include(env('THEME') . '.custom.card-custom')
    </div>
</div>

@endif