<div class="@if($carousel) glide__slide swiper-slide @endif VerticalBookCard__tinyBook jest-verticalbookcard"  style="width:124px;">
    <div class="VerticalBookCard__bookCover">
        <div class="BookCover__book  jest-book-cover" style="width:120px;height:196px">
            <a href="{{ route('book.show', ['alias'=> $book->id]) }}">
                @if($book->desc)
                <img width="120" height="196" src="{!! $book->desc->book_img !!}" alt="{!! $book->book !!}" class="BookCover__bookImage" srcset="{!! $book->desc->book_img !!}">
                @endif
            </a>
        </div>
    </div>
    <div class="VerticalBookCard__bookInfo">
        @include(env('THEME') . '.rating', ['items'=>$book,'book' => $book])
        <a class="VerticalBookCard__bookName cart-light-sm mt-1" href="{{ route('book.show', ['alias'=> $book->id]) }}">
            <span>{!! $book->book !!}</span>
        </a>
        @if($author)
        {{-- @foreach($book->authors()->first() as $author) --}}
        <div class="VerticalBookCard__bookAuthorWrapper">
            <a class="VerticalBookCard__bookAuthor"  href="{{ route('author.show', ['alias'=> $book->authors()->first()->id]) }}">
                <span>{{ $book->authors()->first()->title }}</span> 
            </a>
        </div>
        {{-- @endforeach --}}
        @endif 
    </div>
</div>

