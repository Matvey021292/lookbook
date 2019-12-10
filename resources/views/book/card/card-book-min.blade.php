<li class="BookList__item jest-book-card-item">
    <div class="ContextBookCard__book">
        <div class="ContextBookCard__bookCover">
            <div class="BookCover__book jest-book-cover" style="width: 88px; height: 128px;">
                <a href="{{ route('book.show', ['alias'=> $book->id]) }}">
                    <img width="88" height="128" 
                    src="{!! $book->desc->book_img !!}" 
                    alt="{{$book->book }}" 
                    class="BookCover__bookImage" 
                    srcset="{!! $book->desc->book_img !!}">
                </a>
            </div>
        </div>
        <div class="ContextBookCard__bookDetail">
            <div class="ContextBookCard__bookData">
                <div class="ContextBookCard__bookTitle">
                <a href="{{ route('book.show', ['alias'=> $book->id]) }}">
                        <span>{{$book->book }}</span>
                    </a>
                </div>
                <a class="ContextBookCard__bookAuthor" href="{{ route('book.show', ['alias'=> $book->id]) }}">
                    <div>
                        <span>{{$book->author->title}}</span>
                    </div>
                </a>
            </div>
            <div class="ContextBookCard__bookTools">
                <div class="ContextBookCard__bookRating">
                    <div class="BookRating__bookRating">
                        <div class="BookRating__rating BookRating__-tiny">
                            <div class="BookRating__ratingInner isTiny" style="width: 72.6px;"></div>
                        </div>
                        {{-- <div class="BookRating__ratingValue isTiny">4,5</div> --}}
                    </div>
                </div>
               
            </div>
        </div>
    </div>
</li>