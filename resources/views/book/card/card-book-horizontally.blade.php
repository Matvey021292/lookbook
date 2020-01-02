<div class="@if($carousel) glide__slide swiper-slide @endif VerticalBookCard__tinyBook jest-horizontallybookcard "  style="width:124px;">
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
        <a class="VerticalBookCard__bookName cart-light-md mt-1 mb-1" href="{{ route('book.show', ['alias'=> $book->id]) }}">
            <span>{{ $book->Title }}</span>
        </a>
        @include(env('THEME') . '.rating', ['items'=>$book,'book' => $book])
        @if($book->authors)
        @foreach($book->authors as $author)
        <div class="VerticalBookCard__bookAuthorWrapper">
            <a class="VerticalBookCard__bookAuthor" href="{{ route('author.show', ['alias'=> $author->id]) }}"><span>{{ $author->FirstName }} {{ $author->LastName }}</span></a>
        </div>
        @endforeach
        @endif
        
        @if($desc)
        @if($book->desc)
        <div class="ContextBookCardLong__bookDescription jest-context-book-card-long">
            {{ str_limit(strip_tags($book->desc->Body), 100) }}
            <a href="{{ route('book.show', ['alias' => $book->id]) }}"></a>
        </div>
        @endif
        @endif
    </div>
</div>