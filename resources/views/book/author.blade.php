@extends(env('THEME').'.layouts.site')

@section('nav')
    {!! $nav !!}
@endsection
@section('authors_content')
    {!! $content !!}
@endsection
@section('categories')
    {!! $cat !!}
@endsection
@section('categories')
    {!! $books_c !!}
@endsection