@extends(env('THEME').'.layouts.site')

@section('nav')
    {!! $nav !!}
@endsection
@section('authors_content')
    {!! $content !!}
@endsection
@section('category_book')
{!! $category !!}
@endsection
{{-- @section('categories')
    {!! $categories !!}
@endsection --}}
{{-- @section('categories')
    {!! $books !!}
@endsection --}}