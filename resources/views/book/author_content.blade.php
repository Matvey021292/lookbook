@if($author)
<div class="backgroundContainer themeGrey">
    <section class="AuthorDetailHeader__wrapper row xs-start wp-100">
        <div class="AuthorDetailHeader__container billetContainerNoOverflow col-md-6">
            <div class="AuthorDetailHeader__image">
                @if($author->desc)
                <img width="128" height="150" src="{{ $author->desc->image }}" alt="{{ $author->title }}" class="AuthorDetailHeader__photo" srcset="{{ $author->desc->image }}">
                @endif
            </div>
            <div class="billetContainerWrapper p-0 ">
                <div class="AuthorDetailHeader__authorInfoBlock">
                    <h2 class=" section-title">{{ $author->title }}</h2>
                    <span class="section-counter section-counter-small ml-0 mt-1">[ Количество книг {{ count($author->book) }} ]</span>
                </div>
            </div>
        </div>
    </section>
    <div class="AuthorDetailView__container AuthorDetailView__containerAbout">
        <h3>Об авторе</h3>
        @if($author->desc)
        <p class="des-author">{!! $author->desc->desc_author  !!} </p>   
        @endif 
    </div>
</div>
@else
<div class="page-title-author w-100">
    <div class="wrap-content">
        <h3 class="name-author">Автор не найден</h3>
    </div>
</div>
@endif