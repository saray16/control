<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Llama a tu seeder de formaciones
        $this->call(FormacionSeeder::class);

        // Puedes agregar aquí otras llamadas a seeders si tienes
        // $this->call(OtroSeeder::class);
    }
}
