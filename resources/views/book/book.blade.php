@if($books)
<div class="billetContainerNoOverflow">
    <div class="billetContainerWrapper">
        <a href="/sets/1099-glavnaya-novinki-biblioteki/">
            <div class="LandingContentContainer__title">
                <div class="title-2" data-gtm-vis-first-on-screen-10671871_40="1035">Новинки</div>
                <div class="LandingContentContainer__link"><span class="link LandingContentContainer__linkText">Все новинки</span><i class="shortArrow"></i></div>
            </div>
        </a>
        <p>Популярные и начинающие авторы, крупнейшие и нишевые издательства</p>
    </div>
    <div class="ContentCarousel__wrapper glide">
        <div data-glide-el="track" class="swiper-container glide__track swiper-container-horizontal swiper-container-free-mode">
            <div class="swiper-wrapper glide__slides" style="transform: translate3d(0px, 0px, 0px);">
                @foreach($books as $book)
                <div class="glide__slide VerticalBookCard__tinyBook swiper-slide jest-verticalbookcard">
                    <div class="VerticalBookCard__bookCover">
                        <div class="BookCover__book BookCover__-premium jest-book-cover" style="width:124px;height:196px">
                            <a href="{{ route('book.show', ['alias'=> $book->slug]) }}">
                                <img width="124" height="196" src="{{ $book->desc->book_img }}" alt="{{ $book->desc->book_img }}" class="BookCover__bookImage" srcset="{{ $book->desc->book_img }}">
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
                        <a class="VerticalBookCard__bookName" href="{{ route('book.show', ['alias'=> $book->slug]) }}">
                            <div>
                                <span width="0">
                                    <span>
                                        <span>{{ $book->book }}</span>
                                    </span>
                                    <span style="position:fixed;visibility:hidden;top:0;left:0">
                                        <span>…</span>
                                    </span>
                                </span>
                            </div>
                        </a>
                        <div class="VerticalBookCard__bookAuthorWrapper">
                            <a class="VerticalBookCard__bookAuthor" href="{{ route('book.show', ['alias'=> $book->slug]) }}">
                                <div>
                                    <span width="0">
                                        <span>
                                            <span>{{ $book->author->title }}</span>
                                        </span>
                                        <span style="position:fixed;visibility:hidden;top:0;left:0">
                                            <span>…</span>
                                        </span>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
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

<!-- <div class="cms-carousel-item col mb-4"
    data-groups='["all","category-comedy","category-thriller"]'>
    <div class="cms-grid-media mb-3">
        <a href="{{ route('book.show', ['alias'=> $book->slug]) }}">
            <img src="{{ $book->desc->book_img }}"
            class="attachment-shop_catalog size-shop_catalog wp-post-image"
            alt="{{ $book->book }}" /></a>
        </div>
        <div class="stars mb-1">
            <div class="star-rating-icon">
                @for($i = 1; $i<=5; $i++)
                @if($i <= (int) $book->averageRating)
                <i class="fas fa-star active"></i>
                @else
                <i class="fas fa-star"></i>
                @endif
                @endfor
            </div>
        </div>
        <div class="info-product">
            <a class="product-title"
            href="{{ route('book.show', ['alias'=> $book->slug]) }}">
            {{ $book->book }}</a>
            <p class="product-author">{{ $book->author->title }}</p>
        </div>
    </div> -->