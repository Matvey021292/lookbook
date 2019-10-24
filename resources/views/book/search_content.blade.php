@if(!empty($booksItems))
<div class="container">
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner vc_custom_1504607702805">
            <div class="wpb_wrapper">
                <div class="heading-3 clearfix"><h2
                    class="heading">Книги</h2>
                    <div class="wrap-link"></div>
                </div>
                <div class="vc_empty_space" style="height: 12px"><span class="vc_empty_space_inner"></span></div>
                <div class="grid-2 grid-2-min">
                    <div class="row">
                        @foreach($booksItems as $book)
                        {{-- <div class="cs-sale-item col-xs-12 col-sm-4 col-md-3 col-lg-3 mb-4">
                            <div class="d-flex">
                                <div class="cms-grid-media">
                                    <a href="http://127.0.0.1:8000/author/bushkov_aleksandr">
                                        <img src="{{ $book->book_img }}"
                                        class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                        alt="">
                                    </a>
                                </div>
                                <div class="info-product pl-2">
                                    <a class="product-title" href="http://127.0.0.1:8000/author/bushkov_aleksandr">
                                        {{$book->book}}
                                    </a>
                                </div>
                            </div>
                        </div> --}}
                        @include(env('THEME') . '.card-book', ['items'=>$book, 'book' => $book, 'carousel' => true])
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@if(!empty($authors))
<div class="heading-3 ">
    <h2 class="heading">Авторы</h2>
</div>
<ul class="AuthorList__authorList">
    @foreach($authors as $author)
    <li class="AuthorList__author">
        <a href="{{ route('author.show', ['alias'=> $author->slug]) }}">
            <div class="billetContainer">
                <div class="ContextAuthorCard__author">
                    <div class="ContextAuthorCard__authorBlock">
                        @if(file_exists($author->image))
                        <img width="40" height="40" 
                        src="{!! $author->image !!}" 
                        alt="{!! $author->title !!}" class="ContextAuthorCard__authorImage" 
                        srcset="{!! $author->image !!}">
                        @else
                        <img width="40" height="40" 
                        src="http://placehold.it/40x40" 
                        alt="{!! $author->title !!}" class="ContextAuthorCard__authorImage" 
                        srcset="http://placehold.it/40x40">
                        @endif
                        <div class="ContextAuthorCard__authorInfo">
                            <div class="ContextAuthorCard__authorName"><big><span class="link">{!! $author->title !!}</span></big></div>
                        </div>
                    </div>
                    <div class="shortArrow"></div>
                </div>
            </div>
        </a>
    </li>
    @endforeach
</ul>   
@endif