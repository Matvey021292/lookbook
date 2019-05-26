@if($book)
    <div id="content" class="site-content">
        <div class="page-title-product_2" style="background-color: #5a5b99;color:white;">

            <div class="container">

                <div class="row">

                    <div class="col-xs-12">

                        <div class="wrap-thumbnail" style="box-shadow: 0 5px 15px -5px #5a5b99">

                            <img width="330" height="500"
                                 src="{{ $book->desc->book_img }}"
                                 class="attachment-shop_catalog_image_size size-shop_catalog_image_size wp-post-image"
                                 alt="{{ $book->book }}"></div>

                        <div class="wrap-content">

                            <div class="author" style="color:white !important;">
{{--                                <img src="{{ $book->author->get_author_desc  }}"--}}
{{--                                     alt="{{ $book->book }}">--}}
                                {{ $book->author->title }}
                            </div>

                            <h4 style="color:white !important;">{{ $book->book }}</h4>

                            <div>
                                <div class="woocommerce">
                                    <div class="woocommerce-product-rating">
                <span class="star-rating  bj-color-#8e79df">
                    <span style="width:0%"></span>
                </span><span class="bj-rating-counts" style="color:#8e79df;">0 Ratings</span></div>
                                </div>
                            </div>

                            <p style="color:white !important;">
                                {{ $book->desc->book_desc }}
                            </p>

                            <div class="wrap-button mb-4">
                                <button class="flex-favorites ml-0" data-id="180">
                                    <span class="ff-icon zmdi zmdi-favorite-outline"></span>
                                    <p class="ff-label" data-counts="aj-count">Добавить в список</p>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="wrap-single-product post-180 product type-product status-publish has-post-thumbnail product_cat-romance product_cat-thriller product_tag-nightshade first instock taxable shipping-taxable purchasable product-type-simple">
            <div class="container">
                <div class="row">

                    <div class="wrap-single-content col-xs-12 col-sm-8 col-lg-10">
                        <div class="info-single-product">
                            <ul>
                                <li>
                                    <div class="info-single-title">Genre:</div>
                                    <span>
                    <a href="http://demo.cmssuperheroes.com/themeforest/bookjunky/?product_cat=romance" rel="tag">Romance</a>, <a
                                                href="http://demo.cmssuperheroes.com/themeforest/bookjunky/?product_cat=thriller"
                                                rel="tag">Thriller</a>                </span>
                                </li>
                                <li>
                                    <div class="info-single-title">Originally Published:</div>
                                    <span>
                    NA                </span>
                                </li>
                                <li>
                                    <div class="info-single-title">Hardcover:</div>
                                    <span>
                    NA                </span>
                                </li>
                                <li>
                                    <div class="info-single-title">Language:</div>
                                    <span>
                    NA                </span>
                                </li>
                            </ul>
                        </div>
                        <div class="woocommerce-notices-wrapper"></div>
                        <div class="wrap-overview">
                            <h3>Overview</h3>
                            <div class="content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                    Excepteur
                                    sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                                    id
                                    est laborum.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                    Excepteur
                                    sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                                    id
                                    est laborum.</p>
                            </div>
                        </div>
                        <div class="wrap-details clearfix">
                            <div class="detail">
                                <h6>BOOK DETAILS</h6>
                                <ul>
                                    <li>
                                        <span class="info-single-title">Hardcover:</span>
                                        <span>
                    NA                </span>
                                    </li>
                                    <li>
                                        <span class="info-single-title">Publisher:</span>
                                        <span>
                    NA                </span>
                                    </li>
                                    <li>
                                        <span class="info-single-title">Language:</span>
                                        <span>
                    NA                </span>
                                    </li>
                                    <li>
                                        <span class="info-single-title">ISBN-10:</span>
                                        <span>
                    NA                </span>
                                    </li>
                                    <li>
                                        <span class="info-single-title">Dimensions:</span>
                                        <span>
                    NA                </span>
                                    </li>
                                </ul>
                            </div>
                            <div class="gallery-review">
                                <h6>PREVIEW</h6>

                                <div class="owl-carousel owl-theme owl-loaded owl-drag" id="gallery-product">
                                    <div class="owl-stage-outer">
                                        <div class="owl-stage"
                                             style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 444px;">
                                            <div class="owl-item active" style="width: 133px; margin-right: 15px;"><a
                                                        data-lightbox="light-box"
                                                        href="http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/post-4.jpg"><img
                                                            width="230" height="300"
                                                            src="http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/post-4-230x300.jpg"
                                                            class="attachment-book_junky_230X300 size-book_junky_230X300"
                                                            alt="" title="post-4" data-caption=""
                                                            data-src="http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/post-4.jpg"
                                                            data-large_image="http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/post-4.jpg"
                                                            data-large_image_width="1000" data-large_image_height="800"></a>
                                            </div>
                                            <div class="owl-item active" style="width: 133px; margin-right: 15px;"><a
                                                        data-lightbox="light-box"
                                                        href="http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/post-7.jpg"><img
                                                            width="230" height="300"
                                                            src="http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/post-7-230x300.jpg"
                                                            class="attachment-book_junky_230X300 size-book_junky_230X300"
                                                            alt="" title="post-7" data-caption=""
                                                            data-src="http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/post-7.jpg"
                                                            data-large_image="http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/post-7.jpg"
                                                            data-large_image_width="1000" data-large_image_height="800"></a>
                                            </div>
                                            <div class="owl-item active" style="width: 133px; margin-right: 15px;"><a
                                                        data-lightbox="light-box"
                                                        href="http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/post-6.jpg"><img
                                                            width="230" height="300"
                                                            src="http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/post-6-230x300.jpg"
                                                            class="attachment-book_junky_230X300 size-book_junky_230X300"
                                                            alt="" title="post-6" data-caption=""
                                                            data-src="http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/post-6.jpg"
                                                            data-large_image="http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/post-6.jpg"
                                                            data-large_image_width="1000" data-large_image_height="800"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-nav disabled">
                                        <div class="owl-prev">Previous</div>
                                        <div class="owl-next">Next</div>
                                    </div>
                                    <div class="owl-dots disabled"></div>
                                </div>
                            </div>
                        </div>
                        <div class="review">
                            <h5>Customer Reviews</h5>
                            <div id="reviews" class="woocommerce-Reviews">
                                <button class="bj-write-cmt-btn">Write a review</button>
                                <div id="comments">
                                    <div class="wrap-rating">
                                        <p>Average customer rating</p>
                                        <div class="woocommerce">
                                            <div class="woocommerce-product-rating">
                <span class="star-rating ">
                    <span style="width:0%"></span>
                </span><span class="bj-rating-counts" style="color:;">0 Ratings</span></div>
                                        </div>
                                    </div>


                                    <div id="review_form_wrapper" class="bj-comment-form">
                                        <div id="review_form">
                                            <div id="respond" class="comment-respond">
                                            <span id="reply-title" class="comment-reply-title">Be the first to review “Nightshade” <small><a
                                                            rel="nofollow" id="cancel-comment-reply-link"
                                                            href="/themeforest/bookjunky/?product=nightshade#respond"
                                                            style="display:none;">Cancel reply</a></small></span>
                                                <form action="http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-comments-post.php"
                                                      method="post" id="commentform" class="comment-form">
                                                    <p class="comment-notes"><span id="email-notes">Your email address will not be published.</span>
                                                        Required fields are marked <span class="required">*</span></p>
                                                    <p class="comment-form-author"><label for="author">Name <span
                                                                    class="required">*</span></label> <input id="author"
                                                                                                             name="author"
                                                                                                             type="text"
                                                                                                             value=""
                                                                                                             size="30"
                                                                                                             aria-required="true"
                                                                                                             required="">
                                                    </p>
                                                    <p class="comment-form-email"><label for="email">Email <span
                                                                    class="required">*</span></label> <input id="email"
                                                                                                             name="email"
                                                                                                             type="email"
                                                                                                             value=""
                                                                                                             size="30"
                                                                                                             aria-required="true"
                                                                                                             required="">
                                                    </p>
                                                    <div class="comment-form-rating"><label for="rating">Your
                                                            rating</label>
                                                        <p class="stars"><span>							<a
                                                                        class="star-1"
                                                                        href="#">1</a>							<a
                                                                        class="star-2" href="#">2</a>							<a
                                                                        class="star-3" href="#">3</a>							<a
                                                                        class="star-4" href="#">4</a>							<a
                                                                        class="star-5" href="#">5</a>						</span>
                                                        </p><select name="rating" id="rating" aria-required="true"
                                                                    required="" style="display: none;">
                                                            <option value="">Rate…</option>
                                                            <option value="5">Perfect</option>
                                                            <option value="4">Good</option>
                                                            <option value="3">Average</option>
                                                            <option value="2">Not that bad</option>
                                                            <option value="1">Very poor</option>
                                                        </select></div>
                                                    <p class="comment-form-comment"><label for="comment">Your review
                                                            <span
                                                                    class="required">*</span></label><textarea
                                                                id="comment"
                                                                name="comment"
                                                                cols="45"
                                                                rows="8"
                                                                aria-required="true"
                                                                required=""></textarea>
                                                    </p>
                                                    <p class="form-submit"><input name="submit" type="submit"
                                                                                  id="submit"
                                                                                  class="submit" value="Submit"> <input
                                                                type="hidden" name="comment_post_ID" value="180"
                                                                id="comment_post_ID">
                                                        <input type="hidden" name="comment_parent" id="comment_parent"
                                                               value="0">
                                                    </p></form>
                                            </div><!-- #respond -->
                                        </div>
                                    </div>


                                    <p class="woocommerce-noreviews">There are no reviews yet.</p>

                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-lg-2">
                        <div class="wrap-single-sidebar">
                            <div class="wrap-book-author">
                                <h4 class="sg-sidebar-title">BOOKS BY Andrea Cremer</h4>

                                <div class="item-product clearfix">


                                    <div class="wrap-thumbnail" style="box-shadow: 0 5px 15px -5px #5a5b99">

                                        <a href="http://demo.cmssuperheroes.com/themeforest/bookjunky/?product=nightshade">
                                            <img width="330" height="500"
                                                 src="{{ $book->desc->book_img }}"
                                                 class="attachment-single-product size-single-product wp-post-image"
                                                 alt="{{ $book->book }}"> </a>
                                    </div>

                                    <div class="wrap-content">

                                        <a href="http://demo.cmssuperheroes.com/themeforest/bookjunky/?product=nightshade">Nightshade</a>

                                        <div class="wrap-price">
                                        <span class="price"><span class="woocommerce-Price-amount amount"><span
                                                        class="woocommerce-Price-currencySymbol">£</span>7.99</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h4 class="sg-sidebar-title">SHARE THIS BOOK</h4>

                            <div class="wrap-share">
                                <ul class="list-unstyled clearfix">
                                    <li>
                                        <a class="facebook" title="Share this article to Facebook" target="_blank"
                                           href="https://www.facebook.com/sharer/sharer.php?u=http://demo.cmssuperheroes.com/themeforest/bookjunky/?product=nightshade&amp;t=Nightshade">
                                            <i class="zmdi zmdi-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="twitter" title="Share this article to Twitter" target="_blank"
                                           href="https://twitter.com/home?status=Check out this article:%20Nightshade%20-%20http://demo.cmssuperheroes.com/themeforest/bookjunky/?product=nightshade">
                                            <i class="zmdi zmdi-twitter"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a class="email" title="Share this article to GooglePlus" target="_blank"
                                           href="mailto:?body=http://demo.cmssuperheroes.com/themeforest/bookjunky/?product=nightshade"><i
                                                    class="zmdi zmdi-email"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@else
    <h1>Книги не найдено</h1>
@endif