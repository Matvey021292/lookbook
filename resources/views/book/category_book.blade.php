@if($categories)
<div class="billetContainerNoOverflow">
    <div class="billetContainerWrapper">
        <div class="LandingContentContainer__title">
            <div class="section-title">Категории</div>
            <div class="LandingContentContainer__link">
                <a href="/category" class=" row center-xs middle-xs"> <span class="link LandingContentContainer__linkText">посмотреть все категории</span><i class="fas fa-angle-right"></i></a>
            </div>
        </div>
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