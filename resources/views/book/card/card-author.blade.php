<div class="VerticalBookCard__tinyBook card_wrapper__x">
    <div class="card_wrapper_image">
        @if($author->picture && file_exists($author->picture->File))
        <img width="60" height="60" 
        src="{!! config('settings.file_path_author') !!}{!! $author->picture->File !!}" 
        alt="{!! $author->FirstName !!} {!! $author->LastName !!}" class="card_image" 
        srcset="{!! config('settings.file_path_author') !!}{!! $author->picture->File !!}">
        @else
        <div class="card_cover card_cover_small" style="background: {{ RandomColor::one(array('luminosity'=>'random', 'hue'=>'random')) }}">
            <span class="card_cover_author">{{ $author->FirstName }} {{ $author->LastName }}</span>
        </div>
        @endif
        <a class="card_link" href="{{ route('author.show', ['alias'=> $author->id]) }}"> </a>
    </div>
    <div class="card_wrapper_context">
        <a href="{{ route('author.show', ['alias'=> $author->id]) }}" class="ContextAuthorCard__authorName cart-light-sm">
            <span class="link">{!! $author->FirstName !!} {!! $author->LastName !!}</span>
        </a>
        <div class="VerticalBookCard__bookAuthor">
            количество книг: {{count($author->books)}}
        </div>
    </div>
</div>