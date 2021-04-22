<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Models\Habilidades;

class HabilidadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Habilidades::create([
            'descripcion' => 'paciente',
            'tipo_habilidad_id' => 1
        ]);
        Habilidades::create([
            'descripcion' => 'tolerante',
            'tipo_habilidad_id' => 1
        ]);
        Habilidades::create([
            'descripcion' => 'trabajo en equipo',
            'tipo_habilidad_id' => 1
        ]);
        Habilidades::create([
            'descripcion' => 'adaptable',
            'tipo_habilidad_id' => 1
        ]);
        Habilidades::create([
            'descripcion' => 'sociable',
            'tipo_habilidad_id' => 1
        ]);
        Habilidades::create([
            'descripcion' => 'comunicativo',
            'tipo_habilidad_id' => 1
        ]);
        Habilidades::create([
            'descripcion' => 'creativo',
            'tipo_habilidad_id' => 2
        ]);
        Habilidades::create([
            'descripcion' => 'autodidacta',
            'tipo_habilidad_id' => 2
        ]);
        Habilidades::create([
            'descripcion' => 'perseverante',
            'tipo_habilidad_id' => 2
        ]);
    }
}
