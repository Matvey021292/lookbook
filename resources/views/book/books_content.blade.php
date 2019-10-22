@if($books)
<div class="container">
    <div class="row">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner vc_custom_1504607702805">
                <div class="wpb_wrapper">
                    <div class="heading-2">
                        <div class="wrap-heading">
                            <h2 class="heading">КНИГИ</h2>
                        </div>
                    </div>
                    <div class="vc_empty_space" style="height: 10px">
                        <span class="vc_empty_space_inner"></span>
                    </div>
                    
                    <div class="grid-2 grid-2-min">
                        <ul class="BookList__items">
                            @foreach($books as $book)
                            <li class="BookList__item BookList__oneColsLayout jest-book-card-item">
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
                        </li>
                        @endforeach
                    </div>
                    <hr>
                    <div class="row justify-content-center mt-5">
                        {{ $books->links() }}
                    </div>
                </div>
            </div>
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