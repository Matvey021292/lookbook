 <div class="@if($carousel) glide__slide swiper-slide @endif VerticalBookCard__tinyBook jest-verticalbookcard"  style="width:124px;">
    <div class="VerticalBookCard__bookCover">
        <div class="BookCover__book  jest-book-cover" style="width:120px;height:196px">
            <a href="{{ route('book.show', ['alias'=> $book->id]) }}">
                <img width="120" height="196" src="{!! $book->desc->book_img !!}" alt="{!! $book->book !!}" class="BookCover__bookImage" srcset="{!! $book->desc->book_img !!}">
            </a>
        </div>
    </div>
    <div class="VerticalBookCard__bookInfo">
            @include(env('THEME') . '.rating', ['items'=>$book,'book' => $book])
        <a class="VerticalBookCard__bookName" href="{{ route('book.show', ['alias'=> $book->id]) }}">
            <span>{!! $book->book !!}</span>
        </a>
        <div class="VerticalBookCard__bookAuthorWrapper">
            <a class="VerticalBookCard__bookAuthor" 
            href="{{ route('author.show', ['alias'=> $book->author->id]) }}">
                <span>{{ $book->author->title }}</span>
            </a>
        </div>
    </div>
</div>