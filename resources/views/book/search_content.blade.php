@if(isset($search['books']) ||  isset($search['authors']))
<div class="wrapper-row">
    <div class="AuthorDetailView__container billetContainerNoOverflow">
        <div class="AuthorDetailListTitle__container">
            <p>
                {{__('Поиск запросу')}} «{{request()->get('query')}}»
                <div>
                    @if(isset($search['books']))
                    <a href="{{ route('qsearch_book', ['query'=> request()->get('query')]) }}" class="TagLabel__brown">{{__('Книги')}} {{ count($search['books'])}}</a>
                    @endif
                    @if(isset($search['authors']))
                    <a href="{{ route('qsearch_author', ['query'=> request()->get('query')]) }}" class="TagLabel__brown">{{__('Авторы')}} {{ count($search['authors'])}}</a>
                    @endif
                </div>
            </p>
            
        </div>
        @if(isset($search['books']))
        <div class="AuthorDetailListTitle__container">
            <h2 class="section-title">
                <a href="{{ route('qsearch_book', ['query'=> request()->get('query')]) }}">{{__('Книги')}}</a>
            </h2>
        </div>
        <div class="ContentCarousel__wrapper ">
            <div class="swiper-container  swiper-container-horizontal swizper-container-free-mode">
                <div class="swiper-wrapper row">
                    @foreach($search['books'] as $key => $book)
                    @if($key >= Config::get('settings.simple_search')) @break @endif
                    <div class="col-md-6">
                        @include(env('THEME') . '.card.card-book-horizontally', ['items'=>$book, 'book' => $book,  'carousel' => false,  'desc' => true] )
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif
        <br>
        @if(isset($search['authors']))
        <div class="AuthorDetailListTitle__container">
            <h2 class="section-title">
                <a href="{{ route('qsearch_author', ['query'=> request()->get('query')]) }}">{{__('Авторы')}}</a>
            </h2>
        </div>
        <div class="ContentCarousel__wrapper ">
            <div class="swiper-container  swiper-container-horizontal swizper-container-free-mode">
                <div class="swiper-wrapper row">
                    @foreach($search['authors'] as $key => $author)
                    @if($key >= Config::get('settings.simple_search')) @break @endif
                    <div class="col-md-3">
                        @include(env('THEME') . '.card.card-author', ['author' => $author])
                    </div>
                    @endforeach
                </div>  
            </div>
        </div>
        @endif
    </div>
</div>
@else
@endif