<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Correr Seeder de CategoriasSeeder
        $this->call(CategoriasSeeder::class);
        $this->call(ProveedorSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
