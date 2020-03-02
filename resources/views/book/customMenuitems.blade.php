@foreach($items as $item)
<div  id="menu-item-11" class="{{ (URL::current() == $item->url()) ? 'active' : '' }}  @if($item->hasChildren()) menu-item-has-children @endif HeaderLinks__linkContainer" data-depth="0">
<a href="{{ $item->url() }}" class="HeaderLinks__link link">{!! $item->title  !!}</a>
	@if($item->hasChildren())
	<div class='standar-dropdown standard autodrop_submenu sub-menu' style="width:200px;">
		@include(env('THEME') . '.customMenuitems', ['items'=>$item->children()])
	</div>
	@endif
</div>
@endforeach
