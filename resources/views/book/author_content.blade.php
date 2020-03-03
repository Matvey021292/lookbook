@if($author)
<section class="AuthorDetailHeader__wrapper row xs-start mb-4 row-container">
    <div class="AuthorDetailHeader__container billetContainerNoOverflow ">
        <div class="AuthorDetailHeader__image">
            @if($author->picture)
            <img width="128" height="150" src="{{config('settings.file_path_author')}}{{ $author->picture->File }}" alt="{{ $author->FirstName }} {{ $author->MiddleName }} {{ $author->LastName }}" class="AuthorDetailHeader__photo" srcset="{{config('settings.file_path_author')}}{{ $author->picture->File }}">
            @else
            <div  class="card_cover card_cover__author" style="background: {{ RandomColor::one(array('luminosity'=>'random', 'hue'=>'random')) }}">
                <span class="card_cover_author">{{ $author->FirstName }} {{ $author->LastName }}</span>
            </div>
            @endif
        </div>
        <div class="billetContainerWrapper p-0 ">
            <div class="AuthorDetailHeader__authorInfoBlock">
                <h2 class=" section-title">{{ $author->FirstName }} {{ $author->MiddleName }} {{ $author->LastName }}</h2>
            </div>
            <ul class="mt-1  icon-row text-right">
                <li>
                    <span>Ссылка Википедия: </span>
                    <a href="https://ru.wikipedia.org/wiki/{{ $author->LastName }},_{{ $author->FirstName }}">
                        https://ru.wikipedia.org/wiki/{{ $author->LastName }},_{{ $author->FirstName }}
                    </a>
                </li>
                @if($author->HomePage)
                <li>
                    <span>Сайт Автора: </span>
                    <a href="{{$author->HomePage}}">
                        {{$author->HomePage}}
                    </a>
                </li>
                @endif
            </ul>
            <span class="Button__secondaryButton smallSize mt-1">
                <small><i class="fas fa-plus"></i></small> Добавить в избранное
            </span>
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
        @if($languages && count($languages) >= 1)
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
