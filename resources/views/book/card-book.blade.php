 <div class="@if($carousel) glide__slide swiper-slide @endif VerticalBookCard__tinyBook jest-verticalbookcard"  style="width:124px;">
    <div class="VerticalBookCard__bookCover">
        <div class="BookCover__book  jest-book-cover" style="width:124px;height:196px">
            @if($book->desc)
            <a href="{{ route('book.show', ['alias'=> $book->ID]) }}">
                <img width="124" height="196" src="{!! $book->desc->book_img !!}" alt="{!! $book->Title !!}" class="BookCover__bookImage" srcset="{!! $book->desc->book_img !!}">
            </a>
            @endif
        </div>
    </div>
    <div class="VerticalBookCard__bookInfo">
            @include(env('THEME') . '.rating', ['items'=>$book,'book' => $book])
        <a class="VerticalBookCard__bookName" href="{{ route('book.show', ['alias'=> $book->ID]) }}">
            <span>{!! $book->Title !!}</span>
        </a>
        @if($book->author)
        <div class="VerticalBookCard__bookAuthorWrapper">
            <a class="VerticalBookCard__bookAuthor" 
            href="{{ route('author.show', ['alias'=> $book->author->ID]) }}">
                <span>{{ $book->author->title }}</span>
            </a>
        </div>
        @endif
    </div>
</div>