<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Models\Paises;

class PaisesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Paises::create([
            'descripcion' => 'España'
        ]);
        Paises::create([
            'descripcion' => 'Estados Unidos'
        ]);
        Paises::create([
            'descripcion' => 'China'
        ]);
        Paises::create([
            'descripcion' => 'Japon'
        ]);
        Paises::create([
            'descripcion' => 'Rusia'
        ]);
        Paises::create([
            'descripcion' => 'Italia'
        ]);
        Paises::create([
            'descripcion' => 'Mexico'
        ]);
    }
}
