@if($books)
    <div class="col-md-12">
        <h5 class="mb-0">Новинки</h5>
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
                        <div class="stars mb-1">
                            <div class="star-rating-icon">
                                @for($i = 1; $i<=5; $i++)
                                    @if($i <= (int) $book->averageRating)
                                        <i class="fas fa-star active"></i>
                                    @else
                                        <i class="fas fa-star"></i>
                                    @endif
                                @endfor
                            </div>
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