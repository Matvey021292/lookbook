@if($authors)
<div class="billetContainerNoOverflow">
    <div class="billetContainerWrapper">
        <h1 class="heading">Авторы</h1>
        <div class="ContentCarousel__wrapper">
            <div  class="swiper-container swiper-container-horizontal swiper-container-free-mode">
                <div class="swiper-wrapper-row" style="transform: translate3d(0px, 0px, 0px);">
                    @foreach($authors as $author)
                    <div class="VerticalBookCard__tinyBook  jest-verticalbookcard">
                        <div class="VerticalBookCard__bookCover">
                            <div class="BookCover__book BookCover__-premium jest-book-cover" style="width:124px;height:196px">
                                <a href="{{ route('author.show', ['alias'=> $author->slug]) }}">
                                    <img style="object-fit:cover" width="124" height="196" src="{!! $author->desc->image !!}" alt="{!! $author->title !!}" class="BookCover__bookImage" srcset="https://i4.mybook.io/c/248x392/book_covers/95/53/955358f4-f529-40fe-b261-0676e3a1965c.jpg 2x">
                                </a>
                            </div>
                        </div>
                        <div class="VerticalBookCard__bookInfo">
                            <a class="VerticalBookCard__bookName" href="{{ route('author.show', ['alias'=> $author->slug]) }}">
                                <div>
                                    <span width="0">
                                        <span>
                                            <span>{!! $author->title !!}</span>
                                        </span>
                                        <span style="position:fixed;visibility:hidden;top:0;left:0">
                                            <span>…</span>
                                        </span>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="ContextPagination__contextPagination">
                    {{ $authors->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endif

