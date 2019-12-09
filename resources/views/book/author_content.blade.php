@if($author)
<div class="backgroundContainer themeGrey">
    <section class="AuthorDetailHeader__wrapper">
          
        <div class="AuthorDetailHeader__blurredImageWrapper">
            <img height="128" src="{{ $author->desc->image }}" alt="{{ $author->title }}" class="AuthorDetailHeader__cover" srcset="{{ $author->desc->image }}">
        </div>
        <div class="AuthorDetailHeader__container">
            <div class="AuthorDetailHeader__image">
                @if(file_exists($author->desc->image))
                <img height="128" src="{{ $author->desc->image }}" alt="{{ $author->title }}" class="AuthorDetailHeader__photo" srcset="{{ $author->desc->image }}">
                @else
                <img height="128" src="http://placehold.it/128x128" alt="{{ $author->title }}" class="AuthorDetailHeader__photo" srcset="http://placehold.it/128x128">
                @endif
            </div>
            <div class="AuthorDetailHeader__authorInfoBlock">
                <div class="AuthorDetailHeader__paddingBlock"></div>
                <h1 class="AuthorDetailHeader__name">{{ $author->title }}</h1>
                <span class="AuthorDetailHeader__subtitle">{{ count($author->book) }} книги</span>
            </div>
        </div>
    </section>
    <div class="AuthorDetailView__container AuthorDetailView__containerAbout">
        <h3>Об авторе</h3>
        <p class="des-author">{!! $author->desc->desc_author  !!} </p>    
    </div>
</div>
@else
<div class="page-title-author w-100">
    <div class="wrap-content">
        <h3 class="name-author">Автор не найден</h3>
    </div>
</div>
@endif