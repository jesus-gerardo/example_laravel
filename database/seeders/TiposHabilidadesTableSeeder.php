<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Models\TiposHabilidades;

class TiposHabilidadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        TiposHabilidades::create([
            'descripcion' => 'profesional'
        ]);
        TiposHabilidades::create([
            'descripcion' => 'personal'
        ]);
        TiposHabilidades::create([
            'descripcion' => 'recreativa'
        ]);
    }
}
