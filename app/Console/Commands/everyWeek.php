<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\PokemonController;

class everyWeek extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'month:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This  will update the pokemons table';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $PokemonController = new PokemonController();
        $this->$PokemonController->store();
    }
}
