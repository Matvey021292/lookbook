@if(!$items->isEmpty())
@foreach($items as $k => $item)
<div class="AuthorDetailView__container">
    <div class="AuthorDetailListTitle__container">
        @if(!$item->hasParent())
        <h2>{{ $item->title }}</h2>
        @elseif($item->hasParent() && $item->hasChildren())
        <h2>{{ $item->title }}</h2>
        @else
        <p class="cursor-p" data-toggle="collapse" data-target="#collapse{{ $item->id }}"
            aria-expanded="true"
            aria-controls="collapse{{ $item->id }}"><i class="fa fa-angle-down mr-2"></i>{{ $item->title }}
        </p>
        @endif
    </div>
    <div class="ContentCarousel__wrapper glide">
        <div data-glide-el="track" class="swiper-container glide__track swiper-container-horizontal swiper-container-free-mode">
            <div class="swiper-wrapper glide__slides">
                @foreach($books as $book)
                @if($book->category_id == $item->id)
                @include(env('THEME') . '.card-book', ['items'=>$book,'book' => $book, 'carousel' => true])
                @else
                {{-- @include(env('THEME') . '.card-book', ['items'=>$book,'book' => $book, 'carousel' => true]) --}}
                @endif
                @endforeach
            </div>
        </div>
        <div class="glide__arrows" data-glide-el="controls">
            <div class="ContentCarousel__buttonPrev  glide__arrow glide__arrow--left" data-glide-dir="<">
                <span class="arrowLeft"></span>
            </div>
            <div class="ContentCarousel__buttonNext glide__arrow glide__arrow--right" data-glide-dir=">">
                <span class="arrowRight"></span>
            </div>
        </div>
    </div>
    @if($item->hasChildren())
    <div>
        @include(env('THEME') . '.customCategoryItems', ['items'=>$item->children()])
    </div>
    @endif
</div>
@endforeach
@else
<div class="AuthorDetailView__container">
    <div class="ContentCarousel__wrapper">
        <div  class="swiper-container swiper-container-horizontal swiper-container-free-mode">
            <div class="swiper-wrapper" >
                @foreach($books as $book)
                @include(env('THEME') . '.card-book', ['items'=>$book, 'book' => $book, 'carousel' => false])
                @endforeach
            </div>
        </div>
    </div>
</div>
@endif
