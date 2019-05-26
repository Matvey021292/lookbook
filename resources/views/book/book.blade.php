@if($books)
<div class="vc_row wpb_row vc_inner vc_row-fluid">
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner">
            <div class="wpb_wrapper">
                <div class="heading-3 clearfix">
                    <h2 style="font-size: 15px;color: #888a92;text-align: left;font-family:averta-semibold;font-weight:400;font-style:normal" class="heading">RECOMMENDED FOR YOU</h2>
                    <div class="wrap-link"><a href="#" target="_self">All Recommended<i class="zmdi zmdi-chevron-right"></i></a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="vc_empty_space" style="height: 12px"><span class="vc_empty_space_inner"></span></div>
<div class="cms-grid-wraper grid-2 extend-space" id="cms-grid-2">
    <div class="row cms-grid">
       @foreach($books as $book)
        <div class="cms-grid-item col-lg-2.4 col-md-4 col-sm-6 col-xs-12 new-col-lg-5" data-groups='["all","category-comedy","category-thriller"]'>
            <div class="cms-grid-media" style="transition:all 0.25s ease 0s ;box-shadow: 0 0 15px -2px #e9e7e8;" onmouseover="this.style.boxShadow ='0 0 20px 0 #e9e7e8';" onmouseout="this.style.boxShadow ='0 0 15px -2px #e9e7e8';">
                <a href="{{ route('book.show', ['alias'=> $book->slug]) }}">
                    <img width="300" height="455"
                         src="{{ $book->desc->book_img }}"
                         class="attachment-shop_catalog size-shop_catalog wp-post-image"
                         alt=""
                         srcset="{{ $book->desc->book_img }}"
                         sizes="(max-width: 300px) 100vw, 300px" /></a>
            </div>
            <div class="info-product">
                <a class="product-title" href="http://demo.cmssuperheroes.com/themeforest/bookjunky/?product=shattered">
                    {{ $book->book }}</a>
                <p class="product-author">by: {{ $book->author->title }}</p>
            </div>
        </div>
       @endforeach
    </div>
</div>
@endif