<div class="book_aside_wrapper">

    <p class="container_title size-md ">
        <i class="fas fa-cloud-download-alt"></i>
        <span class="menu-title">Скачать книгу в формате</span>
    </p>
    <div class="group_btn">
        @foreach($formats as $key => $format)
            @if($format)
                <a data-format="{{ $key }}" href="{{url('uploads/files/' . $format)}}" download class=" active custom_btn">{{ $key }}</a>
            @else
                <a data-format="{{ $key }}"  download class="custom_btn">{{ $key }}</a>
            @endif
        @endforeach
    </div>
    <p class="container_title size-md"><i class="fas fa-book-reader"></i>Читать книгу онлайн</p>
    <div class="group_btn group_btn_size">
        <a href="{{ route('book.show', ['alias' => $book->id]) }}/read" class="custom_btn size-md ">
            <i class="fas fa-book-reader"></i>
            <span class="menu-title">Читать</span>
        </a>
        @if(Auth::user() && Auth::user()->selected && Auth::user()->selected->contains('book_id', $book->id))
            <a href="#" data-status='0' class="booklist custom_btn size-md">
                <i class="fas fa-minus"></i>
                <span class="menu-title">Удалить</span>
            </a>
        @else
            <a href="#" data-status='1' class="booklist custom_btn size-md">
                <i class="fas fa-plus-circle"></i>
                <span class="menu-title">Добавить</span>
            </a>
            <p class="container_title"></p>
        @endif
    </div>
</div>
