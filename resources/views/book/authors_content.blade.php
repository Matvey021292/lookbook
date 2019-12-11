@if($authors)
<h1 class="heading">Авторы</h1>
<ul class="AuthorList__authorList">
    @foreach($authors as $author)
    <li class="AuthorList__author">
        <a href="{{ route('author.show', ['alias'=> $author->slug]) }}">
            <div class="billetContainer">
                <div class="ContextAuthorCard__author">
                    <div class="ContextAuthorCard__authorBlock">
                        @if( $author->desc)
                        <img width="40" height="40" 
                        src="{!! $author->desc->image !!}" 
                        alt="{!! $author->title !!}" class="ContextAuthorCard__authorImage" 
                        srcset="{!! $author->desc->image !!}">
                        @endif
                        <div class="ContextAuthorCard__authorInfo">
                            <div class="ContextAuthorCard__authorName"><big><span class="link">{!! $author->title !!}</span></big></div>
                            <div>{{count($author->book)}} книга</div>
                        </div>
                    </div>
                    <div class="shortArrow"></div>
                </div>
            </div>
        </a>
    </li>
    @endforeach
</ul>
<div class="ContextPagination__contextPagination">
    {{ $authors->links() }}
</div>
@endif

