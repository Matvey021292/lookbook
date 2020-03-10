<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset(env('THEME')) }}/images/favicon.png"/>
    <title>Leviafan - @yield('Title')</title>
    <link rel="stylesheet" href='{{ asset(env("THEME")) }}/css/app.css'>
    <link rel="stylesheet" href='{{ asset(env("THEME")) }}/css/app_mobile.css'>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
