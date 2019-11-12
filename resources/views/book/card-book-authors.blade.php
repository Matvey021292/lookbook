@if($book->authors->isNotEmpty())
@foreach ($book->authors as $author)
<a href="{{ route('author.show', ['alias' => $author->slug]) }}"> <span> {{ $author->title }} </span></a>
@endforeach
@else
<a href="{{ route('author.show', ['alias' => $book->author->slug]) }}"> <span>{{ $book->author->title }}</span></a>
@endif