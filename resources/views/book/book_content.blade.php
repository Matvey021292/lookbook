@if($book)
<div>
    <div class="BookPageHeaderContent__cover">
        <div class="BookPageHeaderContent__coverBackground">
            <div class="BookPageHeaderContent__coverBackgroundImage">
                <img width="320" height="120" 
                src="{{ $book->desc->book_img }}" 
                alt="{{ $book->book }}" 
                srcset="{{ $book->desc->book_img }}">
            </div>
        </div>
        <div class="BookPageHeaderContent__coverContent">
            <div class="BookPageHeaderContent__coverInformation">
                <h1 class="BookPageHeaderContent__coverTitle">
                    <span>{{ $book->book }}</span>
                </h1>
                <div class="BookAuthor__coverAuthor">
                    <div class="BookAuthor__authorList">
                        <div class="BookAuthor__authorName">
                            @include(env('THEME') . '.card-book-authors', ['items'=>$book,'book' => $book])
                        </div>
                        <div class="BookAuthor__authorName">
                            @include(env('THEME') . '.card-book-translate', ['items'=>$book,'book' => $book])
                        </div>
                    </div>
                </div>
            </div>
            <div class="BookPageHeaderContent__coverBlockImage">
                <div class="BookCoverImage__coverImageWrapper">
                    <img width="256" height="426" 
                    src="{{ $book->desc->book_img }}" 
                    alt="{{ $book->book }}" 
                    class="BookCoverImage__coverImage BookCoverImage__coverImageText" 
                    srcset="{{ $book->desc->book_img }}">
                </div>
            </div>
        </div>
    </div>
    <div class="themeWhite">
        <div class="BookPageHeaderContent__bookContent">
            <div class="BookPageHeaderContent__bookInformation">
                <div class="BookPageHeaderContent__bookInformationRating">
                    <div class="BookPageHeaderContent__bookRating" itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">
                        <meta itemprop="ratingCount" content="1091">
                        <meta itemprop="ratingValue" content="4.37">
                        <meta itemprop="bestRating" content="5">
                        <meta itemprop="worstRating" content="0">
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
        </div>
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
                                        {{-- @foreach($book->format as $format)
                                        <li>
                                            <a class="download_file Button__primaryButton Button__primaryButton_min" href="/uploads/file/{{ $format->link }}/{{ $format->slug}}">fb2</a>
                                        </li>
                                        <li>
                                            <a data-format='epub' class="download_file Button__primaryButton Button__primaryButton_min" href="/uploads/file/{{ $format->link }}/{{ str_replace('.fb2.zip' , '.epub', $format->slug)}}"">EBUB</a>
                                        </li>
                                        <li>
                                            <a data-format='mobi' class="download_file Button__primaryButton Button__primaryButton_min" href="/uploads/file/{{ $format->link }}/{{ str_replace('.fb2.zip' , '.mobi', $format->slug)}}">MOBI</a>
                                        </li>
                                        @endforeach --}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
                <div class="BookDetailAnnotation__descriptionWrapper">
                    <h2>О книге</h2>
                    <p> {!!  $book->desc->book_desc !!}</p>
                </div>
                <div class="BookPageHeaderContent__bookUserRating jest-user-rating">
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
                            <input type="hidden" name="book_id" value="{{$book->id}}">
                        </div>
                    </div>
                    <div class="BookPageHeaderContent__bookUserRatingText">Оцените книгу</div>
                </div>
            </div>
            @if(collect($book->getBookRelationship)->isNotEmpty())
            <div class="BookGenresThemes__genresThemes">
                <div class="BookGenresThemes__genresThemesSection">
                    <h3>Жанры</h3>
                    <ul class="BookGenresThemes__itemList">
                        @foreach ($book->getBookRelationship as $category)
                        <li class="BookGenresThemes__listItem">
                            <a href="{{ route('category.show', ['alias' => $category->slug]) }}">
                                <div class="TagLabel__brown" style="max-width: unset;">{{$category->category}}</div>
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

@else
<h1>Книги не найдено</h1>
@endif