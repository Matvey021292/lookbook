@extends(env('THEME').'.layouts.site')

@section('nav')
{!! $nav !!}
@endsection
@section('category_book')
{!! $category !!}
@endsection
@section('books_content')
{!! $content !!}
@endsection

