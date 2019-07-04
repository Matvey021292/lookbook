@if($categories)
    @foreach($categories as $category)
        <a class="d-inline-block p-1 pl-0" href="{{ route('category.show', ['alias' => $category->slug]) }}">{{$category->category}}</a>
        @endforeach
    @endif