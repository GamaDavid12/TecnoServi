<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vehiculo;

class VehiculoSeeder extends Seeder
{
    public function run(): void
    {
        Vehiculo::create ([
            'patente' => 'ABC123',
            'chasis' => 'asd1a3sd5g45rff2v',
            'modelo_id' => 1
        ]);

        Vehiculo::create ([
            'patente' => 'ABC456',
            'chasis' => 'asd1a3sdds4fhg56d4sh5f5rff2v',
            'modelo_id' => 2
        ]);

        Vehiculo::create ([
            'patente' => 'ABC789',
            'chasis' => 'uytga3sdds4fhg56d4sh5f5rff2v',
            'modelo_id' => 3
        ]);

        Vehiculo::create ([
            'patente' => 'aa456bm',
            'chasis' => 'asd1a3sdds4flcdkfhdhnjfghg56d4sh5f5rff2v',
            'modelo_id' => 4
        ]);
    }
}
