@if($books)
<div class="wrapper-row">
    <div class="AuthorDetailView__container billetContainerNoOverflow">
        <div class="AuthorDetailListTitle__container">
            <h2 class="section-title">
                <a href="{{ route('genre.show', ['alias'=> $category->id]) }}">{{ $category->Title }}</a>
            </h2>
        </div>
        <div class="ContentCarousel__wrapper glide">
            <div data-glide-el="track" class="swiper-container glide__track swiper-container-horizontal swizper-container-free-mode">
                <div class="swiper-wrapper glide__slides">
                    @foreach ($books as $book)
                    @include(env('THEME') . '.card.card-book', ['items'=>$book,'book' => $book, 'carousel' => true, 'author' => true])
                    @endforeach
                </div>
            </div>
            @include(env('THEME') . '.custom.card-custom')
        </div>
    </div>
</div>
<div class="row center-xs mt-5">
    {{ $books->links() }}
</div>
@endif