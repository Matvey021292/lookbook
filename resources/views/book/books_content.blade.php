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
                            <div class="row">
                                @foreach($books as $book)
                                    <div class="cs-sale-item col-xs-12 col-sm-4 col-md-3 col-lg-3 mb-4">
                                        <div class="d-flex">
                                            <div class="cms-grid-media">
                                                <a href="{{ route('book.show', ['alias' => $book->slug]) }}">
                                                    <img src="{{$book->desc->book_img}}"
                                                         class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                         alt="{{ $book->book }}">
                                                </a>
                                            </div>
                                            <div class="info-product pl-2">
                                                <a class="product-title"
                                                   href="{{ route('book.show', ['alias' => $book->slug]) }}">{{ $book->book }}</a>
                                                <p class="product-author">{{ $book->author->title }}</p>
                                                <fieldset class="rating">
                                                    @if($book->rating)

                                                        @for($i = 1; $i <= $book->rating->rating; $i++)
                                                            <input type="radio" id="star{{$book->id}}" name="rating" value="5"/>
                                                            <label class="full" for="star{{$book->id}}" ></label>
                                                        @endfor
                                                    @else

                                                        <input type="radio" id="star5" name="rating" value="5"/><label
                                                                class="full" for="star5"
                                                                title="Awesome - 5 stars"></label>
                                                        <input type="radio" id="star4half" name="rating"
                                                               value="4 and a half"/><label class="half" for="star4half"
                                                                                            title="Pretty good - 4.5 stars"></label>
                                                        <input type="radio" id="star4" name="rating" value="4"/><label
                                                                class="full" for="star4"
                                                                title="Pretty good - 4 stars"></label>
                                                        <input type="radio" id="star3half" name="rating"
                                                               value="3 and a half"/><label class="half" for="star3half"
                                                                                            title="Meh - 3.5 stars"></label>
                                                        <input type="radio" id="star3" name="rating" value="3"/><label
                                                                class="full" for="star3" title="Meh - 3 stars"></label>
                                                        <input type="radio" id="star2half" name="rating"
                                                               value="2 and a half"/><label class="half" for="star2half"
                                                                                            title="Kinda bad - 2.5 stars"></label>
                                                        <input type="radio" id="star2" name="rating" value="2"/><label
                                                                class="full" for="star2"
                                                                title="Kinda bad - 2 stars"></label>
                                                        <input type="radio" id="star1half" name="rating"
                                                               value="1 and a half"/><label class="half" for="star1half"
                                                                                            title="Meh - 1.5 stars"></label>
                                                        <input type="radio" id="star1" name="rating" value="1"/><label
                                                                class="full" for="star1"
                                                                title="Sucks big time - 1 star"></label>
                                                        <input type="radio" id="starhalf" name="rating" value="half"/>
                                                        <label class="half" for="starhalf"
                                                               title="Sucks big time - 0.5 stars"></label>
                                                </fieldset>
                                                @endif
                                                </fieldset>
                                                <div class="book_format">
                                                    @foreach($book->format as $format)
                                                        {{ $format->fomat }}
                                                    @endforeach
                                                </div>
                                            </div>

                                        </div>
                                    </div>
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