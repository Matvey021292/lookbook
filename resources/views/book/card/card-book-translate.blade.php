@if($book->translator->isNotEmpty())
<span>Перевод</span>

@foreach ($book->translator as $author)
<a href="{{ route('author.show', ['alias' => $author->id]) }}"> <span>{{ $author->title }}</span></a>
@endforeach
 
@endif