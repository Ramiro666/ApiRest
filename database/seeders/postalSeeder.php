<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class postalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('postal')->insert([
            [
                'zip_code' => '20000',
                'locality' => 'Aguascalientes',
                'settlements_id' => '1',
                'federal_entity_id' => '1'  
            ],
            [
                'zip_code' => '20010',
                'locality' => 'Aguascalientes',
                'settlements_id' => '2',
                'federal_entity_id' => '1'  
             ],
             [
                'zip_code' => '20010',
                'locality' => 'Aguascalientes',
                'settlements_id' => '3',
                'federal_entity_id' => '1'  
             ],
             [
                'zip_code' => '20010',
                'locality' => 'Aguascalientes',
                'settlements_id' => '4',
                'federal_entity_id' => '1'   
            ],
            [
                'zip_code' => '20010',
                'locality' => 'Aguascalientes',
                'settlements_id' => '5',
                'federal_entity_id' => '1'   
             ],
             [
                'zip_code' => '20010',
                'locality' => 'Aguascalientes',
                'settlements_id' => '6',
                'federal_entity_id' => '1'    
             ],
             [
                'zip_code' => '20016',
                'locality' => 'Aguascalientes',
                'settlements_id' => '7',
                'federal_entity_id' => '1'     
            ],
            [
                'zip_code' => '20016',
                'locality' => 'Aguascalientes',
                'settlements_id' => '8',
                'federal_entity_id' => '1'             
            ],
            [
                'zip_code' => '20016',
                'locality' => 'Aguascalientes',
                'settlements_id' => '9',
                'federal_entity_id' => '1'
            ],
             [
                'zip_code' => '20016',
                'locality' => 'Aguascalientes',
                'settlements_id' => '10',
                'federal_entity_id' => '1'  
            ],
            [
                'zip_code' => '20018',
                'locality' => 'Aguascalientes',
                'settlements_id' => '11',
                'federal_entity_id' => '1' 
            ],
            [
                'zip_code' => '20020',
                'locality' => 'Aguascalientes',
                'settlements_id' => '12',
                'federal_entity_id' => '1'
            ],
            [
                'zip_code' => '20020',
                'locality' => 'Aguascalientes',
                'settlements_id' => '13',
                'federal_entity_id' => '1' 
            ],
            [
                'zip_code' => '20020',
                'locality' => 'Aguascalientes',
                'settlements_id' => '14',
                'federal_entity_id' => '1' 
            ],
            [
                'zip_code' => '20020',
                'locality' => 'Aguascalientes',
                'settlements_id' => '15',
                'federal_entity_id' => '1'
            ],
            [
                'zip_code' => '20029',
                'locality' => 'Aguascalientes',
                'settlements_id' => '16',
                'federal_entity_id' => '1' 
            ],
            [
                'zip_code' => '20030',
                'locality' => 'Aguascalientes',
                'settlements_id' => '17',
                'federal_entity_id' => '1' 
            ],
            [
                'zip_code' => '20030',
                'locality' => 'Aguascalientes',
                'settlements_id' => '18',
                'federal_entity_id' => '1'  
            ],
            [
                'zip_code' => '20030',
                'locality' => 'Aguascalientes',
                'settlements_id' => '19',
                'federal_entity_id' => '1'
            ],
            [
                'zip_code' => '20040',
                'locality' => 'Aguascalientes',
                'settlements_id' => '20',
                'federal_entity_id' => '1' 
            ], 
            [
                'zip_code' => '20040',
                'locality' => 'Aguascalientes',
                'settlements_id' => '21',
                'federal_entity_id' => '1'  
            ],
            [
                'zip_code' => '20040',
                'locality' => 'Aguascalientes',
                'settlements_id' => '22',
                'federal_entity_id' => '1'
            ],
            [
                'zip_code' => '20040',
                'locality' => 'Aguascalientes',
                'settlements_id' => '23',
                'federal_entity_id' => '1' 
            ],
            [
                'zip_code' => '20040',
                'locality' => 'Aguascalientes',
                'settlements_id' => '25',
                'federal_entity_id' => '1'
            ],
            [
                'zip_code' => '20040',
                'locality' => 'Aguascalientes',
                'settlements_id' => '26',
                'federal_entity_id' => '1'
            ],
            [
                'zip_code' => '20049',
                'locality' => 'Aguascalientes',
                'settlements_id' => '27',
                'federal_entity_id' => '1'
            ],
            [
                'zip_code' => '20050',
                'locality' => 'Aguascalientes',
                'settlements_id' => '28',
                'federal_entity_id' => '1'
            ],
            [
                'zip_code' => '20050',
                'locality' => 'Aguascalientes',
                'settlements_id' => '29',
                'federal_entity_id' => '1'
            ],
            [
                'zip_code' => '20050',
                'locality' => 'Aguascalientes',
                'settlements_id' => '30',
                'federal_entity_id' => '1'
            ],
            [
                'zip_code' => '20050',
                'locality' => 'Aguascalientes',
                'settlements_id' => '31',
                'federal_entity_id' => '1'
            ],
            [
                'zip_code' => '20050',
                'locality' => 'Aguascalientes',
                'settlements_id' => '32',
                'federal_entity_id' => '1'
            ],
            [
                'zip_code' => '20050',
                'locality' => 'Aguascalientes',
                'settlements_id' => '33',
                'federal_entity_id' => '1'
            ]
        ]);
    }
}
