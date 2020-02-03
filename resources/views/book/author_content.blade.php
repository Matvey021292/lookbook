@if($author)
<section class="AuthorDetailHeader__wrapper row xs-start wp-100 mb-2">
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
                <span class="section-counter section-counter-small ml-0 "> <i class="fas fa-book"></i> Книги : {{ count($author->books) }} </span>
            </div>
            <ul class="mt-1 d-flex icon-row">
                <li>
                    <a href="https://ru.wikipedia.org/wiki/{{ $author->LastName }},_{{ $author->FirstName }}">
                        <img class="icon" src="{{ asset(env("THEME")) }}/images/wikipedia.svg" alt="wikipedia">
                    </a>
                </li>
                <li class="flibusta-icon">
                    <a href="https://flibusta.is/a/{{ $author->id }}">
                       <span> Флибуста</span>
                        <small>Книжное братство</small>
                    </a>
                </li>
            </ul>
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
<div class="option_row">
    <form action="/author_filter">
        <input type="hidden" name="alias" value="{{$author->id}}">
        @if($languages && count($languages) > 1)
        <select name="lang" class="select">
            @foreach ($languages as $language)
            @if(request()->get('lang'))
            @if(request()->get('lang') == $language->Lang)
            <option selected value="{{$language->Lang}}">{{ config('language.' . $language->Lang) }}</option>
            @else
            <option value="{{$language->Lang}}">{{ config('language.' . $language->Lang) }}</option>
            @endif
            @else
            @if($language->Lang == 'ru')
            <option selected value="{{$language->Lang}}">{{ config('language.' . $language->Lang) }}</option>
            @else
            <option  value="{{$language->Lang}}">{{ config('language.' . $language->Lang) }}</option>
            @endif
            @endif
            @endforeach
        </select>
        @endif
    </form>
</div>
@else
<div class="page-title-author w-100">
    <div class="wrap-content">
        <h3 class="name-author">Автор не найден</h3>
    </div>
</div>
@endif