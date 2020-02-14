@if($categories)
<div class="wrapper-row">
    @foreach($categories as $category)
    @if(!$category->book->isEmpty())
    <div class="AuthorDetailView__container billetContainerNoOverflow">
        <div class="AuthorDetailListTitle__container">
            <h2 class="section-title">
                <a href="{{ route('categories.show', ['alias'=> $category->id]) }}">{{ $category->Title }}</a>
            </h2>
        </div>
        <div class="ContentCarousel__wrapper glide">
            <div data-glide-el="track" class="swiper-container glide__track swiper-container-horizontal swizper-container-free-mode">
                <div class="swiper-wrapper glide__slides">
                    @foreach ($category->book()->take(7)->get() as $book)
                    @include(env('THEME') . '.card.card-book', ['items'=>$book,'book' => $book, 'carousel' => true, 'author' => true])
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @endif
    @endforeach
    <div class="row center-xs mt-5">
        {{ $categories->links() }}
    </div>
</div>
@endif