@if($books_view)
<div class="billetContainerNoOverflow">
    <div class="billetContainerWrapper">
        <a href="/sets/1099-glavnaya-novinki-biblioteki/">
            <div class="LandingContentContainer__title">
                <div class="title-2" data-gtm-vis-first-on-screen-10671871_40="1035">Просмотренные книги</div>
                <div class="LandingContentContainer__link"><span class="link LandingContentContainer__linkText">Все новинки</span><i class="shortArrow"></i></div>
            </div>
        </a>
        <p>Популярные и начинающие авторы, крупнейшие и нишевые издательства</p>
    </div>
    <div class="ContentCarousel__wrapper glide">
        <div class="swiper-container glide__track swiper-container-horizontal swiper-container-free-mode">
            <div class="swiper-wrapper " style="transform: translate3d(0px, 0px, 0px);">
                @foreach($books_view as $book)
                <div class="VerticalBookCard__tinyBook swiper-slide jest-verticalbookcard">
                    <div class="VerticalBookCard__bookCover">
                        <div class="BookCover__book BookCover__-premium jest-book-cover" style="width:124px;height:196px">
                            <a href="{{ route('book.show', ['alias' => $book['slug']]) }}">
                                <img width="124" height="196" src="{{ $book['book_img'] }}" alt="{{ $book['book_img'] }}" class="BookCover__bookImage" srcset="{{ $book['book_img'] }}">
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
                            <div>
                                <span width="0">
                                    <span>
                                        <span>{{ $book['book'] }}</span>
                                    </span>
                                    <span style="position:fixed;visibility:hidden;top:0;left:0">
                                        <span>…</span>
                                    </span>
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
                <!--  <div class="item-popuplar">
                    <div class="thumbnal-popuplar">
                        <a href="{{ route('book.show', ['alias' => $book['slug']]) }}">
                            <img  src="{{ $book['book_img'] }}"
                            class="attachment-shop_catalog_image_size size-shop_catalog_image_size wp-post-image"
                            alt="{{ $book['book'] }}">
                        </a>
                    </div>
                    <div class="content-popuplar">
                        <a class="popular-title"
                        href="{{ route('book.show', ['alias' => $book['slug']]) }}">{{ $book['book'] }}</a>
                    </div>
                </div> -->
                @endforeach
            </div>
        </div>
    </div>
</div>
@endif
