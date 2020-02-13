<div class="wrapper-row">
    <div class="AuthorDetailView__container billetContainerNoOverflow">
        <div class="AuthorDetailListTitle__container">
            <p class="mb-2">Поиск запросу «{{request()->get('query')}}»</p>
        </div>
        @if(isset($search->books))
            <div class="AuthorDetailListTitle__container">
                <h2 class="section-title">Книги</h2>
            </div>
            <div class="ContentCarousel__wrapper ">
                <div class="swiper-container  swiper-container-horizontal swizper-container-free-mode">
                    <div class="swiper-wrapper row">
                        @foreach($search->books as $book)
                        <div class="col-md-6">
                            @include(env('THEME') . '.card.card-book-horizontally', ['items'=>$book, 'book' => $book,  'carousel' => false,  'desc' => true] )
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif
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
    </div>