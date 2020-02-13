@extends(env('THEME').'.layouts.site')

@section('nav')
{!! $nav !!}
@endsection
@section('authors_content')
{!! Breadcrumbs::render('authors') !!}
{!! $content !!}
@endsection