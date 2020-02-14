@extends(env('THEME').'.layouts.site')
@section('Title', $book->Title )

@section('nav')
{!! $nav !!}
@endsection
@section('book_aside')
{!! $aside !!}
@endsection
@section('book_content')
{!! Breadcrumbs::render('book', $book) !!}
{!! $content !!}
@endsection

