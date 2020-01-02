<div class="glide__slide VerticalBookCard__tinyBook swiper-slide jest-verticalbookcard">
    <div class="VerticalBookCard__bookCover">
        <div class="BookCover__book BookCover__isAudioBook jest-book-cover" style="width:124px;height:124px">
            <a href="{{ route('author.show', ['alias' => $author->id]) }}">
                @if($author->picture)
                <img alt="{{ $author->FirstName }} {{ $author->LastName }}"
                class="attachment-shop_catalog size-shop_catalog wp-post-image"
                src="{{ config('settings.file_path_author') }}{{ $author->picture->File }}" 
                srcset="{{ config('settings.file_path_author') }}{{ $author->picture->File }}">
                @else
                <img width="120" height="196" src="{{ config('settings.file_path_book') }}/190x288.jpg" 
                alt="{{ $author->FirstName }} {{ $author->LastName }}" class="attachment-shop_catalog size-shop_catalog wp-post-image"  srcset="{{ config('settings.file_path_book') }}/190x288.jpg">
                @endif
            </a>
        </div>
    </div>
    <div class="VerticalBookCard__bookInfo mt-1">
        <a class="VerticalBookCard__bookName cart-light-sm" href="{{ route('author.show', ['alias' => $author->id]) }}">
            <span>{{ $author->FirstName }} {{ $author->LastName }}</span>
        </a>
    </div>
</div>