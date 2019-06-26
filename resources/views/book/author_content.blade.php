@if($author)
    <div class="page-title-author w-100">
        <div class="wrap-backround"
             style="background-image: url('{{ asset(env("THEME")) }}/images/post_8.jpg');">
        </div>
        <div class="wrap-content">
            <div class="avatar">
                <a href="{{ route('author.show', ['alias' => $author->slug]) }}">
                    <img src="{{ $author->desc->image }}"
                         alt="Avatar author"></a>
            </div>
            <h3 class="name-author">{{ $author->title }}</h3>
            <p class="des-author">{!! $author->desc->desc_author  !!} </p>
        </div>
    </div>
@else
    <div class="page-title-author w-100">
        <div class="wrap-backround"
             style="background-image: url('{{ asset(env("THEME")) }}/images/post_8.jpg');">
        </div>

        <div class="wrap-content">
            <div class="avatar">
                <img src="{{ asset(env('THEME')) }}/images/lady_author_3.jpg"
                     alt="Автор не найден">
            </div>
            <h3 class="name-author">Автор не найден</h3>
        </div>
    </div>
@endif