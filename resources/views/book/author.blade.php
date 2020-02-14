@extends(env('THEME').'.layouts.site')
@section('Title', $author->LastName . ' ' . $author->FirstName)

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