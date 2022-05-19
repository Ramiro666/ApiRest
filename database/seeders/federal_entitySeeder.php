<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class federal_entitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('federal_entity')->insert([
            [
                'key' => '01',
                'name' => 'Aguascalientes',
                'code' => ''   
            ],
            [
                'key' => '02',
                'name' => 'Baja California' ,
                'code' => ''  
             ],
             [
                'key' => '03',
                'name' => 'Baja California Sur' ,
                'code' => ''  
             ],
             [
                'key' => '04',
                'name' => 'Campeche',
                'code' => ''  
            ],
            [
                'key' => '05',
                'name' => 'Coahuila de Zaragoza',
                'code' => ''   
             ],
             [
                'key' => '06',
                'name' => 'Colima',
                'code' => ''  
             ],
             [
                'key' => '07',
                'name' => 'Chiapas',
                'code' => ''   
            ],
            [
                'key' => '08',
                'name' => 'Chihuahua',
                'code' => ''               
            ],
            [
                'key' => '09',
                'name' => 'Ciudad de México',
                'code' => ''  
            ],
             [
                'key' => '10',
                'name' => 'Durango',
                'code' => ''   
            ],
            [
                'key' => '11',
                'name' => 'Guanajuato',
                'code' => ''  
            ],
            [
                'key' => '12',
                'name' => 'Guerrero',
                'code' => ''  
            ],
            [
                'key' => '13',
                'name' => 'Hidalgo',
                'code' => ''  
            ],
            [
                'key' => '14',
                'name' => 'Jalisco',
                'code' => ''  
            ],
            [
                'key' => '15',
                'name' => 'México',
                'code' => ''  
            ],
            [
                'key' => '16',
                'name' => 'Michoacán de Ocampo',
                'code' => ''  
            ],
            [
                'key' => '17',
                'name' => 'Morelos',
                'code' => ''  
            ],
            [
                'key' => '18',
                'name' => 'Nayarit',
                'code' => ''  
            ],
            [
                'key' => '19',
                'name' => 'Nuevo León',
                'code' => ''  
            ],
            [
                'key' => '20',
                'name' => 'Oaxaca',
                'code' => ''  
            ], 
            [
                'key' => '21',
                'name' => 'Puebla',
                'code' => ''  
            ],
            [
                'key' => '22',
                'name' => 'Querétaro',
                'code' => ''  
            ],
            [
                'key' => '23',
                'name' => 'Quintana Roo',
                'code' => ''  
            ],
            [
                'key' => '24',
                'name' => 'San Luis Potosí',
                'code' => ''
            ],
            [
                'key' => '25',
                'name' => 'Sinaloa',
                'code' => ''
            ],
            [
                'key' => '26',
                'name' => 'Sonora',
                'code' => ''
            ],
            [
                'key' => '27',
                'name' => 'Tabasco',
                'code' => ''
            ],
            [
                'key' => '28',
                'name' => 'Tamaulipas',
                'code' => ''
            ],
            [
                'key' => '29',
                'name' => 'Tlaxcala',
                'code' => ''
            ],
            [
                'key' => '30',
                'name' => 'Veracruz de Ignacio de la Llave',
                'code' => ''
            ],
            [
                'key' => '31',
                'name' => 'Yucatán',
                'code' => ''
            ],
            [
                'key' => '32',
                'name' => 'Zacatecas',
                'code' => ''
            ],
            // estados de baja california
          
        ]);
    }
}
