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
            </div>
            <div class="BookPageHeaderContent__coverBlockImage">
                <div class="BookCoverImage__coverImageWrapper">
                    @if($book->picture)
                    <img width="256" height="426" 
                    src="{{config('settings.file_path_book')}}{{ $book->picture->File }}" 
                    alt="{{ $book->Title }}" 
                    class="BookCoverImage__coverImage BookCoverImage__coverImageText" 
                    srcset="{{config('settings.file_path_book')}}{{ $book->picture->File }}">
                    @else
                    <img width="256" height="426" 
                    src="{{config('settings.file_path_book')}}190x288.jpg" 
                    alt="{{ $book->Title }}" 
                    class="BookCoverImage__coverImage BookCoverImage__coverImageText" 
                    srcset="{{config('settings.file_path_book')}}190x288.jpg">
                    @endif
                </div>
            </div>
        </div>
    </div>
    
    <div class="BookPageHeaderContent__booksButtonBlock isForAnonymous">
        <div data-toggle="collapse" class="AuthorDetailHeader__container billetContainerNoOverflow AuthorDetailView__containerAbout">
            <div class="BookDetailAnnotation__descriptionWrapper">
                @if($book->desc)
                <p> {!!  $book->desc->Body !!}</p>
                @endif
            </div>
            <span class="toggle-icon"><i class="fas fa-angle-down"></i></span> 
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
                                <a href="{{ route('category.show', ['alias' => $genre->id]) }}">
                                    <div class="TagLabel__brown" style="max-width: unset;">{{$genre->Title}}</div>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endif
            </div>
            <div class="col-md-12">
                <div class="BookGenresThemes__genresThemes BookDetailAnnotation__meta">
                    <div class="BookGenresThemes__genresThemesSection">
                        <h3 class="section-title">Подробная информация</h3>
                        <div class="ContentCarousel__wrapper BookDetailAnnotation__metaBlock">
                            <div class="BookAuthor__authorName">
                                @include(env('THEME') . '.card.card-book-translate', ['items'=>$book,'book' => $book])
                            </div>
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
                            <p><strong>Дата поступления:  </strong><span>{{ date('d F Y', strtotime($book->Time)) }}</span></p>
                            @endif
                            {{-- Дата поступления: --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 row">
                <div class="Rating__ratingStar">
                    <div class="stars">
                        <code>
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
                        </code>
                        <div class="error_message"></div>
                        <input type="hidden" name="book_id" value="{{$book->ID}}">
                    </div>
                </div>
                {{-- <div class="BookPageHeaderContent__bookUserRatingText">Оцените книгу</div> --}}
            </div>
        </div>
    </div>
    
    
    {{-- <div class="themeWhite">
        <div class="BookPageHeaderContent__bookContent">
            <div class="BookPageHeaderContent__booksButtons isForAnonymous">
                <div class="BookPageHeaderContent__booksButtonBlock isForAnonymous">
                    <div class="ButtonsBlock__testBlocks ButtonsBlock__testBlocksTestA">
                        <div class="ButtonsBlock__registrationForm ButtonsBlock__readBtnUnknownLogin">
                            <div class="jest-bookpage-auth-form">
                                <div class="Form__form">
                                    <ul class="Form__form-btn">
                                        <li>
                                            <a class="download_file Button__primaryButton Button__primaryButton_min" href="{{ route('book.show', ['alias' => $book->id]) }}/read">Читать</a>
                                        </li>
                                        @foreach($book->format as $format)
                                        <li>
                                            <a class="download_file Button__primaryButton Button__primaryButton_min" href="/uploads/file/{{ $format->link }}/{{ $format->slug}}">fb2</a>
                                        </li>
                                        <li>
                                            <a data-format='epub' class="download_file Button__primaryButton Button__primaryButton_min" href="/uploads/file/{{ $format->link }}/{{ str_replace('.fb2.zip' , '.epub', $format->slug)}}"">EBUB</a>
                                        </li>
                                        <li>
                                            <a data-format='mobi' class="download_file Button__primaryButton Button__primaryButton_min" href="/uploads/file/{{ $format->link }}/{{ str_replace('.fb2.zip' , '.mobi', $format->slug)}}">MOBI</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div> --}}

<script type="text/javascript">
    
    var book_id = {{ $book->id }};
    var route_booklist_add = "{{route('bookListAdd')}}";
    var route_booklist_remove = "{{route('bookListRemove')}}";
    var download_route = "{{route('downloadFile')}}";
    
    
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
    
</script>

@guest
@else
@if(!$book->booklist)
<button class="BookStatusChangePopup__buttonFunctional add_book_my_list">Добавить книгу в мой список</button>
@else
<button class="BookStatusChangePopup__buttonFunctional remove_book_my_list">Удалить книгу из моего списка</button>
@endif
@endif
<div class="themeWhite">
    <div class="BookDetailView__bookPageContent">
        <div class="BookDetailAnnotation__annotationBlock">
            <div class="BookDetailAnnotation__content">
                
            </div>
            
        </div>
    </div>
</div>

@else
<h1>Книги не найдено</h1>
@endif