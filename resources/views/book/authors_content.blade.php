@if($authors)
<div class=" billetContainerNoOverflow vc_column-inner">
    <div class="wpb_wrapper">
        <div class="billetContainerWrapper">
            <div class="d-inline-flex">
                <div class="section-title">Авторы</div>
            </div>
        </div>
        <div class="AuthorList__authorList row  ContentCarousel__wrapper">
            @foreach($authors as $author)
                @include(env('THEME') . '.card.card-author', ['author' => $author])
            @endforeach
        </div>
        <div class="ContextPagination__contextPagination">
            {{ $authors->links() }}
        </div>
    </div>
</div>
@endif

