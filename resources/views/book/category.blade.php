@if($content)
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
                                @foreach($content as $book)
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
                                    </div>
                                @endforeach
                            </div>
                            <hr>
                            <div class="row justify-content-center mt-5">
                                {{ $content->links() }}
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