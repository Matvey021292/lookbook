@if($book->translator)
<p>
    <span>Перевод</span>
    @foreach ($book->translator as $author)
    <a href="{{ route('author.show', ['alias' => $author->id]) }}"> 
        <span>{{ $author->FirstName }} {{ $author->LastName }}</span>
    </a>
    @endforeach
</p>
@endif