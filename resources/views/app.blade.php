<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php // CSRF Token ?>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Vue Laravel SPA') }}</title>

        <?php // styles ?>
        <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <header-component></header-component>

            <router-view></router-view>
        </div>
        <?php // scripts ?>
        <script src="{{ mix('/js/app.js') }}" defer></script>
    </body>
</html>