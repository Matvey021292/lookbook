@if($categories)
<div class="billetContainerNoOverflow">
    <div class="billetContainerWrapper">
        <a href="/sets/5843-luchshie-biznes-knigi/">
            <div class="LandingContentContainer__title">
                <div class="title-2" data-gtm-vis-first-on-screen-10671871_40="2956">Категории</div>
            </div>
        </a>
        <br>
        @foreach($categories as $category)
        <a class="d-inline-block p-1 pl-0" href="{{ route('category.show', ['alias' => $category->slug]) }}">
            <div style="max-width:unset" class="TagLabel__brown">
                {{$category->category}}
            </div> 
        </a>
        @endforeach
    </div>
</div>
@endif