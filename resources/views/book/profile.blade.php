@extends(env('THEME').'.layouts.site')

@section('nav')
    {!! $nav !!}
@endsection
@section('profile')
    {!! $user !!}
@endsection
@section('recently_view')
    {!! $books_view !!}
@endsection