<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="initial-scale=1, width=device-width"/>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset(env('THEME')) }}/fav-1.png"/>
    <title>{{ env('APP_NAME') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
                   
    
    <link rel="stylesheet" href="{{ asset(env("THEME")) }}/css/book_reader.css">
</head>
<body>
        @yield('content_book')
</body>
<script src="{{ asset(env("THEME")) }}/js/book_reader.js"></script>
</html>