<div class="glide__slide VerticalBookCard__tinyBook swiper-slide jest-verticalbookcard">
    <div class="VerticalBookCard__bookCover">
        <div class="BookCover__book BookCover__isAudioBook jest-book-cover" style="width:124px;height:124px">
            <a href="{{ route('author.show', ['alias' => $author->id]) }}">
                @if($author->picture && file_exists($author->picture))
                <img src="{{ config('settings.file_path_author') }}{{$author->picture->File}}" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="{{ $author->title }}">
                @else
                <div class="card_cover" style="background: {{ RandomColor::one(array('luminosity'=>'random', 'hue'=>'random')) }}">
                    <span class="card_cover_author">{{ $author->FirstName }} {{ $author->LastName }}</span>
                </div>
                @endif
            </a>
        </div>
    </div>
    <div class="VerticalBookCard__bookInfo mt-1">
        <a class="VerticalBookCard__bookName cart-light-sm" href="{{ route('author.show', ['alias' => $author->id]) }}">
            <span class="link">{!! $author->FirstName !!} {!! $author->LastName !!}</span>
        </a>
    </div>
</div>