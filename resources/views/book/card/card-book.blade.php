<div class="@if($carousel) glide__slide swiper-slide @endif VerticalBookCard__tinyBook jest-verticalbookcard"  style="width:124px;">
    <div class="VerticalBookCard__bookCover">
        <div class="BookCover__book  jest-book-cover" style="width:120px;height:196px">
            <a href="{{ route('book.show', ['alias'=> $book->id]) }}">
                @if($book->picture)
                <img width="120" height="196" src="{{ config('settings.file_path_book') }}{{ $book->picture->File }}" alt="{{ $book->Title }}" class="BookCover__bookImage" srcset="{{ config('settings.file_path_book') }}{{ $book->picture->File }}">
                @else
                <img width="120" height="196" src="{{ config('settings.file_path_book') }}/190x288.jpg" alt="{{ $book->Title }}" class="BookCover__bookImage" srcset="{{ config('settings.file_path_book') }}/190x288.jpg">
                @endif
            </a>
        </div>
    </div>
    <div class="VerticalBookCard__bookInfo">
        @include(env('THEME') . '.rating', ['items'=>$book,'book' => $book])
        <a class="VerticalBookCard__bookName cart-light-sm mt-1" href="{{ route('book.show', ['alias'=> $book->id]) }}">
            <span>{{ $book->Title }}</span>
        </a>
        @if($author)
        @foreach($book->authors as $author)
        <div class="VerticalBookCard__bookAuthorWrapper">
            <a class="VerticalBookCard__bookAuthor"  href="{{ route('author.show', ['alias'=> $author->id]) }}">
                <span>{{ $author->FirstName }} {{ $author->LastName }}</span> 
            </a>
        </div>
        @endforeach
        @endif 
    </div>
</div>

