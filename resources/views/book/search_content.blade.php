{{-- {{dd($search)}} --}}
@if(isset($search->books))
<div class="container">
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner vc_custom_1504607702805">
            <div class="wpb_wrapper">
                <div class="heading-3 clearfix"><h2
                    class="heading">Книги</h2>
                    
                </div>
                <div class="SearchBookList__content">
                    <div class="BookList__bookList">
                        <ul class="BookList__items">
                            @foreach($search->books as $book)
                            @include(env('THEME') . '.card.card-book', ['items'=>$book, 'book' => $book, 'carousel' => true, 'author'=>true])
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    @if(isset($search->authors))
    <div class="heading-3 ">
        <h2 class="heading">Авторы</h2>
    </div>
    <ul class="AuthorList__authorList">
        @foreach($search->authors as $author)
        <li class="AuthorList__author">
            <a href="{{ route('author.show', ['alias'=> $author->id]) }}">
                <div class="billetContainer">
                    <div class="ContextAuthorCard__author">
                        <div class="ContextAuthorCard__authorBlock">
                            @if($author->desc)
                            <img width="40" height="40" 
                            src="{!! $author->desc->image !!}" 
                            alt="{!! $author->title !!}" class="ContextAuthorCard__authorImage" 
                            srcset="{!! $author->desc->image !!}">
                            @endif
                            <div class="ContextAuthorCard__authorInfo">
                                <div class="ContextAuthorCard__authorName"><big><span class="link">{!! $author->title !!}</span></big></div>
                            </div>
                        </div>
                        <div class="shortArrow"></div>
                    </div>
                </div>
            </a>
        </li>
        @endforeach
    </ul>   
  
    @endif