<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;


class SearchDropdown extends Component
{
    public $buscar = '';

    public function render()
    {
        $resultadoBusca = [];

        if(strlen($this->buscar) >= 2){
            $api_key= config('services.tmdb.api_key');
            $query = '&query=';
            $resultadoBusca = Http::get('https://api.themoviedb.org/3/search/movie/'.$api_key.$query.$this->buscar)
                ->json(['results']);
        }
        return view('livewire.search-dropdown',[
            'resultadoBusca' => collect($resultadoBusca)->take(7),
        ]);
    }
}
