<div class="relative">
    <input wire:model.debounce.500ms="buscar" type="text" class="bg-purple-800 text-sm rounded-full w-64 pl-8 py-1 focus:outline-none focus:shadow-outline"
           placeholder="Buscar">
    <div class="absolute top-0">
        <svg class="fill-current w-4 mt-2 ml-2 text-purple-500 " viewBox="0 0 52.966 52.966">
            <path
                d="M51.704 51.273L36.845 35.82c3.79-3.801 6.138-9.041 6.138-14.82 0-11.58-9.42-21-21-21s-21 9.42-21 21 9.42 21 21 21c5.083 0 9.748-1.817 13.384-4.832l14.895 15.491a.998.998 0 001.414.028 1 1 0 00.028-1.414zM21.983 40c-10.477 0-19-8.523-19-19s8.523-19 19-19 19 8.523 19 19-8.524 19-19 19z"/>
        </svg>
    </div>
    @if(strlen($buscar) >= 2)
    <div class="absolute bg-purple-800 text-sm rounded w-64 mt-4">
        @if($resultadoBusca->count() > 0)
            <ul>
                @foreach($resultadoBusca as $busca)
                    <li class="border-b border-purple-700">
                        <a href="{{route('home.filmes.show',$busca['id'])}}" class="block hover:bg-purple-700 px-3 py-3 flex items-center">
                            <img class="w-8" src="https://image.tmdb.org/t/p/w92/{{$busca['poster_path']}}" alt="poster">
                            <span class="ml-4">{{$busca['title']}}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        @else
            <div class="px-3 py-3">Nenhum resultado Encontrado para "{{$buscar}}"</div>
        @endif
    </div>
    @endif
</div>
