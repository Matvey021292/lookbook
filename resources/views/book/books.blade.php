@extends(env('THEME').'.layouts.site')
@section('Title', __( 'Books' ) )

@section('nav')
{!! $nav !!}
@endsection
@section('books_content')
{!! Breadcrumbs::render('books') !!}
{!! $content !!}
@endsection

