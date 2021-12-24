<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Categoria_proveedors')->insert([
            'nombre'=> 'Troquel', 
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('Categoria_proveedors')->insert([
            'nombre'=> 'Prensa', 
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('Categoria_proveedors')->insert([
            'nombre'=> 'Sierra', 
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('Categoria_proveedors')->insert([
            'nombre'=> 'Guillotina', 
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('Categoria_proveedors')->insert([
            'nombre'=> 'Roladora', 
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('Categoria_proveedors')->insert([
            'nombre'=> 'Laser', 
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('Categoria_proveedors')->insert([
            'nombre'=> 'Compresor', 
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('Categoria_proveedors')->insert([
            'nombre'=> 'Selladora', 
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('Categoria_proveedors')->insert([
            'nombre'=> 'Fresadora', 
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('Categoria_proveedors')->insert([
            'nombre'=> 'Rectificadora', 
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('Categoria_proveedors')->insert([
            'nombre'=> 'Sierra Cinta', 
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('Categoria_proveedors')->insert([
            'nombre'=> 'Grabadora Laser', 
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('Categoria_proveedors')->insert([
            'nombre'=> 'Soldadora Laser', 
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('Categoria_proveedors')->insert([
            'nombre'=> 'Robot', 
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('Categoria_proveedors')->insert([
            'nombre'=> 'Torno', 
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('Categoria_proveedors')->insert([
            'nombre'=> 'Transformador', 
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
