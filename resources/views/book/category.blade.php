@if($content)
<div class="container">
    <div class="row">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner vc_custom_1504607702805">
                <div class="wpb_wrapper">
                    <div class="heading-2">
                        <div class="wrap-heading">
                            <h2 class="heading">{!! $category->category!!}</h2>
                        </div>
                    </div>
                    <ul class="BookList__items">
                        @foreach($content as $book)
                        <li class="BookList__item BookList__oneColsLayout jest-book-card-item">
                            <div class="ContextBookCardLong__book">
                                <div class="ContextBookCardLong__bookWrapper">
                                    <div class="ContextBookCardLong__bookCover">
                                        <div class="BookCover__book BookCover__isAudioBook jest-book-cover" style="width: 112px; height: 180px;">
                                            <a href="{{ route('book.show', ['alias' => $book->slug]) }}">
                                                <img width="112px" height="180px" 
                                                src="{{$book->desc->book_img}}" 
                                                alt="{{ $book->book }}" 
                                                srcset="{{$book->desc->book_img}}"></a>
                                            </div>
                                        </div>
                                        <div class="ContextBookCardLong__bookDetail">
                                            <div class="ContextBookCardLong__bookData">
                                                <div class="ContextBookCardLong__bookTitle">
                                                    <a href="{{ route('book.show', ['alias' => $book->slug]) }}">
                                                        <span>{{ $book->book }}</span>
                                                    </a>
                                                </div>
                                                <a class="ContextBookCardLong__bookAuthor" 
                                                href="{{ route('author.show', ['alias' => $book->author->slug]) }}">
                                                <div>
                                                    <span>{{ $book->author->title }}</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="ContextBookCardLong__bookTools">
                                            <div class="ContextBookCardLong__bookRating">
                                                <div class="BookRating__bookRating">
                                                    <div class="BookRating__rating BookRating__-tiny">
                                                        <div class="BookRating__ratingInner isTiny" style="width: 70.6px;"></div>
                                                    </div>
                                                    <div class="BookRating__ratingValue isTiny">4,4</div>
                                                </div>
                                            </div>
                                            
                                            <div class="ContextBookCardLong__subscriptionContainer">
                                                <div class="BtnSubscriptionIcon__premium">
                                                    <span class="SubscriptionIcon__subscriptionIcon themePremium BtnSubscriptionIcon__svg" 
                                                    style="width: 32px; height: 32px;">
                                                </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ContextBookCardLong__bookDescription jest-context-book-card-long">Использование огромных резервов, скрытых в подсознании каждого человека, позволяет решать самые сложные повседневные проблемы, когда логика оказывается бессильной. Разработанная автором этой книги программа поможет вам активизировать безграничные ресурсы собственного головного мозга, чтобы измени...
                                            <a href="{{ route('book.show', ['alias' => $book->slug]) }}"><span class="ContextBookCardLong__link">⟩</span></a></div>
                                    </div>
                                </div>
                                <div class="ContextBookCardLong__bookDescriptionMobile">
                                    Использование огромных резервов, скрытых в подсознании каждого человека, позволяет решать самые сложные повседневные проблемы, когда логика оказывается бессильной. Разработанная автором этой книги программа поможет вам активизировать безграничные ресурсы собственного головного мозга, чтобы измени...
                                    <a href="{{ route('book.show', ['alias' => $book->slug]) }}"><span class="ContextBookCardLong__link">⟩</span></a></div>
                            </div>
                        </li>
                        {{-- <div class="cs-sale-item col-xs-12 col-sm-4 col-md-3 col-lg-3 mb-4">
                            <div class="d-flex">
                                <div class="cms-grid-media">
                                    <a href="{{ route('book.show', ['alias' => '$book->slug']) }}">
                                        <img src="{{$book->desc->book_img}}"
                                        class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                        alt="{{ $book->book }}">
                                    </a>
                                </div>
                                <div class="info-product pl-2">
                                    <a class="product-title"
                                    href="{{ route('book.show', ['alias' => $book->slug]) }}">{{ $book->book }}</a>
                                    <a href="{{ route('author.show', ['alias' => $book->author->slug]) }}" class="product-author mt-1 mb-1">{{ $book->author->title }}</a>
                                    <div class="stars">
                                        <div class="star-rating-icon">
                                            @for($i = 1; $i<=5; $i++)
                                            @if($i <= (int) $book->averageRating)
                                            <i class="fas fa-star active"></i>
                                            @else
                                            <i class="fas fa-star"></i>
                                            @endif
                                            @endfor
                                        </div>
                                    </div>
                                    <div class="book_format">
                                        @foreach($book->format as $format)
                                        {{ $format->fomat }}
                                        @endforeach
                                    </div>
                                </div>
                                
                            </div>
                        </div> --}}
                        @endforeach
                    </ul>
                    <div class="row justify-content-center mt-5">
                        {{ $content->links() }}
                    </div>
                </div>
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
        