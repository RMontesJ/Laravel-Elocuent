<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
        
    <a href="{{ route('crear-post') }}">
    <button>Crear post</button>
    </a>

    <a href="{{ route('ver-posts') }}">
    <button>Ver post</button>
    </a>

    </body>
</html>
