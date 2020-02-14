@extends(env('THEME').'.layouts.site')
@section('Title', __( 'Home' ))

@section('nav')
{!! $nav !!}
@endsection
@section('slider')
{!! $sliders !!}
@endsection
@section('book')
{!! $books !!}
@endsection
@section('bar')
{!! $rightBar !!}
@endsection
@section('recently_view')
    {!! $books_view !!}
@endsection

