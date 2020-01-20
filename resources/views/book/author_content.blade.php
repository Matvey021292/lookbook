@if($author)
<section class="AuthorDetailHeader__wrapper row xs-start wp-100">
    <div class="AuthorDetailHeader__container billetContainerNoOverflow col-md-12">
        <div class="AuthorDetailHeader__image">
            @if($author->picture)
            <img width="128" height="150" src="{{config('settings.file_path_author')}}{{ $author->picture->File }}" alt="{{ $author->FirstName }} {{ $author->MiddleName }} {{ $author->LastName }}" class="AuthorDetailHeader__photo" srcset="{{config('settings.file_path_author')}}{{ $author->picture->File }}">
            @else
            <img width="128" height="150" src="{{ asset(env("THEME")) }}/images/190x288.jpg" alt="{{ $author->title }}" class="AuthorDetailHeader__photo" >
            @endif
        </div>
        <div class="billetContainerWrapper p-0 ">
            <div class="AuthorDetailHeader__authorInfoBlock">
                <h2 class=" section-title">{{ $author->FirstName }} {{ $author->MiddleName }} {{ $author->LastName }}</h2>
                {{-- <span class="section-counter section-counter-small ml-0 mt-1">[ Количество книг {{ count($author->books) }} ]</span> --}}
            </div>
        </div>
    </div>
</section>
@if($author->desc)
<div data-toggle="collapse" class=" AuthorDetailHeader__container billetContainerNoOverflow AuthorDetailView__containerAbout">
    <h3 class="section-title">Об авторе</h3>
    <div class="ContentCarousel__wrapper">
        <p class="des-author">{!! $author->desc->Body  !!} </p>  
    </div>
    <span class="toggle-icon"><i class="fas fa-angle-down"></i></span> 
</div>
@endif 
<div>
    
    
    @foreach($categories as $category)
    <div class="AuthorDetailView__container billetContainerNoOverflow">
        <div class="AuthorDetailListTitle__container">
            <h2 class="section-title">{{ $category->Title }}</h2>
        </div>
        <div class="ContentCarousel__wrapper glide">
            <div data-glide-el="track" class="swiper-container glide__track swiper-container-horizontal swiper-container-free-mode">
                <div class="swiper-wrapper glide__slides">
                    @foreach($category->book as $book)
                    @include(env('THEME') . '.card.card-book', ['items'=>$book,'book' => $book, 'carousel' => true, 'author' => false])
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
    </div>
    @endforeach
</div>
@else
<div class="page-title-author w-100">
    <div class="wrap-content">
        <h3 class="name-author">Автор не найден</h3>
    </div>
</div>
@endif