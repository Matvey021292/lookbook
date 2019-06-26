@extends(env('THEME').'.layouts.site')

@section('nav')
{!! $nav !!}
@endsection
@section('slider')
{!! $sliders !!}
@endsection
@section('search_content')
    {!! $search !!}
@endsection
@section('home')
{{--    {!! $book !!}--}}
@endsection
@section('book')
{!! $books !!}
@endsection
@section('bar')
{!! $rightBar !!}
@endsection
@section('recently_view')
    {!! $books_view !!}
@endsection