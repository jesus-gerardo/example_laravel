<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Models\Roles;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Roles::create([
            'descripcion' => 'invitado'
        ]);
        Roles::create([
            'descripcion' => 'usuario'
        ]);
        Roles::create([
            'descripcion' => 'administrador'
        ]);
    }
}
