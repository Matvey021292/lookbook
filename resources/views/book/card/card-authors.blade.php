@foreach($authors as $key => $author)
<div class="VerticalBookCard__bookAuthorWrapper">
    <a class="VerticalBookCard__bookAuthor"  href="{{ route('author.show', ['alias'=> $author->id]) }}">
        @if($author->FirstName && $author->LastName)
        <span>{{ $author->FirstName }} {{ $author->LastName }}</span> 
        @endif
    </a>
    @if(count($authors) > 1)
    <span class="VerticalBookCard__bookAuthor link_more"><i class="fas fa-caret-down"></i> 
        <div class="c_scroll container_more">
            @foreach($authors as $key => $author)
            <div class="VerticalBookCard__bookAuthorWrapper">
                <a class="VerticalBookCard__bookAuthor"  href="{{ route('author.show', ['alias'=> $author->id]) }}">
                    @if($author->FirstName && $author->LastName)
                    <span>{{ $author->FirstName }} {{ $author->LastName }}</span>
                    @endif 
                </a>
            </div>
            @endforeach
        </div>
    </span>
    @endif
</div>
@break
@endforeach