@extends(env('THEME').'.layouts.site')

@section('nav')
    {!! $nav !!}
@endsection
@section('authors_content')
    {!! $content !!}
@endsection
@section('categories')
    {!! $categories !!}
@endsection
@section('categories')
    {!! $books !!}
@endsection