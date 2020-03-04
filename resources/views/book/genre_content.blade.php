@if($genre)
<div class="wrapper-row">
    <div class="AuthorDetailView__container billetContainerNoOverflow">
        <div class="AuthorDetailListTitle__container">
            <h2 class="section-title">
                {{ $genre->Title }}
            </h2>
        </div>
        <div class="ContentCarousel__wrapper">
            <div class="swiper-container swiper-container-horizontal swizper-container-free-mode">
                <div class="swiper-wrapper row">
                    @foreach ($books as $book)
                    <div class="col-md-6">
                        @include(env('THEME') . '.card.card-book-horizontally', ['items'=>$book,'book' => $book, 'carousel' => false, 'desc' => true])
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<div  data-action='genre' data-alias="{{$genre->id}}" id="more" class="row center-xs mt-5">
    {{ $books->links() }}
</div>
<div class="loader"></div>

@endif
