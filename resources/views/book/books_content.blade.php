@if($books)
<div class="single-slider">
    <div class="billetContainerNoOverflow vc_column-inner">
        <div class="wpb_wrapper">
            <div class="billetContainerWrapper">
                <div class="d-inline-flex">
                    <div class="section-title">Все бесплатные книги</div>
                    <span class="section-counter">[ {{ $books->total() }} ]</span>
                </div>
            </div>
            <div class="ContentCarousel__wrapper glide" data-slide-count="3">
                <div data-glide-el="track" class="swiper-container glide__track swiper-container-horizontal swiper-container-free-mode">
                    <div class="swiper-wrapper glide__slides">
                        @foreach($books as $book)
                        @include(env('THEME') . '.card.card-book-horizontally', ['items'=>$book,'book' => $book, 'carousel' => true, 'desc' => true])
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
</div>

@else
<div class="container">
    <div class="row">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner vc_custom_1504607702805">
                <div class="wpb_wrapper">
                    <div class="heading-2">
                        <div class="wrap-heading">
                            <h2 style=";color: #888a92;" class="heading">Записей не сушествует</h2>
                        </div>
                    </div>
                    <div class="vc_empty_space" style="height: 10px">
                        <span class="vc_empty_space_inner"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif