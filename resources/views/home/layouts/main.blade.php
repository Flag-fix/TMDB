<!doctype html>
<html lang="pt-br" xmlns:livewire="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App Filmes</title>
    <link rel="stylesheet" href="../../../css/app.css">
    @livewireStyles
</head>
<body class="font-sans bg-purple-900 text-white">
<nav class="border-b border-purple-800">
    <div class="container mx-auto flex px-4 items-center justify-between px-4 py-6">
        <ul class="flex items-center">
            <li>
                <a href="{{route('home.filmes.index')}}">
                    <svg width="45" viewBox="0 0 512 512"><path d="M234.1 1.1C184.4 5.5 138.5 23.6 98 54.8c-12.6 9.7-36.3 34-46.1 47.2-12.1 16.3-17.1 24.4-25.4 41.5C14 169.1 7.2 190.6 2.9 219.1c-3.2 20.5-3.2 53.3 0 73.8 4.3 28.5 11.1 50 23.6 75.6 13.2 27.1 26.9 46.1 49.4 68.5 16.1 16 27.7 25.4 44.2 35.8 9.8 6.2 28.4 15.8 36.9 19.2l4.8 1.9-.4-3.7c-.5-3.8-21.4-257.8-21.4-259.4 0-.4 15.8-.8 35-.8h35v5.2c0 17.9 9.1 273.3 9.7 273.9 1.1 1 24.4 2.9 36.3 2.9 11.9 0 35.2-1.9 36.3-2.9.6-.6 9.7-256 9.7-273.9V230h35c19.3 0 35 .4 35 .8 0 1.6-20.9 255.6-21.4 259.4l-.4 3.7 4.8-1.9c8.5-3.4 27.1-13 36.9-19.2 16.5-10.4 28.1-19.8 44.2-35.8 22.5-22.4 36.2-41.4 49.4-68.5 12.5-25.6 19.3-47.1 23.6-75.6 3.2-20.5 3.2-53.3 0-73.8-2.6-17-7.6-37.1-12.6-50.7-4.6-12.5-16.8-37.6-23.1-47.4-20.5-32.2-50.2-61.9-82.4-82.4-9.8-6.3-34.9-18.5-47.4-23.1C323.9 8.3 295 2.2 272 .7l-7.5-.6 7.5 2.3c17.5 5.2 30.6 16 38.2 31.4 2.7 5.4 3.5 6.3 5.2 5.7 1.2-.3 5.7-.8 10.1-1.1 10.3-.7 20.6 1.4 30.5 6.2 13.8 6.8 27 22.7 30.9 37 1 3.7 1.5 4.2 6.4 5.7 15 4.7 30.2 19.9 36.2 36 1.3 3.5 2.9 5.6 5.4 7.2 12.9 8.1 22.1 25.2 22.1 40.9 0 2.2-.3 5.1-.6 6.3l-.6 2.3H71v-8.8c0-9.1 1.5-15.3 5.7-23.7 1.1-2.2 2.3-6.8 2.6-10.2 1.8-17.6 12.2-34.2 27.8-44.3 3.4-2.2 8.6-4.8 11.6-5.7 4.9-1.5 5.4-2 6.4-5.7 3.9-14.3 17.1-30.2 30.9-37 9.9-4.8 20.2-6.9 30.5-6.2 4.4.3 8.9.8 10.1 1.1 1.7.6 2.5-.3 5.2-5.7 7.6-15.4 20.7-26.2 38.2-31.4 8.2-2.5 8-2.5-5.9-1.3z"/></svg>
                </a>
            </li>
            <li class="ml-5">
                <a href="{{route('home.filmes.index')}}" class="hover:!text-gray-300">Filmes</a>
            </li>
        </ul>
        <div class="flex items-center">
            <livewire:search-dropdown></livewire:search-dropdown>
        </div>
    </div>
</nav>
@yield('content')
@livewireScripts
</body>
</html>
