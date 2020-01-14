@extends(env('THEME').'.layouts.site')

@section('nav')
{!! $nav !!}
@endsection
@section('book_aside')
{!! $aside !!}
@endsection
@section('book_content')
{!! $content !!}
@endsection

