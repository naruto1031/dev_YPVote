<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Language" content="ja">
        <meta name="google" content="notranslate">
        <title>Laravel Vite React 3</title>
        @viteReactRefresh
        @vite('resources/js/app.js')
    </head>
    <body>
        <div id="header"></div>
        <div id="example"></div>
        <div style="font-size: 2em">text-footer</div>
    </body>
</html>