@extends(env('THEME').'.layouts.site')

@section('nav')
{!! $nav !!}
@endsection

@section('books_content')
{!! $content !!}
@endsection
