@extends(env('THEME').'.layouts.site')

@section('nav')
{!! $nav !!}
@endsection
@section('slider')
{!! $sliders !!}
@endsection
@section('home')
{{--    {!! $home !!}--}}
@endsection
@section('book')
{!! $books !!}
@endsection
@section('bar')
{!! $rightBar !!}
@endsection