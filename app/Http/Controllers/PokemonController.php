<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PokemonController extends Controller
{
    //
    public function store()
    {
        $api_url = 'https://pokeapi.co/api/v2/pokemon/';
        
       for ($i=1; $i<= 151; $i++ ){

            $response = Http::get($api_url.$i);
            $pokemon = json_decode($response, true);
            //$pokemon = (array)$pokemon;
        
            //dd($pokemon);
        
                
            Pokemon::updateOrCreate(
                ['name' => $pokemon['name']],
                [
                    'name' => $pokemon['name'],
                    'height' => $pokemon['height'],
                    'weight' => $pokemon['weight'],
                    'type' => $pokemon['types'][0]['type']['name'],
                    'speed' => $pokemon['stats'][5]['base_stat'],
                    'special-defence' => $pokemon['stats'][4]['base_stat'],
                    'special-attack' => $pokemon['stats'][3]['base_stat'],
                    'defence' => $pokemon['stats'][2]['base_stat'],
                    'attack' => $pokemon['stats'][1]['base_stat'],
                    'hp' => $pokemon['stats'][0]['base_stat'],
                    'move' => $pokemon['moves'][0]['move']['name'],
                    'img_url' => $pokemon['sprites']['front_default']
                ]);
        }
        dd("data stored");

        
    }
}
