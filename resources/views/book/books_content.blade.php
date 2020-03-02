@if($books)
<div class="wrapper-row wrapper-section">
    <div class="AuthorDetailView__container billetContainerNoOverflow">
        <div class="AuthorDetailListTitle__container">
            <h2 class="section-title">
                {{__('Все книги')}} @if(request()->get('query')) {{__('по запросу')}} «{{request()->get('query')}}» @endif
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
    <div data-action='book' id="more" class="row center-xs mt-5">
        {{$books->appends(request()->input())->links()}}
    </div>
    <div class="loader"></div>
</div>
@else
<div class="container">
    <div class="row">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner vc_custom_1504607702805">
                <div class="wpb_wrapper">
                    <div class="heading-2">
                        <div class="wrap-heading">
                            <h2 style=";color: #888a92;" class="heading">{{__('Записей не сушествует')}}</h2>
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
