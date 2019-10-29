{{-- <li class="BookList__item BookList__oneColsLayout jest-book-card-item">
    <div class="ContextBookCardLong__book">
        <div class="ContextBookCardLong__bookWrapper">
            <div class="ContextBookCardLong__bookCover">
                <div class="BookCover__book jest-book-cover" style="width: 112px; height: 180px;">
                    <a href="{{ route('book.show', ['alias'=> $book->slug]) }}">
                        <img width="112" height="180" src="{{ $book->desc->book_img }}" alt="{{ $book->book }}" class="BookCover__bookImage" srcset="{{ $book->desc->book_img }}">
                    </a>
                </div>
            </div>
            <div class="ContextBookCardLong__bookDetail">
                <div class="ContextBookCardLong__bookData">
                    <div class="ContextBookCardLong__bookTitle">
                        <a href="{{ route('book.show', ['alias'=> $book->slug]) }}">
                            <span>{{ $book->book }}</span>
                        </a>
                    </div>
                    <a class="ContextBookCardLong__bookAuthor"
                    href="{{ route('author.show', ['alias'=> $book->author->slug]) }}">
                    <span>{{ $book->author->title }}</span>
                </a>
            </div>
            <div class="ContextBookCardLong__bookTools">
                <div class="ContextBookCardLong__bookRating">
                    <div class="BookRating__bookRating">
                        <div class="BookRating__rating BookRating__-tiny">
                            <div class="BookRating__ratingInner isTiny" style="width: 71.5px;"></div>
                        </div>
                        <div class="BookRating__ratingValue isTiny">4,5</div>
                    </div>
                </div>
                <div class="ContextBookCardLong__subscriptionContainer">
                    <div class="BtnSubscriptionIcon__free"><span class="SubscriptionIcon__subscriptionIcon themeFree BtnSubscriptionIcon__svg"></span></div>
                </div>
            </div>
            <div class="ContextBookCardLong__bookDescription jest-context-book-card-long">{{$book->desc->book_desc}}<a href="{{ route('book.show', ['alias'=> $book->slug]) }}"><span class="ContextBookCardLong__link">⟩</span></a></div>
        </div>
    </div>
</div>
</li> --}}

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
                    @include(env('THEME') . '.rating', ['items'=>$book,'book' => $book])
                    <div class="ContextBookCardLong__subscriptionContainer">
                        <div class="BtnSubscriptionIcon__premium">
                            <span class="SubscriptionIcon__subscriptionIcon themePremium BtnSubscriptionIcon__svg" 
                            style="width: 32px; height: 32px;">
                        </span>
                    </div>
                </div>
            </div>
            <div class="ContextBookCardLong__bookDescription jest-context-book-card-long">
                {{ strip_tags($book->desc->book_desc) }}
                <a href="{{ route('book.show', ['alias' => $book->slug]) }}"><span class="ContextBookCardLong__link">⟩</span></a></div>
            </div>
        </div>
        <div class="ContextBookCardLong__bookDescriptionMobile">
                {{ strip_tags($book->desc->book_desc) }}
            <a href="{{ route('book.show', ['alias' => $book->slug]) }}"><span class="ContextBookCardLong__link">⟩</span></a></div>
        </div>
    </li>