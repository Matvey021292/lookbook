@if($book->translator)
<span>Перевод</span>

@foreach ($book->translator as $author)
<a href="{{ route('author.show', ['alias' => $author->ID]) }}"> <span>{{ $author->FirstName }} {{ $author->LastName }}</span></a>
@endforeach

@endif