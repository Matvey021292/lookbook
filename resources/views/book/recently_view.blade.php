@if($books_view)
<div class="billetContainerNoOverflow">
    <div class="billetContainerWrapper">
        <a href="javascript:void(0)">
            <div class="LandingContentContainer__title">
                <div class="title-2">Просмотренные книги</div>
                <div class="LandingContentContainer__link">
                    <span class="link LandingContentContainer__linkText">Все новинки</span><i class="shortArrow"></i>
                </div>
            </div>
        </a>
    </div>
    @if(count($books_view) > 7)
    <div class="ContentCarousel__wrapper glide">
        <div data-glide-el="track"  class="swiper-container glide__track swiper-container-horizontal swiper-container-free-mode">
            <div class="swiper-wrapper glide__slides">
                @foreach($books_view as $book)
                <div class="glide__slide VerticalBookCard__tinyBook  jest-verticalbookcard">
                    <div class="VerticalBookCard__bookCover">
                        <div class="BookCover__book  jest-book-cover" style="width:124px;height:196px">
                            <a href="{{ route('book.show', ['alias' => $book['slug']]) }}">
                                <img width="124" height="196" 
                                src="{{ $book['book_img'] }}" alt="{{ $book['book_img'] }}" 
                                class="BookCover__bookImage" 
                                srcset="{{ $book['book_img'] }}">
                            </a>
                        </div>
                    </div>
                    <div class="VerticalBookCard__bookInfo">
                        <div class="VerticalBookCard__rating">
                            <div class="BookRating__bookRating">
                                <div class="BookRating__rating BookRating__-tiny">
                                    <div class="BookRating__ratingInner isTiny" style="width:68px"></div>
                                </div>
                            </div>
                        </div>
                        <a class="VerticalBookCard__bookName" href="{{ route('book.show', ['alias'=> $book['slug']]) }}">
                            {{ $book['book'] }}
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @else
    <div class="ContentCarousel__wrapper ">
            <div class="swiper-container  swiper-container-horizontal swiper-container-free-mode">
                <div class="swiper-wrapper">
                    @foreach($books_view as $book)
                    <div class=" VerticalBookCard__tinyBook  jest-verticalbookcard" style="width:124px;">
                        <div class="VerticalBookCard__bookCover">
                            <div class="BookCover__book  jest-book-cover" style="width:124px;height:196px">
                                <a href="{{ route('book.show', ['alias' => $book['slug']]) }}">
                                    <img width="124" height="196" 
                                    src="{{ $book['book_img'] }}" alt="{{ $book['book_img'] }}" 
                                    class="BookCover__bookImage" 
                                    srcset="{{ $book['book_img'] }}">
                                </a>
                            </div>
                        </div>
                        <div class="VerticalBookCard__bookInfo">
                            <div class="VerticalBookCard__rating">
                                <div class="BookRating__bookRating">
                                    <div class="BookRating__rating BookRating__-tiny">
                                        <div class="BookRating__ratingInner isTiny" style="width:68px"></div>
                                    </div>
                                </div>
                            </div>
                            <a class="VerticalBookCard__bookName" href="{{ route('book.show', ['alias'=> $book['slug']]) }}">
                                {{ $book['book'] }}
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
</div>
@endif
