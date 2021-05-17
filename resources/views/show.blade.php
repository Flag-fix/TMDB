@extends('layouts.main')

@section('content')
    <div class="informacoes-filme border-b border-purple-800">
        <div class="container mx-auto px-4 py-16 flex">
            <img class="w-96" src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcS1nI_Z3FYp-mE3L83VBWb60wJpbzFcK2we7_ZeV0W0yLgjE-x3" alt="Velozes e Furiosos">
            <div class="ml-20">
                <h2 class="text-4xl font-semibold">Velozes e Furiosos (2022)</h2>
                <div class="flex items-center text-purple-400 text-sm">
                    <svg class="fill-current text-orange-500 w-4" viewBox="0 0 511.999 511.999"><path d="M452.71 157.937l-133.741-12.404L265.843 22.17c-3.72-8.638-15.967-8.638-19.686 0l-53.126 123.362L59.29 157.937c-9.365.868-13.149 12.516-6.084 18.723l100.908 88.646-29.531 131.029c-2.068 9.175 7.841 16.373 15.927 11.572L256 339.331l115.49 68.576c8.087 4.802 17.994-2.397 15.927-11.572l-29.532-131.029 100.909-88.646c7.065-6.207 3.28-17.855-6.084-18.723z" fill="#ffdc64"/><g fill="#fff082"><path d="M119.278 17.923c6.818 9.47 26.062 50.14 37.064 73.842 1.73 3.726-2.945 7.092-5.93 4.269-18.987-17.952-51.452-49.104-58.27-58.575-5.395-7.493-3.694-17.941 3.8-23.336 7.493-5.395 17.941-3.693 23.336 3.8zM392.722 17.923c-6.818 9.47-26.062 50.14-37.064 73.842-1.73 3.726 2.945 7.092 5.93 4.269 18.987-17.952 51.451-49.105 58.27-58.575 5.395-7.493 3.694-17.941-3.8-23.336-7.493-5.395-17.941-3.693-23.336 3.8zM500.461 295.629c-11.094-3.618-55.689-9.595-81.612-12.875-4.075-.516-5.861 4.961-2.266 6.947 22.873 12.635 62.416 34.099 73.51 37.717 8.778 2.863 18.215-1.932 21.078-10.711 2.863-8.779-1.932-18.215-10.71-21.078zM11.539 295.629c11.094-3.618 55.689-9.595 81.612-12.875 4.075-.516 5.861 4.961 2.266 6.947-22.873 12.635-62.416 34.099-73.51 37.717-8.778 2.863-18.215-1.932-21.078-10.711s1.932-18.215 10.71-21.078zM239.794 484.31c0-11.669 8.145-55.919 13.065-81.582.773-4.034 6.534-4.034 7.307 0 4.92 25.663 13.065 69.913 13.065 81.582 0 9.233-7.485 16.718-16.718 16.718-9.234.001-16.719-7.485-16.719-16.718z"/></g><path d="M285.161 67.03l-19.319-44.86c-3.72-8.638-15.967-8.638-19.686 0L193.03 145.532 59.29 157.937c-9.365.868-13.149 12.516-6.084 18.723l100.908 88.646-29.531 131.029c-2.068 9.175 7.841 16.373 15.927 11.572l15.371-9.127c25.199-163.12 96.041-282.862 129.28-331.75z" fill="#ffc850"/></svg>
                    <span class="ml-1">99%</span>
                    <span class="mx-2">|</span>
                    <span>25 Janeiro, 2022</span>
                    <span class="mx-2">|</span>
                    <span>Ação, Emoção, Comédia</span>
                </div>
                <p class="text-purple-300 mt-8">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>

                <div class="mt-12">
                    <h4 class="text-white font-semibold">Sinopse</h4>
                    <div class="flex mt-4">
                        <div>
                            <div>Bonfg Binga Bonga</div>
                            <div class="text-sm text-purple-400">Screen Diretor storua</div>
                        </div>
                        <div class="ml-8">
                            <div>Han Nan Jhon</div>
                            <div class="text-sm text-purple-400">Screen Play</div>
                        </div>
                    </div>
                </div>
                <div class="mt-12">
                    <button class="flex inline-flex items-center bg-green-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150">
                        <svg class="w-6 fill-current" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M10 16.5l6-4.5-6-4.5v9zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/></svg>
                        <span class="ml-2">Trailer</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="movie-cast border-b border-purple-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Atores</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
            </div>
        </div>
    </div> <!-- end movie-cast -->
@endsection
