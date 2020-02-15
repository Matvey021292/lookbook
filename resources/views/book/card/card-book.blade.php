<div class="@if($carousel) glide__slide swiper-slide @endif VerticalBookCard__tinyBook jest-verticalbookcard"  style="width:124px;">
    <div class="VerticalBookCard__bookCover">
        <div class="BookCover__book  jest-book-cover" style="width:120px;height:196px">
            @include(env('THEME') . '.card.card-info', ['book' => $book])
            @if($book->picture)
            <img width="120" height="196" src="{{ config('settings.file_path_book') }}{{ $book->picture->File }}" alt="{{ $book->Title }}" class="BookCover__bookImage" srcset="{{ config('settings.file_path_book') }}{{ $book->picture->File }}">
            @else
            <div class="card_cover" style="background: {{ RandomColor::one(array('luminosity'=>'random', 'hue'=>'random')) }}">
                <span class="card_cover_author">{{ $book->authors->first()->FirstName }} {{ $book->authors->first()->LastName }}</span>
                <span class="card_cover_book">{{ $book->Title }}</span>
            </div>
            @endif
            <a class="card_link" href="{{ route('book.show', ['alias'=> $book->id]) }}"></a>
        </div>
    </div>
    <div class="VerticalBookCard__bookInfo">
        @include(env('THEME') . '.rating', ['items'=>$book,'book' => $book])
        <a class="VerticalBookCard__bookName cart-light-sm mt-1" href="{{ route('book.show', ['alias'=> $book->id]) }}">
            <span>{{ $book->Title }}</span>
        </a>
        @if($author)
        @include(env('THEME') . '.card.card-authors', ['authors' => $book->authors])
        @endif
    </div>
</div>

