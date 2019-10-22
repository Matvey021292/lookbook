@if($authors)
<div class="billetContainerNoOverflow">
    <div class="billetContainerWrapper">
        <a href="/sets/1099-glavnaya-novinki-biblioteki/">
            <div class="LandingContentContainer__title">
                <div class="title-2" data-gtm-vis-first-on-screen-10671871_40="1035">Авторы</div>
                <div class="LandingContentContainer__link"><span class="link LandingContentContainer__linkText">Все новинки</span><i class="shortArrow"></i></div>
            </div>
        </a>
        <p>Популярные и начинающие авторы, крупнейшие и нишевые издательства</p>
    </div>
    <div class="ContentCarousel__wrapper glide">
        <div data-glide-el="track" class="swiper-container glide__track swiper-container-horizontal swiper-container-free-mode">
            <div class="swiper-wrapper glide__slides" style="transform: translate3d(0px, 0px, 0px);">
                @foreach($authors as $author)
                <div class="glide__slide VerticalBookCard__tinyBook swiper-slide jest-verticalbookcard">
                    <div class="VerticalBookCard__bookCover">
                        <div class="BookCover__book BookCover__isAudioBook jest-book-cover" style="width:124px;height:124px">
                            <a href="{{ route('author.show', ['alias' => $author->slug]) }}">
                                @if($author->desc && $author->desc->image)
                                <img
                                src="{{$author->desc->image}}"
                                class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                alt="{{ $author->title }}">
                                @else
                                <img
                                src="{!! env('THEME').'/images/35x35.jpg' !!}"
                                class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                alt="{{ $author->title }}">
                                @endif
                            </a>
                        </div>
                    </div>
                    <div class="VerticalBookCard__bookInfo">
                        <div class="VerticalBookCard__rating">
                            <div class="BookRating__bookRating">
                                <div class="BookRating__rating BookRating__-tiny">
                                    <div class="BookRating__ratingInner isTiny" style="width:68.8px"></div>
                                </div>
                            </div>
                        </div>
                        <a class="VerticalBookCard__bookName" href="{{ route('author.show', ['alias' => $author->slug]) }}">
                            <div>
                                <span width="0">
                                    <span>
                                        <span>{{ $author->title }}</span>
                                    </span>
                                    <span style="position:fixed;visibility:hidden;top:0;left:0">
                                        <span>…</span>
                                    </span>
                                </span>
                            </div>
                        </a>
                        <!--   <div class="VerticalBookCard__bookAuthorWrapper">
                            <a class="VerticalBookCard__bookAuthor" href="/author/tatyana-ustinova/">
                                <div>
                                    <span width="0">
                                        <span>
                                            <span>Книг {!! count($author->book) !!}</span>
                                        </span>
                                        <span style="position:fixed;visibility:hidden;top:0;left:0">
                                            <span>…</span>
                                        </span>
                                    </span>
                                </div>
                            </a>
                        </div> -->
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
<!-- 
    <div class="col-md-3">
        <div class="bj-brs-author-item clearfix d-flex align-items-center mb-3">
            <div class="wrap-thumbnail">
                <a href="{{ route('author.show', ['alias' => $author->slug]) }}">
                    @if($author->desc && $author->desc->image)
                    <img
                    src="{{$author->desc->image}}"
                    class="attachment-shop_catalog size-shop_catalog wp-post-image"
                    alt="{{ $author->title }}">
                    @else
                    <img
                    src="{!! env('THEME').'/images/35x35.jpg' !!}"
                    class="attachment-shop_catalog size-shop_catalog wp-post-image"
                    alt="{{ $author->title }}">
                    @endif
                </a>
            </div>
            <div class="wrap-info pl-3">
                <a href="{{ route('author.show', ['alias' => $author->slug]) }}">{{ $author->title }}</a>
                <div class="bj-brs-author-count">Книг {!! count($author->book) !!}</div>
            </div>
        </div>
    </div> -->