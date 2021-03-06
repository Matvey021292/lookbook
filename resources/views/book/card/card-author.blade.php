<div class="glide__slide VerticalBookCard__tinyBook swiper-slide jest-verticalbookcard">
    <div class="VerticalBookCard__bookCover">
        <div class="BookCover__book BookCover__isAudioBook jest-book-cover" style="width:124px;height:124px">
            <a href="{{ route('author.show', ['alias' => $author->id]) }}">
                @if($author->desc && $author->desc->image && file_exists($author->desc->image))
                <img
                src="{{$author->desc->image}}"
                class="attachment-shop_catalog size-shop_catalog wp-post-image"
                alt="{{ $author->title }}">
                @else
                <img
                src="http://placehold.it/124x124"
                class="attachment-shop_catalog size-shop_catalog wp-post-image"
                alt="{{ $author->title }}">
                @endif
            </a>
        </div>
    </div>
    <div class="VerticalBookCard__bookInfo mt-1">
        <a class="VerticalBookCard__bookName cart-light-sm" href="{{ route('author.show', ['alias' => $author->id]) }}">
            <span>{{ $author->title }}</span>
        </a>
    </div>
</div>