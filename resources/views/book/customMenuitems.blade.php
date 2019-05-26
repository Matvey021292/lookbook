@foreach($items as $item)
<li  id="menu-item-11" class="{{ (URL::current() == $item->url()) ? 'active' : '' }}  @if($item->hasChildren()) menu-item-has-children @endif menu-item menu-item-type-custom menu-item-object-custom menu-item-home current-menu-ancestor current-menu-parent  no_group abccs " data-depth="0"><a href="{{ $item->url() }}" class=""><span class="menu-title">{{ $item->title }}</span></a>
	@if($item->hasChildren())
	<ul class='standar-dropdown standard autodrop_submenu sub-menu' style="width:200px;">
		@include(env('THEME') . '.customMenuitems', ['items'=>$item->children()])
	</ul>
	@endif
</li>
@endforeach