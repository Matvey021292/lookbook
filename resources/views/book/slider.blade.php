@if(count($sliders) > 0)
<div class="carousel-product extend-right">
    <p class="title-carousel">Случайные Книги</p>
    <div class="cms-carousel owl-carousel" id="cms-carousel">
        @foreach($sliders as $slider)
        <div class="cms-carousel-item clearfix" style="background-color: #ededa6;color:black;">
            <a class="title-product" style="color:black;" href="">{!! $slider->book !!}</a>
            <div class="wrap-info">
                <p class="product-author" style="color:black;">
                Автор: {{ $slider->author->title }} </p>
                <div class="woocommerce">
                    <div class="woocommerce-product-rating">
                        <span class="star-rating  bj-color-black"> <span style="width:0%"></span> </span>
                        <span class="bj-rating-counts" style="color:black;">0 Ratings</span>
                    </div>
                </div>
                <div class="excerpt-product" style="color:black;">
               {{ $slider->desc->book_desc }}
                </div>
                <a class="view-shop" style="color: black" href="http://demo.cmssuperheroes.com/themeforest/bookjunky/?product=shattered">Читать книгу
                    <i class="zmdi zmdi-long-arrow-right"></i>
                </a>
            </div>
            <div class="post-thumbnail" style="box-shadow:0 5px 8px#e9e7e8">
                <img width="300" height="455" src="{!! $slider->desc->book_img !!}" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset="{!! $slider->desc->book_img !!}" sizes="(max-width: 300px) 100vw, 300px" />
            </div>
        </div>
        @endforeach
    </div>
</div>
@endif