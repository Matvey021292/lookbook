@if($book)
    <div class="page-title-product_2 w-100" style="background-color: #5a5b99;color:white;">
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
                            @if($book->author->desc && $book->author->desc->image)
                                <img src="{{ $book->author->desc->image  }}"
                                     alt="{{ $book->book }}">
                            @endif
                            <a class="text-white"
                               href="{{ route('author.show', ['alias' => $book->author->slug]) }}">{{ $book->author->title }}</a>

                        </div>

                        <h4 style="color:white !important;">{{ $book->book }}</h4>
                        <div class="wrap-button mb-4 mt-5">
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
    <div class="stars">
        <form action="{{route('postStar', $book->id)}}"  id="addStar" method="POST" >
            <code>{{ csrf_field() }}
                <div class="star-rating">
                    @for($i = 5; $i>=1; $i--)
                        @if($i >= (int)$book->averageRating)
                            <input  type="radio" checked id="{{$i}}-stars" name="star" value="{{$i}}"/>
                            <label for="{{$i}}-stars" class="star"><i class="fas fa-star"></i></label>
                        @else
                            <input  type="radio" id="{{$i}}-stars" name="star" value="{{$i}}"/>
                            <label for="{{$i}}-stars" class="star"><i class="fas fa-star"></i></label>
                        @endif
                    @endfor
                </div>
            </code>
            <div class="error_message"></div>
            <input type="hidden" name="book_id" value="{{$book->id}}">
        </form>
    </div>
    <script type="text/javascript">
        $('input[name="star"]').click(function () {
            $val = $(this).val();
            $this = $(this);
            $form = $(this).parents('form');
            if($form.hasClass('disabled-form')){
                $('.error_message').html('Вы уже проголосовали');
                return false;
            }
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                method: "POST",
                url: $form.attr('action'),
                data: {'star': $val, 'id': $('input[name="book_id"]').val() },
                success: function (e) {
                },
                error: function (e) {
                }
            })
        })
    </script>
    <div class="wrap-single-product post-180 product type-product status-publish has-post-thumbnail product_cat-romance product_cat-thriller product_tag-nightshade first instock taxable shipping-taxable purchasable product-type-simple">
        <div class="container">
            <div class="row">

                <div class="wrap-single-content col-xs-12 col-sm-8 col-lg-10 mt-5">
                    <div class="wrap-overview mt-5">
                        <h3>Описание</h3>
                        <div class="content">
                            {!!  $book->desc->book_desc !!}
                        </div>
                    </div>
                    <div class="wrap-details clearfix">
                        <div class="detail">
                            <h6>Скачать книгу</h6>
                            @if($book->format)
                                <ul>
                                    @foreach($book->format as $format)
                                        <li>
                                            <span class="info-single-title">Скачать в формате <strong>{{ $format->fomat }}</strong>:</span>
                                            <span><a href="{{ $format->link }}">скачать</a></span>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif

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
@else
    <h1>Книги не найдено</h1>
@endif