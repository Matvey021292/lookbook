@extends(env('THEME').'.layouts.site')
@section('nav')
{!! $nav !!}
@endsection
@section('categories_content')
{!! $content !!}
@endsection

