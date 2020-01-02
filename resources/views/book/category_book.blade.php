@if($category)
<div data-toggle='collapse' class="billetContainerNoOverflow">
    <div>
        <div class="billetContainerWrapper">
            <div class="LandingContentContainer__title">
                <div class="section-title-sm">Категории</div>
            </div>
            <br>
            @foreach($category as $cat)
            <a class="d-inline-block p-1 pl-0" href="{{ route('category.show', ['alias' => $cat->id]) }}">
                <div style="max-width:unset" class="TagLabel__grey">
                    {{$cat->Title}}
                </div> 
            </a>
            @endforeach
        </div>
    </div>
    <span class="toggle-icon"><i class="fas fa-angle-down"></i></span> 
</div>
@endif