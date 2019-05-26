@extends(env('THEME').'.layouts.site')

@section('nav')
    {!! $nav !!}
@endsection
@section('books_content')
    {!! $content !!}
    @endsection
{{--@section('book')--}}
{{--    {!! $books !!}--}}
{{--@endsection--}}
{{--@section('bar')--}}
{{--    {!! $rightBar !!}--}}
{{--@endsection--}}