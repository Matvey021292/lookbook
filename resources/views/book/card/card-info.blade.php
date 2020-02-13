<span class="book_info link_more" href="javascript:void(0)">
    <i class="fas fa-info"></i>
    <div class="container_more">
        <ul class="ml-3">
            @if($book->Year)
            <li><strong>Год издания: </strong><span>{{$book->Year}}</span></li>
            @endif
            @if($book->Lang)
            @if($book->Lang == 'ru')
            <li><strong>Язык: </strong><span>Русский</span></li>
            @endif
            @endif
            @if($book->FileAuthor)
            <li><strong>Издательство: </strong><a href="{{ route('publisher.show', ['alias' => $book->FileAuthor]) }}"><span>{{$book->FileAuthor}}</span></a></li>
            @endif
            @if($book->Pages)
            <li><strong>Количество страниц: </strong><span>{{$book->Pages}}</span></li>
            @endif
            @if($book->Chars)
            <li><strong>Объем: </strong><span>{{$book->Chars}} тыс. знаков</span></li>
            @endif
            @if($book->Time)
            <li><strong>Дата поступления:  </strong><span>{{ date('d.m.Y', strtotime($book->Time)) }}</span></li>
            @endif
        </ul>
    </div>
</span>