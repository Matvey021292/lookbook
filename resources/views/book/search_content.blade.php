<p class="mb-2">Поиск запросу «{{request()->get('query')}}»</p>
@if(isset($search->books))
<div class="container">
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner vc_custom_1504607702805">
            <div class="wpb_wrapper">
                <div class="heading-3 clearfix">
                    <h2 class="section-title">Книги</h2>
                    
                </div>
                <div class="ContentCarousel__wrapper">
                    <div data-glide-el="track" class="swiper-container  swiper-container-horizontal swiper-container-free-mode">
                        <div class="swiper-wrapper row-3">
                            @foreach($search->books as $book)
                            @include(
                            env('THEME') . '.card.card-book-horizontally', 
                            ['items'=>$book,
                            'book' => $book, 
                            'carousel' => false, 
                            'desc' => true]
                            )
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    <br>
    @if(isset($search->authors))
    <div class="heading-3 ">
        <h2 class="section-title">Авторы</h2>
    </div>
    <div class="ContentCarousel__wrapper">
        <div class="AuthorList__authorList w-100 row">
            @foreach($search->authors as $author)
                @include(env('THEME') . '.card.card-author', ['author' => $author])
            @endforeach
        </div>  
    </div>
    @endif