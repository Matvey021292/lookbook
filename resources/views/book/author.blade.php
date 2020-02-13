@extends(env('THEME').'.layouts.site')
@section('nav')
{!! $nav !!}
@endsection
@section('authors_content')
{!! Breadcrumbs::render('author', $author) !!}
{!! $content !!}
@endsection
@section('customCategoryItems')
{!! $books !!}
@endsection