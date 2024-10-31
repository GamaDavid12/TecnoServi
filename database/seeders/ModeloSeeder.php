<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Modelo;

class ModeloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Modelo::create ([
            'nombre' => 'Fiesta',
            'marca_id' => 1]);

        Modelo::create ([
            'nombre' => 'Ranger',
            'marca_id' => 1]);

        Modelo::create ([
            'nombre' => 'Cronos',
            'marca_id' => 2]);
            
        Modelo::create ([
            'nombre' => 'Partner',
            'marca_id' => 3]);
    }
}
