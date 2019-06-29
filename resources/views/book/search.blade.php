@extends(env('THEME').'.layouts.site')
@section('nav')
    {!! $nav !!}
@endsection
@section('search_content')
    {!! $content !!}
@endsection