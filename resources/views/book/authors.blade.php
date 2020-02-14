@extends(env('THEME').'.layouts.site')
@section('Title', __( 'Authors' ) )

@section('nav')
{!! $nav !!}
@endsection
@section('authors_content')
{!! Breadcrumbs::render('authors') !!}
{!! $content !!}
@endsection