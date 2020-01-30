<div class="AuthorList__author col-md-2">
    <div class="billetContainer">
        <div class="ContextAuthorCard__author">
            <div class="ContextAuthorCard__authorBlock BookCover__book">
                <a href="{{ route('author.show', ['alias'=> $author->id]) }}">
                    @if( $author->picture)
                    <img width="124" height="124" 
                    src="{!! config('settings.file_path_author') !!}{!! $author->picture->File !!}" 
                    alt="{!! $author->FirstName !!} {!! $author->LastName !!}" class="ContextAuthorCard__authorImage" 
                    srcset="{!! config('settings.file_path_author') !!}{!! $author->picture->File !!}">
                    @else
                    <img width="124" height="124" 
                    src="{!! config('settings.file_path_author') !!}/190x288.jpg" 
                    alt="{!! $author->FirstName !!} {!! $author->LastName !!}" class="ContextAuthorCard__authorImage" 
                    srcset="{!! config('settings.file_path_author') !!}/190x288.jpg">
                    @endif
                </a>
                
             </div>
            <div class="ContextAuthorCard__authorInfo mt-1">
                <a href="{{ route('author.show', ['alias'=> $author->id]) }}" class="ContextAuthorCard__authorName cart-light-sm">
                    <span class="link">{!! $author->FirstName !!} {!! $author->LastName !!}</span>
                </a>
            </div>
        </div>
    </div>
</div>