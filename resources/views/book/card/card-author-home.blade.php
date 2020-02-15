<div class="glide__slide VerticalBookCard__tinyBook swiper-slide">
    <div class="VerticalBookCard__bookCover">
        <div class="BookCover__book BookCover__isAudioBook jest-book-cover" style="width:124px;height:124px">
            @if($author->picture )
            <img src="{{ config('settings.file_path_author') }}{{$author->picture->File}}" class=" card_wrapper_image" alt="{{ $author->title }}">
            @else
            <div class="card_cover" style="background: {{ RandomColor::one(array('luminosity'=>'random', 'hue'=>'random')) }}">
                <span class="card_cover_author">{{ $author->FirstName }} {{ $author->LastName }}</span>
            </div>
            @endif
            <a class="card_link" href="{{ route('author.show', ['alias' => $author->id]) }}"></a>
        </div>
    </div>
    <div class="VerticalBookCard__bookInfo mt-1">
        <a class="VerticalBookCard__bookName cart-light-sm" href="{{ route('author.show', ['alias' => $author->id]) }}">
            <span class="link">{!! $author->FirstName !!} {!! $author->LastName !!}</span>
        </a>
    </div>
</div>