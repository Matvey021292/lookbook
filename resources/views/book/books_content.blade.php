@if($books)
    <div class="container">
        <div class="row">
            <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner vc_custom_1504607702805">
                    <div class="wpb_wrapper">
                        <div class="heading-2">
                            <div class="wrap-heading">
                                <h2 style=";color: #888a92;" class="heading">КНИГИ</h2>
                            </div>
                        </div>
                        <div class="vc_empty_space" style="height: 10px">
                            <span class="vc_empty_space_inner"></span>
                        </div>
                        <div class="cms-grid-wraper grid-2 cs-saler">
                            <div class="row">
                                @foreach($books as $book)
                                    <div class="cs-sale-item col-xs-12 col-sm-4 col-md-3 col-lg-2">
                                        <div class="cms-grid-media"
                                             style="transition: all 0.25s ease 0s; box-shadow: rgb(90, 91, 153) 0px 0px 15px -2px;"
                                             onmouseover="this.style.boxShadow ='0 0 20px 0 #5a5b99';"
                                             onmouseout="this.style.boxShadow ='0 0 15px -2px #5a5b99';">
                                            <a href="{{ route('book.show', ['alias' => $book->slug]) }}">
                                                <img width="300" height="455"
                                                     src="{{$book->desc->book_img}}"
                                                     class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                     alt="{{ $book->book }}"
                                                >
                                            </a>
                                        </div>
                                        <div class="info-product">
                                            <a class="product-title"
                                               href="{{ route('book.show', ['alias' => $book->slug]) }}">{{ $book->book }}</a>
                                            <p class="product-author"> Автор: {{ $book->author->title }}</p>
                                            <br>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                            <div class="row justify-content-center">
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