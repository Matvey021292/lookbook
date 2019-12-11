@if($categories)
<div class="billetContainerNoOverflow">
    <div class="billetContainerWrapper">
        <div class="LandingContentContainer__title">
            <div class="section-title-sm">Категории</div>
        </div>
        <br>
        @foreach($categories as $category)
        <a class="d-inline-block p-1 pl-0" href="{{ route('category.show', ['alias' => $category->slug]) }}">
            <div style="max-width:unset" class="TagLabel__grey">
                {{$category->category}}
            </div> 
        </a>
        @endforeach
    </div>
</div>
@endif