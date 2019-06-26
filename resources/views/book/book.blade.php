@if($books)
    <div class="col-md-12">
        <div class="row wpb_row inner row-fluid">
            <div class="wpb_column column_container col-sm-12">
                <div class="column-inner">
                    <div class="wpb_wrapper">
                        <h2 class="mb-0 ">Новинки</h2>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="book_container__lg grid-2">
            <div class="row cms-grid">
                @foreach($books as $book)
                    <div class="col mb-4"
                         data-groups='["all","category-comedy","category-thriller"]'>
                        <div class="cms-grid-media mb-3">
                            <a href="{{ route('book.show', ['alias'=> $book->slug]) }}">
                                <img src="{{ $book->desc->book_img }}"
                                     class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                     alt="{{ $book->book }}" /></a>
                        </div>
                        <div class="info-product">
                            <a class="product-title"
                               href="{{ route('book.show', ['alias'=> $book->slug]) }}">
                                {{ $book->book }}</a>
                            <p class="product-author">{{ $book->author->title }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endif