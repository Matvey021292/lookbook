@if($book->translator->isNotEmpty())
<span>Перевод</span>

@foreach ($book->translator as $author)
<a href="{{ route('author.show', ['alias' => $author->slug]) }}"> <span>{{ $author->title }}</span></a>
@endforeach
 
@endif