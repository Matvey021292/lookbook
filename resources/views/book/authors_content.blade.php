@if($authors)
<div class="wrapper-row">
    <div class="AuthorDetailView__container billetContainerNoOverflow">
        <div class="AuthorDetailListTitle__container">
            <h2 class="section-title">
                Авторы
            </h2>
        </div>
        <div class="ContentCarousel__wrapper ">
            <div class="swiper-container  swiper-container-horizontal swizper-container-free-mode">
                <div class="swiper-wrapper row">
                    @foreach($authors as $author)
                    <div class="col-md-4">
                        @include(env('THEME') . '.card.card-author', ['author' => $author])
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="row center-xs mt-5">
        {{ $authors->links() }}
    </div>
</div>
@endif

