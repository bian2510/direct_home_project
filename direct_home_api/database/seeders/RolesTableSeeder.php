<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $inmobiliaria = new Role();
        $inmobiliaria->role = "inmobiliaria";
        $inmobiliaria->save();

        $propietario = new Role();
        $propietario->role = "propietario";
        $propietario->save();
    }
}
