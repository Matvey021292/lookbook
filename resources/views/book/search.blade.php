@extends(env('THEME').'.layouts.site')
@section('Title', __('Search by word ') . '«' . request()->get('query') . '»')

@section('nav')
    {!! $nav !!}
@endsection
@section('search_content')
    {!! $content !!}
@endsection