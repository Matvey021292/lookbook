<div class="book_aside_wrapper">
    @if($formats)
    <p class="HeaderLinks__link size-md HeaderLinks__linkContainer">
        <i class="fas fa-file-download"></i> 
        <span class="menu-title">Скачать книгу в формате</span> 
    </p>
    <div class="HeaderLinks__link">
        @foreach ($formats as $format)
            @if($format == $book->FileType && $book->path)
            <a href="{{url('uploads/files/' . $book->path->Path)}}" download class="Button__primaryButton  TagLabel__brown" >{{ $format }}</a>
            @else
            <a href="download" data-format="{{$format}}"  class="download_file Button__primaryButton  TagLabel__brown">{{ $format }}</a>
            @endif
        @endforeach
    </div>
    <a href="{{ route('book.show', ['alias' => $book->id]) }}/read" class="HeaderLinks__link size-md HeaderLinks__linkContainer">
        <i class="fas fa-book-reader"></i>
        <span class="menu-title">Читать книгу онлайн</span> 
    </a>
    @if(!$book->booklist)
    <a href="#" class="BookStatusChangePopup__buttonFunctional add_book_my_list HeaderLinks__link size-md HeaderLinks__linkContainer">
        <i class="fas fa-plus"></i>
        <span class="menu-title">Добавить в список</span> 
    </a>
    @else
    <a href="#" class="BookStatusChangePopup__buttonFunctional remove_book_my_list HeaderLinks__link size-md HeaderLinks__linkContainer">
        <i class="fas fa-minus"></i>
        <span class="menu-title">Удалить из списка</span> 
    </a>
    @endif
    @endif
</div>