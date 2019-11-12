@if($cat)
@include(env('THEME') . '.customCategoryItems', ['items'=>$cat->roots(),'books' => $books])
@endif
