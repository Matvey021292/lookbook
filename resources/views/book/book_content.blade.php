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
                        <span>
                            <a class="BookAuthor__authorName" 
                            href="{{ route('author.show', ['alias' => $book->author->slug]) }}">{{ $book->author->title }}</a>
                        </span>
                    </div>
                    <a class="BookAuthor__link" href="{{ route('author.show', ['alias' => $book->author->slug]) }}">
                        <i class="shortArrowWhite"></i>
                    </a>
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
                                        @foreach($book->format as $format)
                                        @if($format->slug != 'more')
                                        <li>
                                            <a  onclick='downloadFile(event)' data-slug='{{ $format->slug }}' class="Button__primaryButton Button__primaryButton_min" href="{{ $format->link }}">{{$format->format}}</a>
                                        </li>
                                        @else
                                        <li>
                                            <a class="Button__primaryButton Button__primaryButton_min" href="{{ route('content.show', ['alias' => $format->id]) }}">Читать</a>
                                        </li>
                                        @endif
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
</div>

<script type="text/javascript">
    
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
        // console.log(result)
        
    }
    
    async function downloadFile(e) {
        e.preventDefault();
        let data = {
            'file': e.target.href, 
            'slug':e.target.getAttribute('data-slug')
        };
        let response = await fetch("{{route('downloadFile')}}", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json;charset=utf-8',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify(data)
        });
        let result = await response.json();
        console.log(result);
        
    }
    
    
</script>
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