@if(count($sliders) > 0)
<div class="carousel-product extend-right">
{{--    <p class="title-carousel ">Случайные Книги</p>--}}
    <div class="cms-carousel owl-carousel" id="cms-carousel">
        @foreach($sliders as $slider)
        <div class="cms-carousel-item clearfix gradient-wrap" style="border:1px solid #eee;background:#eee;color:black;">
            <a class="title-product"
               style="color:black;"
               href="{{ route('book.show', ['alias'=> $slider->slug]) }}">
                {!! $slider->book !!}
            </a>
            <div class="wrap-info">
                <p class="product-author" style="color:black;">
                Автор: <a href="{{ route('author.show', ['alias'=> $slider->author->slug]) }}">{{ $slider->author->title }}</a> </p>
                <div class="excerpt-product" style="color:black;">
               {{ $slider->desc->book_desc }}
                </div>
                <a class="view-shop" style="color: black"
                   href="{{ route('book.show', ['alias'=> $slider->slug]) }}">
                    Читать <i class="zmdi zmdi-long-arrow-right"></i>
                </a>
            </div>
            <div class="post-thumbnail " style="box-shadow:0 5px 8px#e9e7e8">
                <img src="{!! $slider->desc->book_img !!}"
                     class="attachment-shop_catalog size-shop_catalog wp-post-image"
                     alt="{!! $slider->book !!}"
                     srcset="{!! $slider->desc->book_img !!}" />
                <a href="{{ route('book.show', ['alias'=> $slider->slug]) }}" class="position_link"></a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endif