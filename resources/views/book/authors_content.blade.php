@if($authors)
<div class=" billetContainerNoOverflow vc_column-inner">
    <div class="wpb_wrapper">
        <div class="billetContainerWrapper">
            <div class="d-inline-flex">
                <div class="section-title">Авторы</div>
            </div>
        </div>
        <ul class="AuthorList__authorList row  ContentCarousel__wrapper">
            @foreach($authors as $author)
            <li class="AuthorList__author col-md-2">
                
                <div class="billetContainer">
                    <div class="ContextAuthorCard__author">
                        <div class="ContextAuthorCard__authorBlock BookCover__book">
                            @if( $author->desc)
                            <a href="{{ route('author.show', ['alias'=> $author->id]) }}">
                                <img width="124" height="124" 
                                src="{!! $author->desc->image !!}" 
                                alt="{!! $author->title !!}" class="ContextAuthorCard__authorImage" 
                                srcset="{!! $author->desc->image !!}">
                            </a>
                            @endif
                         </div>
                        <div class="ContextAuthorCard__authorInfo mt-1">
                            <a href="{{ route('author.show', ['alias'=> $author->id]) }}" class="ContextAuthorCard__authorName cart-light-sm">
                                <span class="link">{!! $author->title !!}</span>
                            </a>
                            {{-- <div class="text-right">{{count($author->book)}} книг</div> --}}
                        </div>
                    </div>
                </div>
                
            </li>
            @endforeach
        </ul>
        <div class="ContextPagination__contextPagination">
            {{ $authors->links() }}
        </div>
    </div>
</div>
@endif

