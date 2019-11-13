@if($categories)
@include(env('THEME') . '.customCategoryItems', ['items'=>$categories->roots(),'books' => $books])
@endif
