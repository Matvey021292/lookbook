<div class="@if($carousel) glide__slide swiper-slide @endif VerticalBookCard__tinyBook jest-verticalbookcard"  style="width:124px;">
    <div class="VerticalBookCard__bookCover">
        <div class="BookCover__book  jest-book-cover" style="width:120px;height:196px">
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
            @if($book->picture)
            <img width="120" height="196" src="{{ config('settings.file_path_book') }}{{ $book->picture->File }}" alt="{{ $book->Title }}" class="BookCover__bookImage" srcset="{{ config('settings.file_path_book') }}{{ $book->picture->File }}">
            @else
            <img width="120" height="196" src="{{ config('settings.file_path_book') }}/190x288.jpg" alt="{{ $book->Title }}" class="BookCover__bookImage" srcset="{{ config('settings.file_path_book') }}/190x288.jpg">
            @endif
            <a class="card_link" href="{{ route('book.show', ['alias'=> $book->id]) }}"></a>
        </div>
    </div>
    <div class="VerticalBookCard__bookInfo">
        @include(env('THEME') . '.rating', ['items'=>$book,'book' => $book])
        <a class="VerticalBookCard__bookName cart-light-sm mt-1" href="{{ route('book.show', ['alias'=> $book->id]) }}">
            <span>{{ $book->Title }}</span>
        </a>
        @if($author)
        @foreach($book->authors as $key => $author)
        <div class="VerticalBookCard__bookAuthorWrapper">
            <a class="VerticalBookCard__bookAuthor"  href="{{ route('author.show', ['alias'=> $author->id]) }}">
                <span>{{ $author->FirstName }} {{ $author->LastName }}</span> 
            </a>
            @if(count($book->authors) > 1)
            <span class="VerticalBookCard__bookAuthor link_more"><i class="fas fa-caret-down"></i> 
                <div class="container_more">
                    @foreach($book->authors as $key => $author)
                    <div class="VerticalBookCard__bookAuthorWrapper">
                        <a class="VerticalBookCard__bookAuthor"  href="{{ route('author.show', ['alias'=> $author->id]) }}">
                            <span>{{ $author->FirstName }} {{ $author->LastName }}</span> 
                        </a>
                    </div>
                    @endforeach
                </div>
            </span>
            @endif
        </div>
        @break
        @endforeach
        @endif
        
    </div>
</div>

