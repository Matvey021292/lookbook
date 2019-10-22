@if(count($sliders) > 0)
<div class="billetContainerNoOverflow">
    <div class="billetContainerWrapper">
        <a href="/sets/1099-glavnaya-novinki-biblioteki/">
            <div class="LandingContentContainer__title">
                <div class="title-2" data-gtm-vis-first-on-screen-10671871_40="1035">Новинки и бестселлеры</div>
                <div class="LandingContentContainer__link"><span class="link LandingContentContainer__linkText">Все новинки</span><i class="shortArrow"></i></div>
            </div>
        </a>
        <p>Популярные и начинающие авторы, крупнейшие и нишевые издательства</p>
    </div>
    <div class="ContentCarousel__wrapper glide">
        <div data-glide-el="track" class="swiper-container glide__track swiper-container-horizontal swiper-container-free-mode">
            <div class="swiper-wrapper glide__slides" style="transform: translate3d(0px, 0px, 0px);">
                @foreach($sliders as $slider)
                <div class="glide__slide VerticalBookCard__tinyBook swiper-slide jest-verticalbookcard">
                    <div class="VerticalBookCard__bookCover">
                        <div class="BookCover__book BookCover__-premium jest-book-cover" style="width:124px;height:196px">
                            <a href="{{ route('book.show', ['alias'=> $slider->slug]) }}">
                                <img width="124" height="196" src="{!! $slider->desc->book_img !!}" alt="{!! $slider->book !!}" class="BookCover__bookImage" srcset="https://i4.mybook.io/c/248x392/book_covers/95/53/955358f4-f529-40fe-b261-0676e3a1965c.jpg 2x">
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
                        <a class="VerticalBookCard__bookName" href="{{ route('book.show', ['alias'=> $slider->slug]) }}">
                            <div>
                                <span width="0">
                                    <span>
                                        <span>{!! $slider->book !!}</span>
                                    </span>
                                    <span style="position:fixed;visibility:hidden;top:0;left:0">
                                        <span>…</span>
                                    </span>
                                </span>
                            </div>
                        </a>
                        <div class="VerticalBookCard__bookAuthorWrapper">
                            <a class="VerticalBookCard__bookAuthor" href="{{ route('author.show', ['alias'=> $slider->author->slug]) }}">
                                <div>
                                    <span width="0">
                                        <span>
                                            <span>{{ $slider->author->title }}</span>
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
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
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