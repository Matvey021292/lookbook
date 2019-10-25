 <div class="@if($carousel) glide__slide swiper-slide @endif VerticalBookCard__tinyBook jest-verticalbookcard"  style="width:124px;">
    <div class="VerticalBookCard__bookCover">
        <div class="BookCover__book  jest-book-cover" style="width:124px;height:196px">
            <a href="{{ route('book.show', ['alias'=> $book->slug]) }}">
                <img width="124" height="196" src="{!! $book->desc->book_img !!}" alt="{!! $book->book !!}" class="BookCover__bookImage" srcset="{!! $book->desc->book_img !!}">
            </a>
        </div>
    </div>
    <div class="VerticalBookCard__bookInfo">
        <div class="VerticalBookCard__rating">
            <div class="BookRating__bookRating">
                <div class="BookRating__rating BookRating__-tiny">
                    @if($book->averageRating)
                    <div class="BookRating__ratingInner isTiny" style="width:{{(80/5) * $book->averageRating}}px"></div> 
                    @endif
                </div>
            </div>
        </div>
       
        <a class="VerticalBookCard__bookName" href="{{ route('book.show', ['alias'=> $book->slug]) }}">
            <span>{!! $book->book !!}</span>
        </a>
        <div class="VerticalBookCard__bookAuthorWrapper">
            <a class="VerticalBookCard__bookAuthor" 
            href="{{ route('author.show', ['alias'=> $book->author->slug]) }}">
                <span>{{ $book->author->title }}</span>
            </a>
        </div>
    </div>
</div>