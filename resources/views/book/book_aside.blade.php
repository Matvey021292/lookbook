<div class="book_aside_wrapper">
    @if($formats)
        <p class="container_title size-md ">
            <i class="fas fa-cloud-download-alt"></i>
            <span class="menu-title">Скачать книгу в формате</span>
        </p>
        <div class="group_btn">
            @foreach ($formats as $format)
                @if($format == $book->FileType && $book->path)
                    <a href="{{url('uploads/files/' . $book->path->Path)}}" download class="active custom_btn">
                        <i class="fas fa-cloud-download-alt"></i>{{ $format }}
                    </a>
                @elseif($format == $book->FileType)
                    <a href="download" data-format="{{$format}}" class="active download_file custom_btn">
                        <i class="fas fa-cloud-download-alt"></i>{{ $format }}
                    </a>
                @else
                    <a href="download" data-format="{{$format}}" class="download_file custom_btn">
                        <i class="fas fa-cloud-download-alt"></i>{{ $format }}
                    </a>
                @endif
            @endforeach
        </div>
        <div class="group_btn group_btn_size">
            <p class="container_title size-md"><i class="fas fa-book-reader"></i>Читать книгу онлайн</p>
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
                    <i class="fas fa-plus"></i>
                    <span class="menu-title">Добавить</span>
                </a>
                <p class="container_title"></p>
        </div>
    @endif
    @endif
</div>


<script>

</script>
