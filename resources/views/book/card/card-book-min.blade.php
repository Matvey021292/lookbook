<div class="jest-horizontallybookcard card-min">
    <div class="VerticalBookCard__bookCover pb-1">
        <div class="BookCover__book  jest-book-cover" style="width:60px;height:98px">
            @include(env('THEME') . '.card.card-info', ['book' => $book])
            <a href="{{ route('book.show', ['alias'=> $book->id]) }}">
                @if($book->picture)
                    <img width="60" height="98" src="{{ config('settings.file_path_book') }}{{ $book->picture->File }}" alt="{{ $book->Title }}" class="BookCover__bookImage" srcset="{{ config('settings.file_path_book') }}{{ $book->picture->File }}">
                @else
                    <div class="card_cover" style="background: {{ RandomColor::one(array('luminosity'=>'random', 'hue'=>'random')) }}">
                        @if($book->authors->first() && $book->authors->first()->LastName)
                            <span class="card_cover_author">{{ $book->authors->first()->FirstName }} {{ $book->authors->first()->LastName }}</span>
                        @endif
                        <span class="card_cover_book">{{ $book->Title }}</span>
                    </div>
                @endif
            </a>
        </div>
    </div>
    <div class="VerticalBookCard__bookInfo">
        <a class="VerticalBookCard__bookName cart-light-sm mt-1" href="{{ route('book.show', ['alias'=> $book->id]) }}">
            <span>{{ $book->Title }}</span>
        </a>
        @if($book->authors)
            @include(env('THEME') . '.card.card-authors', ['authors' => $book->authors])
        @endif
        <div> <a href="" class="custom_btn">  читать  </a> </div>
    </div>
</div>
