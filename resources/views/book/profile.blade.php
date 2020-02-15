@extends(env('THEME').'.layouts.site')
@section('Title', __('Личный кабинет') )
@section('nav')
{!! $nav !!}
@endsection
@section('profile')
{!! Breadcrumbs::render('profile') !!}
{!! $content !!}
@endsection
@section('recently_view')
{!! $books_view !!}
@endsection