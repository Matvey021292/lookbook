@if($author)
<section class="AuthorDetailHeader__wrapper row xs-start wp-100">
    <div class="AuthorDetailHeader__container billetContainerNoOverflow col-md-12">
        <div class="AuthorDetailHeader__image">
            @if($author->desc)
            <img width="128" height="150" src="{{ $author->desc->image }}" alt="{{ $author->title }}" class="AuthorDetailHeader__photo" srcset="{{ $author->desc->image }}">
            @else
            <img width="128" height="150" src="{{ asset(env("THEME")) }}/images/190x288.jpg" alt="{{ $author->title }}" class="AuthorDetailHeader__photo" >
            @endif
        </div>
        <div class="billetContainerWrapper p-0 ">
            <div class="AuthorDetailHeader__authorInfoBlock">
                <h2 class=" section-title">{{ $author->title }}</h2>
                <span class="section-counter section-counter-small ml-0 mt-1">[ Количество книг {{ count($author->books) }} ]</span>
            </div>
        </div>
    </div>
</section>
@if($author->desc && $author->desc->desc_author)
<div data-toggle="collapse" class=" AuthorDetailHeader__container billetContainerNoOverflow AuthorDetailView__containerAbout">
    <h3 class="section-title">Об авторе</h3>
    <div class="ContentCarousel__wrapper">
        <p class="des-author">{!! $author->desc->desc_author  !!} </p>  
    </div>
    <span class="toggle-icon"><i class="fas fa-angle-down"></i></span> 
</div>
@endif 
@else
<div class="page-title-author w-100">
    <div class="wrap-content">
        <h3 class="name-author">Автор не найден</h3>
    </div>
</div>
@endif