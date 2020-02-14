<div class="@if($carousel) glide__slide swiper-slide @endif VerticalBookCard__tinyBook jest-horizontallybookcard "  >
    <div class="VerticalBookCard__bookCover">
        <div class="BookCover__book  jest-book-cover" style="width:120px;height:196px">
            @include(env('THEME') . '.card.card-info', ['book' => $book])
            <a href="{{ route('book.show', ['alias'=> $book->id]) }}">
                @if($book->picture && file_exists($book->picture->File))
                <img width="120" height="196" src="{{ config('settings.file_path_book') }}{{ $book->picture->File }}" alt="{{ $book->Title }}" class="BookCover__bookImage" srcset="{{ config('settings.file_path_book') }}{{ $book->picture->File }}">
                @else
                <div class="card_cover" style="background: {{ RandomColor::one(array('luminosity'=>'random', 'hue'=>'random')) }}">
                    <span class="card_cover_author">{{ $book->authors->first()->FirstName }} {{ $book->authors->first()->LastName }}</span>
                    <span class="card_cover_book">{{ $book->Title }}</span>
                </div>
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
            @include(env('THEME') . '.card.card-authors', ['authors' => $book->authors])
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