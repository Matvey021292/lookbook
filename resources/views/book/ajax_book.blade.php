@foreach ($books as $book)
<div class="col-md-6">
    @include(env('THEME') . '.card.card-book-horizontally', ['items'=>$book,'book' => $book, 'carousel' => false, 'desc' => true])
</div>
@endforeach