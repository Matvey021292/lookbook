@foreach($items as $k => $item)
    <div class="bj-latest-pub">
        <div class="bj-latest-pub-title">
            @if(!$item->hasParent())
                <h4>{{ $item->title }}</h4>
            @elseif($item->hasParent() && $item->hasChildren())
                <h5>{{ $item->title }}</h5>
            @else
                <p class="cursor-p" data-toggle="collapse" data-target="#collapse{{ $item->id }}" aria-expanded="true"
                   aria-controls="collapse{{ $item->id }}"><i class="fa fa-angle-down mr-2"></i>{{ $item->title }}</p>
            @endif
        </div>
        <div class="grid-2 grid-2-min">
            <div id="collapse{{ $item->id }}" class="collapse show" aria-labelledby="headingOne">
                <div class="row">
                    @foreach($books as $book)
                        @if($book->category_id == $item->id)
                            <div class="cs-sale-item col-xs-12 col-sm-4 col-md-3 col-lg-3 mb-4">
                                <div class="d-flex">
                                    <div class="cms-grid-media">
                                        <a  href="{{ route('book.show', ['alias' => $book->slug]) }}" >
                                            <img src="{{$book->desc->book_img}}"
                                                 class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                 alt="{{ $book->desc->book }}">
                                        </a>
                                    </div>
                                    <div class="info-product pl-2">
                                        <a class="product-title"
                                           href="{{ route('book.show', ['alias' => $book->slug]) }}">{{ $book->book }}</a>
                                    </div>
                                </div>
                            </div>
                        @else

                        @endif
                    @endforeach
                </div>
                @if($item->hasChildren())
                    <div>
                        @include(env('THEME') . '.customCategoryItems', ['items'=>$item->children()])
                    </div>
                @endif
            </div>
        </div>
    </div>
@endforeach