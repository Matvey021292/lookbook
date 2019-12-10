<div class="@if($carousel) glide__slide swiper-slide @endif VerticalBookCard__tinyBook jest-horizontallybookcard "  style="width:124px;">
    <div class="VerticalBookCard__bookCover">
        <div class="BookCover__book  jest-book-cover" style="width:120px;height:196px">
            <a href="{{ route('book.show', ['alias'=> $book->id]) }}">
                <img width="120" height="196" src="{!! $book->desc->book_img !!}" alt="{!! $book->book !!}" class="BookCover__bookImage" srcset="{!! $book->desc->book_img !!}">
            </a>
        </div>
    </div>
    <div class="VerticalBookCard__bookInfo">
        <a class="VerticalBookCard__bookName cart-light-md mt-1 mb-1" href="{{ route('book.show', ['alias'=> $book->id]) }}">
            <span>{!! $book->book !!}</span>
        </a>
        @include(env('THEME') . '.rating', ['items'=>$book,'book' => $book])
        <div class="VerticalBookCard__bookAuthorWrapper">
            <a class="VerticalBookCard__bookAuthor" 
            href="{{ route('author.show', ['alias'=> $book->author->id]) }}">
            <span>{{ $book->author->title }}</span>
        </a>
    </div>
    @if($desc)
    <div class="ContextBookCardLong__bookDescription jest-context-book-card-long">
        {{ str_limit(strip_tags($book->desc->book_desc), 100) }}
        <a href="{{ route('book.show', ['alias' => $book->id]) }}"><span class="ContextBookCardLong__link">⟩</span></a>
    </div>
    @endif
</div>
</div>