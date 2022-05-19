<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class municipalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('municipality')->insert([
            [
                'key' => '001',
                'name' => 'Aguascalientes',
                'postal_id' => '1'  
            ]
    // ,
    //         [
    //             'key' => '002',
    //             'name' => 'Asientos',
    //             'postal_id' => '1' 
    //          ],
    //          [
    //             'key' => '003',
    //             'name' => 'Calvillo', 
    //             'postal_id' => '1' 
    //          ],
    //          [
    //             'key' => '004',
    //             'name' => 'Cosío',
    //             'postal_id' => '1'  
    //         ],
    //         [
    //             'key' => '005',
    //             'name' => 'Jesús María',
    //             'postal_id' => '1'  
    //          ],
    //          [
    //             'key' => '006',
    //             'name' => 'Pabellón de Arteaga',
    //             'postal_id' => '1' 
    //          ],
    //          [
    //             'key' => '007',
    //             'name' => 'Rincón de Romos', 
    //             'postal_id' => '1' 
    //         ],
    //         [
    //             'key' => '008',
    //             'name' => 'San José de Gracia', 
    //             'postal_id' => '1'                
    //         ],
    //         [
    //             'key' => '009',
    //             'name' => 'Tepezalá', 
    //             'postal_id' => '1' 
    //         ],
    //          [
    //             'key' => '010',
    //             'name' => 'El Llano', 
    //             'postal_id' => '1'   
    //         ],
    //         [
    //             'key' => '011',
    //             'name' => 'San Francisco de los Romo', 
    //             'postal_id' => '1' 
    //         ],
    //         // municipios de baja_california
    //         [
    //             'key' => '001',
    //             'name' => 'Ensenada', 
    //             'postal_id' => '1' 
    //         ],
    //         [
    //             'key' => '002',
    //             'name' => 'Mexicali', 
    //             'postal_id' => '1' 
    //         ],
    //         [
    //             'key' => '003',
    //             'name' => 'Tecate', 
    //             'postal_id' => '1' 
    //         ],
    //         [
    //             'key' => '004',
    //             'name' => 'Tijuana', 
    //             'postal_id' => '1' 
    //         ],
    //         [
    //             'key' => '005',
    //             'name' => 'Playas de Rosarito', 
    //             'postal_id' => '1' 
    //         ],
    //         [
    //             'key' => '006',
    //             'name' => 'San Quitin', 
    //             'postal_id' => '1' 
    //         ],
    //         [
    //             'key' => '007',
    //             'name' => 'San Felipe', 
    //             'postal_id' => '1' 
    //         ],
    //         // municipio de baja_california_sur
    //         [
    //             'key' => '001',
    //             'name' => 'Comondu', 
    //             'postal_id' => '1' 
    //         ],
    //         [
    //             'key' => '002',
    //             'name' => 'Mulege', 
    //             'postal_id' => '1' 
    //         ],
    //         [
    //             'key' => '003',
    //             'name' => 'La Paz', 
    //             'postal_id' => '1' 
    //         ],
    //         [
    //             'key' => '008',
    //             'name' => 'Los Cabos', 
    //             'postal_id' => '1' 
    //         ],
    //         [
    //             'key' => '009',
    //             'name' => 'Loreto', 
    //             'postal_id' => '1' 
    //         ],
    //     // municipio de capenche
    //     [
    //         'key' => '001',
    //         'name' => 'Calkini', 
    //         'postal_id' => '1' 
    //     ],
    //     [
    //         'key' => '002',
    //         'name' => 'Campenche', 
    //         'postal_id' => '1' 
    //     ],
    //     [
    //         'key' => '003',
    //         'name' => 'Carmen', 
    //         'postal_id' => '1' 
    //     ],
    //     [
    //         'key' => '004',
    //         'name' => 'Champoton', 
    //         'postal_id' => '1' 
    //     ],
    //     [
    //         'key' => '005',
    //         'name' => 'Hecelchakan', 
    //         'postal_id' => '1' 
    //     ],
    //     [
    //         'key' => '006',
    //         'name' => 'Hopelchen', 
    //         'postal_id' => '1' 
    //     ],
    //     [
    //         'key' => '007',
    //         'name' => 'Palizada', 
    //         'postal_id' => '1' 
    //     ],
    //     [
    //         'key' => '008',
    //         'name' => 'Tenabo', 
    //         'postal_id' => '1' 
    //     ],
    //     [
    //         'key' => '009',
    //         'name' => 'Escarcega', 
    //         'postal_id' => '1' 
    //     ],
    //     [
    //         'key' => '010',
    //         'name' => 'Calakmul', 
    //         'postal_id' => '1' 
    //     ],
    //     [
    //         'key' => '011',
    //         'name' => ' Candelaria', 
    //         'postal_id' => '1' 
    //     ],
    //     [
    //         'key' => '012',
    //         'name' => 'Seybaplaya', 
    //         'postal_id' => '1' 
    //     ],
    //     [
    //         'key' => '013',
    //         'name' => 'Dzitbalche', 
    //         'postal_id' => '1' 
    //     ],
    //     // municipio de cuajila de zaragoza
    //     [
    //         'key' => '030',
    //         'name' => 'Saltillo', 
    //         'postal_id' => '1' 
    //     ],
    //     [
    //         'key' => '004',
    //         'name' => 'Arteaga', 
    //         'postal_id' => '1' 
    //     ],
    //     [
    //         'key' => '015',
    //         'name' => 'Juarez', 
    //         'postal_id' => '1' 
    //     ],
    //     [
    //         'key' => '026',
    //         'name' => 'Progreso', 
    //         'postal_id' => '1' 
    //     ],
    //     [
    //         'key' => '008',
    //         'name' => 'Escobedo', 
    //         'postal_id' => '1' 
    //     ],
    //     [
    //         'key' => '031',
    //         'name' => 'San Buenaventura', 
    //         'postal_id' => '1' 
    //     ],
    //     [
    //         'key' => '001',
    //         'name' => 'Abasolo', 
    //         'postal_id' => '1' 
    //     ],
    //     [
    //         'key' => '005',
    //         'name' => 'Candela', 
    //         'postal_id' => '1' 
    //     ],
    //     [
    //         'key' => '010',
    //         'name' => 'Frontera', 
    //         'postal_id' => '1' 
    //     ],
    //     [
    //         'key' => '018',
    //         'name' => 'Monclova', 
    //         'postal_id' => '1' 
    //     ],
    //     [
    //         'key' => '006',
    //         'name' => 'Castaños', 
    //         'postal_id' => '1' 
    //     ],
    //     [
    //         'key' => '027',
    //         'name' => 'Ramos Arizpe', 
    //         'postal_id' => '1' 
    //     ],
    //     [
    //         'key' => '025',
    //         'name' => 'Piedras Negras', 
    //         'postal_id' => '1' 
    //     ],
    //     [
    //         'key' => '022',
    //         'name' => 'Nava', 
    //         'postal_id' => '1' 
    //     ],
    //     [
    //         'key' => '002',
    //         'name' => 'Acuña', 
    //         'postal_id' => '1' 
    //     ],
    //     [
    //         'key' => '020',
    //         'name' => 'Muzquiz', 
    //         'postal_id' => '1' 
    //     ],
    //     [
    //         'key' => '014',
    //         'name' => 'Jimenez', 
    //         'postal_id' => '1' 
    //     ],
    //     [
    //         'key' => '038',
    //         'name' => 'Zaragoza', 
    //         'postal_id' => '1' 
    //     ],
    //     [
    //         'key' => '018',
    //         'name' => 'Morelos', 
    //         'postal_id' => '1' 
    //     ],
    //     [
    //         'key' => '003',
    //         'name' => 'Allende', 
    //         'postal_id' => '1' 
    //     ],
    //     [
    //         'key' => '037',
    //         'name' => 'Villa Union', 
    //         'postal_id' => '1' 
    //     ],
    //     [
    //         'key' => '012',
    //         'name' => 'Guerrero', 
    //         'postal_id' => '1' 
    //     ],
    //     [
    //         'key' => '013',
    //         'name' => 'Hidalgo', 
    //         'postal_id' => '1' 
    //     ],
    //     [
    //         'key' => '028',
    //         'name' => 'Sabinas', 
    //         'postal_id' => '1' 
    //     ],
    //     [
    //         'key' => '032',
    //         'name' => 'San Juan de Sabinas', 
    //         'postal_id' => '1' 
    //     ],
    //     [
    //         'key' => '035',
    //         'name' => 'Torreon', 
    //         'postal_id' => '1' 
    //     ],
    //     [
    //         'key' => '017',
    //         'name' => 'Matamoros', 
    //         'postal_id' => '1' 
    //     ],
    //     [
    //         'key' => '036',
    //         'name' => 'Viesca', 
    //         'postal_id' => '1' 
    //     ],
    //     [
    //         'key' => '023',
    //         'name' => 'Ocampo', 
    //         'postal_id' => '1' 
    //     ],
    //     [
    //         'key' => '021',
    //         'name' => 'Nadadores', 
    //         'postal_id' => '1' 
    //     ],
    //     [
    //         'key' => '034',
    //         'name' => 'Sierra Mojada', 
    //         'postal_id' => '1' 
    //     ],
    //     [
    //         'key' => '007',
    //         'name' => 'Cuatro Cienegas', 
    //         'postal_id' => '1' 
    //     ],
    //     [
    //         'key' => '016',
    //         'name' => 'Lamadrid', 
    //         'postal_id' => '1' 
    //     ],
    //     [
    //         'key' => '029',
    //         'name' => 'Sacramento', 
    //         'postal_id' => '1' 
    //     ],
    //     [
    //         'key' => '033',
    //         'name' => 'San Pedro', 
    //         'postal_id' => '1' 
    //     ],
    //     [
    //         'key' => '009',
    //         'name' => 'Francisco I. Madero', 
    //         'postal_id' => '1' 
    //     ],
    //     [
    //         'key' => '024',
    //         'name' => 'Parras', 
    //         'postal_id' => '1' 
    //     ],
    // // municipio de colima
    // [
    //     'key' => '001',
    //     'name' => 'Armeria', 
    //     'postal_id' => '1' 
    // ],
    // [
    //     'key' => '002',
    //     'name' => 'Colima', 
    //     'postal_id' => '1' 
    // ],
    // [
    //     'key' => '003',
    //     'name' => 'Comala', 
    //     'postal_id' => '1' 
    // ],
    // [
    //     'key' => '004',
    //     'name' => 'Coquimatlan', 
    //     'postal_id' => '1' 
    // ],
    // [
    //     'key' => '005',
    //     'name' => 'Cauhtemoc', 
    //     'postal_id' => '1' 
    // ],
    // [
    //     'key' => '006',
    //     'name' => 'Ixtlahuacán', 
    //     'postal_id' => '1' 
    // ],
    // [
    //     'key' => '007',
    //     'name' => 'Manzanillo', 
    //     'postal_id' => '1' 
    // ],
    // [
    //     'key' => '008',
    //     'name' => 'Minatitlan', 
    //     'postal_id' => '1' 
    // ],
    // [
    //     'key' => '009',
    //     'name' => 'Tecoman', 
    //     'postal_id' => '1' 
    // ],
    // [
    //     'key' => '010',
    //     'name' => 'Villa de Alvarez', 
    //     'postal_id' => '1' 
    // ]
    // municipio de chiapas 
    
    
    
             
        ]);
    }
}
