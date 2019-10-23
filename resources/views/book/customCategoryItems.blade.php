<br><br><br>
@if(!$items->isEmpty())
@foreach($items as $k => $item)
<div class="AuthorDetailView__container">
    <div class="AuthorDetailListTitle__container">
        @if(!$item->hasParent())
        <h2>{{ $item->title }}</h2>
        @elseif($item->hasParent() && $item->hasChildren())
        <h2>{{ $item->title }}</h2>
        @else
        <p class="cursor-p" data-toggle="collapse" data-target="#collapse{{ $item->id }}"
            aria-expanded="true"
            aria-controls="collapse{{ $item->id }}"><i class="fa fa-angle-down mr-2"></i>{{ $item->title }}
        </p>
        @endif
    </div>
    <div class="ContentCarousel__wrapper glide">
        <div data-glide-el="track" class="swiper-container glide__track swiper-container-horizontal swiper-container-free-mode">
            <div class="swiper-wrapper glide__slides" style="transform: translate3d(0px, 0px, 0px);">
                @foreach($books as $book)
                @if($book->category_id == $item->id)
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
                    </div>
                 </div>
                @else
                @endif
                @endforeach
            </div>
        </div>
    </div>
    @if($item->hasChildren())
    <div>
        @include(env('THEME') . '.customCategoryItems', ['items'=>$item->children()])
    </div>
    @endif
</div>
@endforeach
@else
<div class="AuthorDetailView__container">
    <div class="ContentCarousel__wrapper">
        <div  class="swiper-container swiper-container-horizontal swiper-container-free-mode">
            <div class="swiper-wrapper" >
                @foreach($books as $book)
                    @include(env('THEME') . '.card-book', ['items'=>$book, 'book' => $book, 'carousel' => false])
                @endforeach
            </div>
        </div>
    </div>
</div>
@endif
