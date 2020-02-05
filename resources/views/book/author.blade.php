@extends(env('THEME').'.layouts.site')

@section('nav')
    {!! $nav !!}
@endsection
@section('authors_content')
    {!! $content !!}
@endsection
@section('customCategoryItems')
{!! $books !!}
@endsection