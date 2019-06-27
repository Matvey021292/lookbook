@if($books_view)
    <div  class="vc_row wpb_row vc_row-fluid vc_custom_1504086144605 vc_row-has-fill row-gradient-color">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner vc_custom_1505871144817">
                <div class="wpb_wrapper">
                    <div class="wrap-cms-popuplar-book container">
                        <h5 class="mb-0">Просмотренные книги</h5>
                        <hr>
                        <div class="row">
                            <div class="most-popular-contents col-lg-12">
                                <div id="most-popular" class="owl-carousel owl-theme">
                                    @foreach($books_view as $book)
                                        <div class="item-popuplar">
                                            <div class="thumbnal-popuplar">
                                                <a href="{{ route('book.show', ['alias' => $book['slug']]) }}">
                                                    <img  src="{{ $book['book_img'] }}"
                                                         class="attachment-shop_catalog_image_size size-shop_catalog_image_size wp-post-image"
                                                         alt="{ $book['book'] }}"> </a>
                                            </div>
                                            <div class="content-popuplar">
                                                <a class="popular-title"
                                                   href="{{ route('book.show', ['alias' => $book['slug']]) }}">{{ $book['book'] }}</a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif