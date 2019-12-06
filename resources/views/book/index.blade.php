@extends(env('THEME').'.layouts.site')

@section('nav')
{!! $nav !!}
@endsection
@section('slider')
{!! $sliders !!}
@endsection
@section('book')
{!! $books !!}
@endsection
@section('bar')
{!! $rightBar !!}
@endsection
@section('category_book')
    {!! $category !!}
@endsection
@section('recently_view')
    {!! $books_view !!}
@endsection

