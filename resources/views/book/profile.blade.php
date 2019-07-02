@extends(env('THEME').'.layouts.site')

@section('nav')
    {!! $nav !!}
@endsection
@section('profile')
    {!! $content !!}
@endsection
@section('recently_view')
    {!! $books_view !!}
@endsection
{{--@section('book')--}}
{{--    {!! $books !!}--}}
{{--@endsection--}}
{{--@section('bar')--}}
{{--    {!! $rightBar !!}--}}
{{--@endsection--}}