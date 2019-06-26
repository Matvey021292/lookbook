@if(isset($booksItems))
    <div class="container">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner vc_custom_1504607702805">
                <div class="wpb_wrapper">
                    <div class="heading-3 clearfix"><h2
                                class="heading">Книги</h2>
                        <div class="wrap-link"><a href="#" target="_self">All Best Sellers<i
                                        class="zmdi zmdi-chevron-right"></i></a></div>
                    </div>
                    <div class="vc_empty_space" style="height: 12px"><span class="vc_empty_space_inner"></span></div>
                    <div class="grid-2 grid-2-min">
                        <div class="row">
                            @foreach($booksItems as $book)
                                <div class="cs-sale-item col-xs-12 col-sm-4 col-md-3 col-lg-3 mb-4">
                                   <div class="d-flex">
                                       <div class="cms-grid-media">
                                           <a href="http://127.0.0.1:8000/author/bushkov_aleksandr">
                                               <img src="{{ $book->book_img }}"
                                                    class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                    alt="Бушков  Александр">
                                           </a>
                                       </div>
                                       <div class="info-product pl-2">
                                           <a class="product-title" href="http://127.0.0.1:8000/author/bushkov_aleksandr">
                                               {{$book->book}}
                                           </a>
                                       </div>
                                   </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
@if(isset($authors))
    <div class="container">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner vc_custom_1504607702805">
                <div class="wpb_wrapper">
                    <div class="heading-3 clearfix"><h2
                                class="heading">Авторы</h2>
                        <div class="wrap-link"><a href="#" target="_self">All Best Sellers<i
                                        class="zmdi zmdi-chevron-right"></i></a></div>
                    </div>
                    <div class="vc_empty_space" style="height: 12px"><span class="vc_empty_space_inner"></span></div>
                    <div class="grid-2 grid-2-min">
                        <div class="row">
                            @foreach($authors as $author)
                                <div class="cs-sale-item col-xs-12 col-sm-4 col-md-3 col-lg-3 mb-4">
                                   <div class="d-flex">
                                       <div class="cms-grid-media" >
                                           <a href="http://127.0.0.1:8000/author/bushkov_aleksandr">
                                               <img src="{{ $author->image }}"
                                                    class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                    alt="Бушков  Александр">
                                           </a>
                                       </div>
                                       <div class="info-product  pl-2">
                                           <a class="product-title" href="http://127.0.0.1:8000/author/bushkov_aleksandr">
                                               {{$author->title}}
                                           </a>
                                       </div>
                                   </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
