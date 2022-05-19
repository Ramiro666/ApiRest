<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class settlement_typeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settlement_type')->insert([
            [
                'name' => 'Colonia'
               
            ],
            [
               'name' => 'Fraccionamiento'
            ],
             [
                'name' => 'Unidad habitacional'
               
            ],
             [
                'name' => 'Barrio'
            ],
             [
                'name' => 'Condominio'
               
            ],
             [
                'name' => 'Equipamiento'              
            ],
             [
                'name' => 'Zona comercial'
            ],
             [
                'name' => 'Rancho'
             ],
             [
                 'name' => 'Ranchería'
             ],
             [
                 'name' => 'Granja'
             ],
             [
                 'name' => 'Pueblo'
             ],
             [
                 'name' => 'Ejido'
             ],
             [
                 'name' => 'Zona federal'
             ],
             [
                 'name' => 'Zona industrial'
             ],
             [
                 'name' => 'Aeropuerto'
             ],
             [
                 'name' => 'Hacienda'
             ],
             [
                 'name' => 'Paraje'
             ]
             
        ]);
    }
}
