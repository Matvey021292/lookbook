
@if($book)
<div>
    <div class="BookPageHeaderContent__cover billetContainerNoOverflow">
        <div class="BookPageHeaderContent__coverContent">
            <div class="BookPageHeaderContent__coverInformation">
                <h1 class="BookPageHeaderContent__coverTitle">
                    <span>{{ $book->Title }}</span>
                </h1>
                <div class="BookAuthor__coverAuthor">
                    <div class="BookAuthor__authorList">
                        <div class="BookAuthor__authorName">
                            @include(env('THEME') . '.card.card-book-authors', ['items'=>$book,'book' => $book])
                        </div>
                    </div>
                </div>
                <div class="BookPageHeaderContent__bookInformationRating">
                    <div class="BookPageHeaderContent__bookRating" itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">
                        <div class="BookRating__bookRating">
                            <div class="BookRating__rating">
                                @if($book->averageRating)
                                <div class="BookRating__ratingInner" style="width: {{(100/5) * $book->averageRating}}px;"></div>
                                @endif
                            </div>
                        </div>
                        <span class="BookPageHeaderContent__bookRatingCount">
                            {{number_format((float)$book->averageRating, 2, '.', '')}}
                        </span>
                    </div>
                </div>
                <div class="BookPageHeaderContent__booksButtonBlock isForAnonymous ml-0">
                    @if($book->desc)
                    <div data-toggle="collapse" class="pl-0 AuthorDetailHeader__container billetContainerNoOverflow AuthorDetailView__containerAbout p-0">
                        <div class="BookDetailAnnotation__descriptionWrapper">
                            <p> {!!  $book->desc->Body !!}</p>
                        </div>
                        <span class="toggle-icon"><i class="fas fa-angle-down"></i></span> 
                    </div>
                    @endif
                    <div class="BookGenresThemes__genresThemes BookDetailAnnotation__meta">
                        <div class="BookGenresThemes__genresThemesSection">
                            <h3 class="section-title">Подробная информация</h3>
                            <div class="ContentCarousel__wrapper BookDetailAnnotation__metaBlock">
                                @include(env('THEME') . '.card.card-book-translate', ['items'=>$book,'book' => $book])
                                @if($book->Year)
                                <p><strong>Год издания: </strong><span>{{$book->Year}}</span></p>
                                @endif
                                @if($book->Lang)
                                @if($book->Lang == 'ru')
                                <p><strong>Язык: </strong><span>Русский</span></p>
                                @endif
                                @endif
                                @if($book->FileAuthor)
                                <p><strong>Издательство: </strong><a href="{{ route('publisher.show', ['alias' => $book->FileAuthor]) }}"><span>{{$book->FileAuthor}}</span></a></p>
                                @endif
                                @if($book->Pages)
                                <p><strong>Количество страниц: </strong><span>{{$book->Pages}}</span></p>
                                @endif
                                @if($book->Chars)
                                <p><strong>Объем: </strong><span>{{$book->Chars}} тыс. знаков</span></p>
                                @endif
                                @if($book->Time)
                                <p><strong>Дата поступления:  </strong><span>{{ date('d.m.Y', strtotime($book->Time)) }}</span></p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="BookPageHeaderContent__coverBlockImage">
                <div class="BookCoverImage__coverImageWrapper">
                    @if($book->picture )
                    <img width="256" height="426" 
                    src="{{config('settings.file_path_book')}}{{ $book->picture->File }}" 
                    alt="{{ $book->Title }}" 
                    class="BookCoverImage__coverImage BookCoverImage__coverImageText" 
                    srcset="{{config('settings.file_path_book')}}{{ $book->picture->File }}">
                    @else
                    <div class="card_cover card_cover_xs" style="background: {{ RandomColor::one(array('luminosity'=>'random', 'hue'=>'random')) }}">
                        <span class="card_cover_author">{{ $book->authors->first()->FirstName }} {{ $book->authors->first()->LastName }}</span>
                        <span class="card_cover_book">{{ $book->Title }}</span>
                    </div>
                    @endif
                </div>
                <div class="Rating__ratingStar-wrapper  billetContainerNoOverflow center-xs mb-0 ">
                    <div class="Rating__ratingStar center-xs m-0">
                        <div class="BookPageHeaderContent__bookUserRatingText mb-1">Оцените книгу</div>
                        <div class="stars">
                            {{ csrf_field() }}
                            <div class="star-rating"  @guest onclick="showMessageNotAuth(event, 'Для оценивания книги необходимо зарегистрироваться');" @endif >
                                @for($i = 5; $i>=1; $i--)
                                @if($i >= (int)$book->averageRating)
                                <input onclick="submit(this)" type="radio" checked id="{{$i}}-stars" name="star" value="{{$i}}"/>
                                <label for="{{$i}}-stars" class="star"><i class="fas fa-star"></i></label>
                                @else
                                <input onclick="submit(this)" type="radio" id="{{$i}}-stars" name="star" value="{{$i}}"/>
                                <label for="{{$i}}-stars" class="star"><i class="fas fa-star"></i></label>
                                @endif
                                @endfor
                            </div>
                            <div class="error_message"></div>
                            <input type="hidden" name="book_id" value="{{$book->id}}">
                            <input type="hidden" name="book_format" value="{{$book->FileType}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="billetContainerNoOverflow bg-white">
        <div class="row  row-container">
            <div class="col-md-12">
                @if(!$book->category->isEmpty())
                <div class="BookGenresThemes__genresThemes">
                    <div class="BookGenresThemes__genresThemesSection">
                        <h3 class="section-title">Темы</h3>
                        <ul class="BookGenresThemes__itemList">
                            @foreach ($book->category as $category)
                            
                            <li class="BookGenresThemes__listItem">
                                <a href="{{ route('category.show', ['alias' => $category->id]) }}">
                                    <div class="TagLabel__brown" style="max-width: unset;">{{$category->Title}}</div>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endif
                @if(!$book->genre->isEmpty())
                <div class="BookGenresThemes__genresThemes">
                    <div class="BookGenresThemes__genresThemesSection">
                        <h3 class="section-title">Жанр</h3>
                        <ul class="BookGenresThemes__itemList">
                            @foreach ($book->genre as $genre)
                            <li class="BookGenresThemes__listItem">
                                <a href="{{ route('genre.show', ['alias' => $genre->id]) }}">
                                    <div class="TagLabel__brown" style="max-width: unset;">{{$genre->Title}}</div>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>    
<div class="BookReviewListView__content">
    @comments(['model' => $book])
</div>
<script type="text/javascript">
    
    let book_id = {{ $book->id }};
    let route_booklist_add = "{{route('bookListAdd')}}";
    let route_booklist_remove = "{{route('bookListRemove')}}";
    let download_route = "{{ route('downloadFile') }}";
    
    
    async function submit(e) {
        let user = {
            'star': e.value, 
            'id': document.querySelector('input[name="book_id"]').value
        };
        
        let response = await fetch("{{route('postStar', $book->id)}}", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json;charset=utf-8',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify(user)
        });
        
        
        let result = await response.json();
        alert('Спасибо! Вы успешно поставили оценку для выбраной книги.')
    }
    
    window.addEventListener('load',function(){
        
        let data = {
            'file': book_id,
            'format': document.querySelector('input[name="book_format"]').value,
            'init': true
        }
        requestPostData(download_route, data)
        .then(e => {
            if(e.status == 'success'){
                window.open(e.message)
            }else{
                console.log(download_route + ':' + e.message)
            }
        });
    })
    
</script>
@if($series)
<div class="billetContainerNoOverflow">
    <div class="billetContainerWrapper">
        <div class="LandingContentContainer__title d-flex-center">
            <div class="section-title">{{  __('Книги серии')}} «{{$series->Title}}»</div>
        </div>
    </div>
    @if(count($series->book) > 6)
    <div class="ContentCarousel__wrapper glide">
        <div data-glide-el="track"  class="swiper-container glide__track swiper-container-horizontal swiper-container-free-mode">
            <div class="swiper-wrapper glide__slides">
                @foreach($series->book as $book)
                @include(env('THEME') . '.card.card-book', ['items'=>$book,'book' => $book, 'carousel' => true, 'author' => true])
                @endforeach
            </div>
        </div>
        @include(env('THEME') . '.custom.card-custom')
    </div>
    @else
    <div class="ContentCarousel__wrapper ">
        <div class="swiper-container  swiper-container-horizontal swiper-container-free-mode">
            <div class="swiper-wrapper">
                @foreach($series->book as $book)
                @include(env('THEME') . '.card.card-book', ['items'=>$book,'book' => $book, 'carousel' => false, 'author' => true])
                @endforeach
            </div>
        </div>
    </div>
    @endif
</div>
@endif
@else
<h1>Книги не найдено</h1>
@endif