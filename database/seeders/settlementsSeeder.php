<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class settlementsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settlements')->insert([
            [
                'key' => '09',
                'name' => 'Aguascalientes Centro',
                'zone_type' => 'Urbano' ,
                'settlement_type_id' => '1'  
            ],
            [
                'key' => '21',
                'name' => 'Colinas del Rio',
                'zone_type' => 'Urbano' ,
                'settlement_type_id' => '2'  
            ],
            
            [
                'key' => '09',
                'name' => 'Olivares Santana',
                'zone_type' => 'Urbano' ,
                'settlement_type_id' => '1'  
            ],
            [
                'key' => '21',
                'name' => 'Las Brisas',
                'zone_type' => 'Urbano' ,
                'settlement_type_id' => '1'  
            ],
             [
                'key' => '21',
                'name' => 'Ramon Romo Franco',
                'zone_type' => 'Urbano' ,
                'settlement_type_id' => '1'  
            ],
            [
                'key' => '21',
                'name' => 'San Cayetano',
                'zone_type' => 'Urbano' ,
                'settlement_type_id' => '1'  
            ],
            [
                'key' => '21',
                'name' => 'Colinas de San Ignacio',
                'zone_type' => 'Urbano' ,
                'settlement_type_id' => '1'  
            ],
            [
                'key' => '21',
                'name' => 'La Fundición',
                'zone_type' => 'Urbano' ,
                'settlement_type_id' => '1'  
            ],
            [
                'key' => '21',
                'name' => 'Fundición II',
                'zone_type' => 'Urbano' ,
                'settlement_type_id' => '1'  
            ],
             [
                'key' => '21',
                'name' => 'Los Sauces',
                'zone_type' => 'Urbano' ,
                'settlement_type_id' => '2'  
            ],
            [
                'key' => '09',
                'name' => 'Línea de Fuego',
                'zone_type' => 'Urbano' ,
                'settlement_type_id' => '1'  
            ],
            [
                'key' => '21',
                'name' => 'Buenos Aires',
                'zone_type' => 'Urbano' ,
                'settlement_type_id' => '1'  
            ],
            [
                'key' => '21',
                'name' => 'Circunvalación Norte',
                'zone_type' => 'Urbano' ,
                'settlement_type_id' => '2'  
            ],
            [
                'key' => '21',
                'name' => 'Las Arboledas',
                'zone_type' => 'Urbano' ,
                'settlement_type_id' => '2'  
            ],
            [
                'key' => '21',
                'name' => 'Villas de San Francisco',
                'zone_type' => 'Urbano' ,
                'settlement_type_id' => '2'  
            ],
            [
                'key' => '21',
                'name' => 'El Sol',
                'zone_type' => 'Urbano' ,
                'settlement_type_id' => '2'  
            ],
            [
                'key' => '09',
                'name' => 'Gremial',
                'zone_type' => 'Urbano' ,
                'settlement_type_id' => '1'  
            ],
            [
                'key' => '09',
                'name' => 'Industrial',
                'zone_type' => 'Urbano' ,
                'settlement_type_id' => '1'  
            ],
            [
                'key' => '09',
                'name' => 'Altavista',
                'zone_type' => 'Urbano' ,
                'settlement_type_id' => '1'  
            ],
            [
                'key' => '21',
                'name' => 'La Concordia',
                'zone_type' => 'Urbano' ,
                'settlement_type_id' => '2'  
            ],
            [
                'key' => '09',
                'name' => 'Miravalle',
                'zone_type' => 'Urbano' ,
                'settlement_type_id' => '1'  
            ],
            [
                'key' => '21',
                'name' => 'Panorama',
                'zone_type' => 'Urbano' ,
                'settlement_type_id' => '2'  
            ],
            [
                'key' => '21',
                'name' => 'Residencial Guadalupe',
                'zone_type' => 'Urbano' ,
                'settlement_type_id' => '2'  
            ],
            [
                'key' => '21',
                'name' => 'Colinas del Poniente',
                'zone_type' => 'Urbano' ,
                'settlement_type_id' => '2'  
            ],
            [
                'key' => '10',
                'name' => 'Bugambilias',
                'zone_type' => 'Urbano' ,
                'settlement_type_id' => '5'  
            ],
            [
                'key' => '09',
                'name' => 'Del Carmen',
                'zone_type' => 'Urbano' ,
                'settlement_type_id' => '1'  
            ]

// La Fe
// México
// Primavera
// San Pablo
// Guadalupe
// Heliodoro Garcia
// Gómez
// Moderno
// Valle del Rio San Pedro
// Guadalupe Posada
// San Marcos
// San Marcos
// San Marcos
// Modelo
// Residencial del Valle I
// Residencial del Valle II
// La Herradura
// Club Campestre
// Jardines del Campestre
// Los Vergeles
// Ciudad Universitaria
// Rancho San Antonio
// Villas de Montenegro
// Las Cavas
// La Enramada
// Talamantes Ponce
// Granjas del Campestre
// Puerto las Hadas
// Valle del Campestre
// Trojes de Oriente
// Valle de las Trojes
// Villas de San Nicolás
// San Telmo
// La Paloma
// Barrio de Santiago
// Villa de las Trojes
// Valle de Santa Teresa
// La Troje
// Trojes de Alonso
// San Telmo Residencial
// Santa Fe
// Aguascalientes 2000
// Las Trojes
// Misión del Campanario
// Trojes de Cristal
// Trojes del Sol
// Residencial Santa Clara
// Misión de Santiago
// Andora Residencial
// Cadaqués Residencial
// Valle del Campanario
// Las Misiones
// Los Jarales
// Cerrada El Molino
// Valle Real
// Terzetto
// Cerrada de La Misión
// Cerrada del Valle
// Cerrada de la Mezquitera
// Lomas del Campestre 2a Sección
// Villas del Campestre
// Los Calicantos
// Jardines de la Concepción
// Los Bosques
// Rinconada los Bosques
// La Perla Norte
// Arroyo El Molino
// Galerías
// Residencial Altaria
// Constitución
// Libertad
// Pozo Bravo Norte
// Soberana Convención Revolucionaria
// Villa Montaña
// Villas de Don Antonio
// Los Ángeles
// Capittala
// Recinto de la Macarena
// La Soledad
// Los Naranjos
// Villa de Nuestra Señora de La Asunción Sector Guadalupe
// Villa Teresa
// Cartagena 1947
// Villas de La Convención
// Lomas de La Asunción
// Villa de Nuestra Señora de La Asunción Sector Encino
// Villa de Nuestra Señora de La Asunción Sector Alameda
// San José de Pozo Bravo
// Villa de Nuestra Señora de La Asunción Sector San Marcos
// Villa de Nuestra Señora de La Asunción Sector Estación
// Las Plazas
// El Rosedal
// Natura
// Montebello Della Stanza
// Villa Notre Dame
// Privada Guadalupe
// Rinconada Pozo Bravo
// Pozo Bravo Sur
// Villa Loma Dorada
// Jardines de Montebello
// Villas del Río
// El Puertecito
// Rinconada del Puertecito
// Bosques del Prado Norte
// Sartenejo
// Lomas del Campestre 1a Sección
// Bosques del Prado Sur
// El Roble
// Fátima
// Independencia de México
// Nueva Rinconada
// Primo Verdad
// San José del Arenal
// Unidad Ganadera
// San Xavier
// Residencial del Real
// Puerta Navarra
// Residencial Campestre Club de Golf
// Palma Real
// Muralia
// Agropecuario
// Centro Distribuidor de Básicos
// La Rinconada
// El Plateado
// Residencial Pulgas Pandas Norte
// Residencial Pulgas Pandas Sur
// Villas del Vergel
// Cerrada San Miguel
// Las Hadas
// Morelos
// Andrea
// Los Arcos
// Industrial
// La Estrella
// Macias Arellano
// Trento
// Nueva Andalucia Coto Residencial
// Lomas del Cobano
// Buenavista
// C.T.M.
// La Higuerilla
// Parras
// El Cobano
// Hacienda el Cobano
// Trojes del Cobano
// Villas del Cobano
// Alianza Ferrocarrilera
// Bosques del Prado Oriente
// Francisco Guel Jimenez
// Las Viñas INFONAVIT
// Santa Anita 4a Sección
// Santa Anita
// Santa Anita 2a Sección
// El Maguey
// Las Cumbres
// Lic Benito Juárez
// Nazario Ortiz Garza
// Rodolfo Landeros Gallegos
// S.T.E.M.A.
// Zona Militar
// Villa Bonita
// Lic Benito Palomino Dena
// Anexo Benito Palomino Dena (Cumbres II)
// La Florida l
// La Florida ll
// Claustros Loma Dorada
// Cumbres III
// Lomas de Bellavista
// Lomas de las Fuentes
// Colinas de Oriente
// Vista de las Cumbres
// Los Laureles
// Mirador de las Culturas
// El Rocío
// Villas de la Loma
// Los Pericos
// Paseos del Sol
// Miradores de Santa Elena
// Villas de las Fuentes
// La Hojarasca
// Ejido las Cumbres
// J Refugio Esparza Reyes
// Rinconadas las Cumbres
// Lomas de Oriente
// C.N.O.P. Oriente
// Las Cumbres
// Luis Ortega Douglas
// Pensadores Mexicanos
// Pintores Mexicanos
// Progreso
// Santa Regina
// Cerro Alto
// Santa Margarita
// Del Trabajo
// Ferronales
// Luis Gómez Zepeda (ferronales)
// Lomas de Santa Anita
// Alameda
// Rinconada de La Alameda
// Bosques de La Alameda
// Nueva Alameda
// Héroes
// La Hacienda
// La Mancha
// Ojocaliente
// Ojocaliente INEGI
// Solidaridad 1a Sección
// Sol Naciente
// Villa de las Norias
// Camino Real
// Ribera del Sol
// Ambrosía
// José Guadalupe Peralta Gámez
// Haciendas de Aguascalientes
// Villerías
// Vistas de Oriente
// Real de Haciendas
// Valle de los Cactus
// Colinas de San Patricio
// Balcones de Oriente
// Terra Nova
// José Guadalupe Posada
// El Rocío
// Valle del Bicentenario
// Paseo de los Cactus
// Balcones del Valle
// Real del Sol
// Ex Hacienda Ojocaliente
// Ejido Ojocaliente
// Misión Alameda
// El Riego
// Fidel Velázquez
// Municipio Libre
// Villas del Mediterráneo
// Ex Hacienda La Cantera
// José Vasconcelos Calderón
// Porta Canteras
// Veteranos de la Revolución
// Fuentes del Lago
// El Quelite
// Olinda
// Bellavista
// Loma Bonita
// Nueva Castilla
// Xenia Residencial
// Vergel de la Cantera
// Villas de La Cantera
// Lic Manuel Gómez Morin
// Residencial San Nicolás
// Educación Álamos
// Nueva España
// Lic. José López Portillo
// La Barranquilla
// Barandales de San José
// Canteras de San Javier
// Capital City
// Rinconada San José
// Canteras de San José
// Circunvalación Poniente
// España
// La Barranca de Guadalupe
// Pirules INFONAVIT
// Jardines de los Pirules
// Residencial los Pirules
// Canteras de Santa Imelda
// Francisco Villa
// Jardines del Lago
// Tahona Residencial
// San Martin de La Cantera
// Canteras de San Agustin
// Santa Imelda
// Los Eucaliptos 2a. Sección
// Los Eucaliptos
// San Agustín
// El Edén
// Parque Industrial el Vergel
// Misión Juan Pablo II
// Las Flores
// Vivienda Popular
// Las Torres
// Las Américas
// Obraje
// Santa Elena
// Agricultura
// El Dorado 1a Sección
// El Dorado 2a Sección
// Valle Dorado
// Villa Jardín
// Jardines de Santa Elena
// Hermanos Carreón
// Montebello
// Santa Elena 2a Sección
// La Fuente
// El Encino
// El Laurel
// La Luna
// La Salud
// Los Virreyes
// El Llanito
// Residencial el Encino
// Triana
// Residencial Cosío
// Triana
// San Fernando INFONAVIT
// Jardines de Triana
// Gámez
// Jesús Gómez Portugal
// Héroes de Aguascalientes
// Jardines de La Cruz
// La Huerta
// San Luis
// Villas de Kristal
// Bona Gens
// INFONAVIT Los Volcanes
// FOVISSSTE Ojocaliente I
// Ojocaliente FOVISSSTE II
// Ojocaliente las Torres
// Rinconada de La Cruz
// Villas de Ojocaliente
// Parque y Presa del Cedazo
// Lázaro Cárdenas
// La Estación
// La Purísima
// IV Centenario
// Jesús Terán Peredo
// Vivienda Militar
// Ojo de Agua
// Sidusa
// Rinconada El Cedazo
// Villa las Palmas
// Bajío de las Palmas
// Lomas del Gachupín
// El Cedazo
// San Ángel
// Villa Taurina
// Agua Clara
// Balcones de Ojocaliente
// Cielo Claro
// Lomas del Chapulín
// Ojo de Agua de Palmitas
// Salto de Ojocaliente
// Solidaridad 2a Sección
// Solidaridad 3a Sección
// Tierra Buena
// Rinconada San Antonio I
// Cima del Chapulín
// Cobano de Palmitas
// San Jorge
// La Lomita
// Morelos INFONAVIT
// Vista del Sol 2a Sección
// Vista del Sol 3a Sección
// Ojo de Agua INFONAVIT
// Jardines del Sol
// La Cruz
// Misión de Santa Fe
// Vista del Sol 1a Sección
// S.T.E.M.A.
// Jardines de La Convención
// Ojo de Agua FOVISSSTE 1a Sección
// Lic Primo Verdad INEGI
// Fuentes de La Asunción
// Jardines de La Luz
// Mesonero
// Bulevar
// El Caminero
// Jardines de Aguascalientes
// Jardines de La Asunción
// Las Canoas
// Lindavista
// México
// Los Cedros
// Jardines de las Bugambilias
// Jardines del Parque
// Jardines de Alejandría
// Pirámides
// Residencial del Parque
// Rinconada del Parque
// Jardines de las Fuentes
// Casasolida
// Central de Abastos
// Jardines del Sur
// Martinez Dominguez
// Prados de Villasunción
// Prados del Sur
// San Francisco del Arenal
// San Pedro
// Torres de San Francisco
// Trojes del Sur
// Australis
// Conjunto San Francisco
// Parque Industrial Siglo XXI
// Parque Industrial Siglo XXI (Ampliación)
// La Estancia
// INFONAVIT Potreros del Oeste
// Villas de Santa Rosa
// Villas del Oeste
// Vistas del Sur
// Rinconada del Sur
// Villas del Encino
// La Casita
// Versalles 1a Sección
// Versalles 2a Sección
// Bosque Real
// Rancho Santa Mónica
// Vicente Guerrero
// Villas del Pilar 1a Sección
// Barlovento
// Abadía
// Mangata
// Villas San Antonio
// Villa Capri
// Providencia
// Rinconada Santa Mónica
// Paseos de Santa Mónica
// Insurgentes
// Bulevares 1a. Sección
// Bulevares 2a. Sección
// Pilar Blanco INFONAVIT
// Ciudad Industrial
// Plaza Vestir
// Vista Alegre
// Parque Industrial ALTEC
// Centro SCT Aguascalientes
// Rústicos Calpulli
// Reserva San Matías
// Villas de Bonaterra
// San Francisco de los Arteaga
// Residencial San Javier
// Villa Sur
// Casa Blanca
// Jardines de Casablanca
// Jardines de Casanueva
// Emiliano Zapata
// Morelos I
// Morelos 2a Sección
// Solidaridad 4a Sección
// Residencial Hacienda San Martín
// Viñedos del Sur
// Reserva Villa Sur
// Villas de Ajedrez
// Lomas de Vistabella
// San Sebastián
// Lomas del Sur
// Lomas de Nueva York
// Laureles del Sur
// Lomas del Mirador
// Misión de Santa Lucía
// Lomas de Vistabella 2a. Sección
// Lotes de Arellano
// Condominio La terraza
// Valle del Cedazo
// Paseos de San Antonio
// Hacienda San Marcos
// Lomas del Ajedrez
// Mujeres Ilustres
// Periodistas
// Villa del Chapulín
// Los Dolores
// Fundadores
// Lomas de San Jorge
// Reencuentro
// Villalta
// Lunaria
// Panamericano
// San Francisco de los Romos Centro
// El Tirón (El Progreso)
// Hidalgo
// La Aurora
// La Guadalupana
// La Perla
// Los Cedros
// María
// Revolución
// San Francisco
// San José Buenavista
// Cerrada San Francisco
// Fracción de la Trinidad II
// La Escondida (El Salero)
// Monserrat
// San José del Barranco
// San Juan
// 28 de Abril
// Santa Bárbara
// El Cardonal
// Santa Fe
// El Barranco
// El Gigante
// El Refugio
// Santa Elena (Elena)
// La Gloria
// La Paz
// La Providencia
// La Trinidad
// La Unión
// Las Carmelitas
// Los Lirios
// Sociedad Plan de los Sabinos
// San Ángel
// San Pedro Victoria de Arriba
// Santa Anita
// Zacatenco
// Mary
// Villa de Guadalupe
// San Pablo
// Los Corrales (Los Corrales Blancos)
// El Chamizal
// Los Negritos
// Coyotes
// Viñedos Valle Redondo
// La Loma de los Negritos
// Viñedos San Felipe
// Cuauhtémoc (Las Palomas)
// Hacienda Nueva
// El Cariñán
// Santa Cruz de la Presa
// Lomas del Picacho
// CERESO (Para Varones y Mujeres)
// Estación Cañada Honda
// General José María Morelos y Pavón (Cañada Honda)
// Las Cañadas
// Santa María de Gallardo
// Jaltomate
// Loretta
// Parque Industrial Tecnopolo 2 (PITP2)
// La Aurora
// Bosque Sereno
// Cavalia
// Quinta los Olivos
// Misión de San Jerónimo
// Privada Los Olivos
// Residencial Punta del Cielo
// Portón San Ignacio
// Valle de San Ignacio (El Filso)
// San Ignacio
// La Trinidad
// Tamarindos
// Xaramá Entorno Residencial
// Puesta del Sol
// La Soledad
// La Rioja
// Rinconada de San Ignacio
// Ex-Hacienda de San Ignacio
// La Perla
// San Ignacio II
// San Ignacio III
// Los Fresnos
// Terranza
// Pocitos
// Parque Industrial Tecnopolo Pocitos
// Privanza Andaluz
// Residencial Las Quintas
// La Querencia
// Rincón Andaluz
// La Plazuela
// Torres Residencial Campestre Santamaría
// La Punta Campestre
// Contadero
// La Joya
// Río Viejo
// Crucero Ojo de Agua de Crucitas
// Palo Alto
// De Triana
// Palo Alto Centro
// Pobre
// De Afuera
// De Abajo
// El Progreso
// El Salto
// El Saucito
// El Cotón
// El Milagro
// Las Flores (El Cotón)
// Licenciado Jesús Terán (El Muerto)
// San Francisco de los Viveros
// Sandovales (San Miguel de los Sandovales)
// San Francisco de los Pedroza
// El Barreno (Ampliación San Francisco)
// El Mocho
// San Gerónimo
// San José (San Antonio de Montoya)
// El Novillo
// La Luz
// El Puertecito
// Ojo de Agua de Crucitas
// El Terremoto
// Francisco Sarabia (La Reforma)
// Los Conos
// Montoya
// Santa Rosa (El Huizache)
// El Retoño
// La Tinaja
// El Rosario
// El Copetillo
// El Tildío
// La Unión (La Paz)
// Rancho Nuevo
// El Chonguillo (El Chonguito)
// El Copetillo (El Moquete)
// Tanque el Coyote (El Coyote)
// Mirasoles
// San José (San José de los Rodríguez)
// El Centenario
// Santa Rita
// La Primavera
// Lomas del Refugio (La Loma)
// Santa Elena
// El Llano [CERESO]
// Granja Temixco
// El Paraíso (Santa Rita)
// Santa Rita Uno (Santa Rita)
// San Lorenzo
// Santa Clara (Las Mieleras)
// San Agustín de los Díaz
// La Lucita
// La Calavera
// San Antonio de la Rosa
// San Ramón
// Parque Industrial de Logística Automotriz (PILA)
// Arellano
// Buenavista de Peñuelas
// Peñuelas (El Cienegal)
// El Cedazo (Cedazo de San Antonio)
// El Salto de los Salado
// San Francisco
// San Gerardo
// Santa Gertrudis
// San José
// Villa Licenciado Jesús Terán (Calvillito)
// Montoro (Mesa del Salto)
// Los Caños
// Dolores
// El Turicate
// San Antonio de Peñuelas
// Aguascalientes (Lic. Jesús Terán Peredo)
// Los Capricornios (La Biznaga)
// Loretito (Charco del Toro)
// Macario J Gómez
// Medio Kilo
// Parque Industrial San Francisco
// Paseos de la Providencia
// Urbi Villa del Vergel
// La Concepción
// Viñedos River
// Borrotes
// Estación Chicalote
// Amapolas del Río
// El Tepetate
// Rancho Nuevo
// Monteverde
// Valle de Aguascalientes
// Reserva Quetzales
// Rancho Seco
// Castelo San Francisco
// Puertecito de la Virgen
// Parque Industrial Valle de Aguascalientes
// Ex-Viñedos Guadalupe
// Villas de San Felipe
// La Casita
// La Ribera
// Sendero de los Quetzales
// San Antonio de los Pedroza
// San José de la Ordeña
// San Nicolás de Arriba
// San Nicolás de en Medio
// La Herrada
// El Colorado (El Soyatal)
// El Conejal
// 2 de Octubre
// Che Guevara
// Tanque el Trigo
// Norias de Ojocaliente
// El Malacate
// Puerto de Nieto
// Santa Cruz de la Presa (La Tlacuacha)
// Ciudad de los Niños
// La Cotorra
// Cabecita 3 Marías
// El Niágara
// Ex-Hacienda de Agostaderito
// Granjas Fátima
// Villa Campestre San José del Monte
// El Ocote
// La Huerta (La Cruz)
// El Tanque de los Jiménez
// Campestre Bosques de Las Lomas
// Centro de Arriba (El Taray)
// San Pedro Cieneguilla
// Cieneguilla (La Lumbrera)
// Cieneguilla
// El Hotelito
// Norias del Paso Hondo
// Norias del Paso Hondo
// Paso Hondo
// La Rinconada (La Escondida)
// El Duraznillo
// Los Cuervos (Los Ojos de Agua)
// San Bartolo
// Los Durón
// Soledad de Abajo
// Matamoros
// Campestre el Potrerillo
// Parque Industrial Gigante de los Arellano
// El Gigante (Arellano)
// Norias de Cedazo (Cedazo Norias de Montoro)
// Montoro
// Universidad Autónoma de Aguascalientes  Campus Sur
// Parque Industrial FINSA Aguascalientes
// Lomas de Arellano
// Tanque de Guadalupe
// Cañada Grande de Cotorina
// Cotorina (Coyotes)
// El Refugio de Peñuelas
// Ex-Hacienda de Peñuelas
// Rincón de Romos Centro
// Norte
// Santa Elena
// Desarrollo Especial La Pedrera
// Subdivisión La Piedrera
// Villa Seguridad
// Valle del Real
// José Luis Macias
// Estancia de Chora
// Embajadores
// El Chaveño
// De Guadalupe
// La Paz
// Rinconada de las Piedras
// Rinconada Alameda
// De Chora
// Santa Cruz
// Lázaro Cárdenas
// Fraternidad
// Cerro del Gato
// Independencia
// Magisterial
// Magisterial II
// Santa Anita
// El Potrero
// La Mezquitera
// Desarrollo Especial
// Villas de Jesús
// San José
// Presidentes de México
// Solidaridad
// Miguel Hidalgo
// Popular
// Pablo Escaleras
// El Saucillo
// Presa de San Elías (José Muñoz)
// El Bajío
// Mar Negro
// Potrero El Tarasco
// San Judas Tadeo (Santa Fe)
// Candelaria
// Puerta del Muerto (El 15)
// California
// Bajío del Yerbaníz
// Tanque Blanco
// San Jacinto
// San Juan de la Natura
// El Valle de las Delicias
// 16 de Septiembre
// Los Morales
// San Isidro el Labrador
// La Misión
// 18 de Marzo
// El Salitrillo
// El Barzón
// Las Norias
// Lupita
// El Milagro
// Constitución
// Héctor Hugo Olivares
// Lindavista
// Pabellón de Hidalgo Centro
// Estancia de Mosqueira
// El Rosario
// Morelos
// Las Camas
// Potrerillos
// Túnel de Potrerillo
// El Panal
// Fresnillo
// La Boquilla
// Peña Blanca
// El Ajiladero
// Cosío Centro
// Luis Donaldo Colosio
// Villas del Potrerito
// Popular
// Santa Cruz
// Mexiquito
// Coplamar
// Vista Hermosa
// Soledad de Abajo [Estación de Adames]
// Zacatequillas
// Soledad de Arriba
// El Durazno
// La Punta
// La Esperanza (El Salerito)
// El Durazno
// Los Nava
// El Salero
// El Refugio de Agua Zarca
// El Refugio de Providencia (Providencia)
// Guadalupito
// Santa María de la Paz
// San José de Gracia
// El Jocoqui
// Cieneguita
// El Toril
// Santa Elena de la Cruz (Capadero)
// Las Amarillas
// Túnel de Potrerillo
// Tortugas
// Potrerillo
// Ciénega de Alcorcha
// Boca del Túnel de Potrerillo
// La Congoja
// El Cepo
// Antrialgo
// Sierra Hermosa (Los Alamitos)
// Paredes
// San Antonio de los Ríos
// Guajolotes (Huijolotes)
// Santa Rosa de Lima
// Rancho Viejo
// Potrero de los López
// Paso del Sauz
// El Tecongo
// Estancia de San Marcos
// El Taray
// Club Náutico San José
// Tepezalá Centro
// Cholula
// San Rafael
// Felipe González González
// Del Socorro
// Luis Ortega Douglas
// Los Arcos
// El Chayote
// El Barranco
// Los Alamitos
// Luz de San Antonio (La Luz)
// Ampliación los Hornos (el Lagunazo)
// El Progreso (La Tira)
// El Porvenir
// El Carmen
// San Antonio
// Mesillas
// Ojo de Agua de los Montes
// La Victoria
// El Águila
// Los Tres Reyes
// El Gigante
// Puerto de la Concepción
// Carboneras
// El Refugio
// Arroyo Hondo
// Berrendos
// El Tepozán
// Caldera
// El Refugio
// El Gigante
// Nueva
// Emiliano Zapata
// El Pedernal Segundo
// San Agustín de los Puentes
// El Pilar
// Los Contreras
// El Garabato
// Campestre San Carlos
// Santiago
// El Canal
// El Pedregal
// El Milagro
// Puerta del Milagro
// San Luis de Letras
// Miguel Alemán [Secadora]
// Ampliación Ejido Garabato
// Pabellón de Arteaga Centro
// FOVISSSTE
// Jardines de Pabellón
// Subdivisión Haciendas de Pabellón
// Barrio Industrial
// Francisco Villa
// Villas de Pabellón
// Trojes de San Pedro
// Carboneras
// Palo Alto
// 5 de Mayo
// Cosmos
// Popular
// Plutarco Elías Calles
// Progreso Sur
// Bosques de Pabellón
// Progreso Norte
// Vergel del Valle
// Valle del Vivero
// Subdivisión Villa de Guadalupe
// Valle del Vivero II
// Las Ánimas
// Santa Isabel
// Las Ánimas
// El Mezquite (Ojo de Agua del Mezquite)
// El Mezquite
// El Mezquite
// Los Lira
// Ojo Zarco
// Ojo Zarco
// Ojo Zarco (La Loma)
// El Rayo
// Gámez Orozco (Puerta de Carboneras)
// San Pedro
// El Cerrito
// Guadalupe
// Loma Bonita
// Agua Nueva
// Álamos
// La Sierra
// Arboledas
// El Tule
// Villa Juárez Centro
// La Loma
// El Rascón
// Viudas de Poniente
// Charco Azul
// El Llavero
// Amarillas de Esparza
// Jilotepec
// La Dichosa
// San Vicente
// Asientos Centro
// Santa Cruz
// De Peñitas
// Los Tepetates
// Del CECYTE
// De Guadalupe
// INFONAVIT
// Del Tepozán
// Juventud
// Real Minero
// Guadalupe de Atlas
// Bimbaletes Aguascalientes (El Álamo)
// Bimbaletes Atlas (Tanque de la Vieja)
// Crisóstomos
// Estación San Gil
// La Divina Providencia
// Alvarado
// Licenciado Adolfo López Mateos
// Sociedad los Posada
// Sector de Producción Número 3
// Sector de Producción Número 2
// Plutarco Elías Calles
// Ciénega Grande
// Noria del Borrego (Norias)
// Jarillas
// Gómez Portugal
// Pino Suárez (Rancho Viejo)
// Clavellinas
// Molinos
// Los Encinos
// Lázaro Cárdenas
// La Gloria
// Santuario del Tepozán
// La Soledad
// San Pedro
// El Polvo
// Caldera
// El Fénix
// Licenciado Adolfo López Mateos
// Charco Prieto (El Palomar)
// San Antonio de los Martínez
// Gorriones
// Ojo de Agua de Rosales
// Tepetatillo
// San José del Río
// El Águila [Rancho]
// Emancipación (Borunda)
// Tanque Viejo
// Las Adjuntas
// La Tinajuela
// San Rafael de Ocampo
// San José del Tulillo
// San Isidro
// El Chonguillo
// Francisco Villa
// La Esperanza
// Ojo de Agua de los Sauces
// Pilotos
// Tanque de Guadalupe
// Las Joyas
// El Epazote
// Las Fraguas
// El Salitre
// El Bajío de los Campos
// Las Negritas
// Calvillo Centro
// El Mirador
// Independencia
// López Mateos
// Las Paseras
// Vista Hermosa
// Campo Militar 14 CINE
// El Guayabo
// Sección Benito Juárez
// Sección Cerritos
// Sección Loma de Fundadores
// Vista Hermosa 2a. Sección
// Lomas de Huejúcar
// San Nicolás
// San Rafael
// Rincón de Baltazares
// José Landeros
// Ejidal
// Liberal
// Rincón de Baltazares
// Valle de Santiago
// Arroyo de Los Caballos
// Del Carmen
// Azteca
// Morelos
// Cerrito Alto
// Emiliano Zapata
// Las Flores
// Martínez
// Valle de Huejúcar
// Los Angeles
// Chicago
// El Terrero de la Labor
// Palo Alto
// El Sauz de la Labor
// El Zapote de la Labor
// Las Cuevas de la Labor
// Las Rubias
// Piedras Chinas
// La Pochota
// El Jagüey
// El Mirador
// San Tadeo
// Jardines de San Isidro (Colonia Limón)
// Solidaridad
// El Capulín
// Los Lazos
// Montoro
// Colomos
// Chiquihuitero (San Isidro)
// La Panadera
// Las Víboras (Viborillas)
// El Llano (El Llano de San Rafael)
// Villas del Laurel
// El Maguey
// El Sauz
// Río Gil
// Potrero de los López
// Las Huertas
// La Pila
// La Alberca
// La Españita
// Los Baños
// Los Esparza
// La Placita
// La Casa Grande
// Azoteyita
// Catana
// El Cuervero (Cuerveros)
// Junta de los Ríos
// Malpaso
// Ojocaliente
// Potrero de los López
// Río Gil de Arriba
// La Fortuna
// Los Arcos
// Magisterial
// Los Mirasoles
// El Potrerito
// Las Joyas
// Chimaltitán
// San José de los Laureles
// Mesa de los Pozos (La Laguna)
// Crucero las Pilas
// La Calixtina
// Las Moras
// Mesa Grande
// El Refugio (Las Praderas)
// Tepezalilla de Abajo
// Pozo de los Artistas
// Los Adobes
// Arroyo Ojocalientillo
// Parque Industrial Calvillo
// El Tepetate de Arriba
// El Tepetate de Abajo
// Los Alisos
// Ojo de Agua
// El Garruño
// El Taray
// Barranca del Roble
// El Güencho
// Jaltiche de Arriba
// Mesa del Roble
// Cerro Blanco
// El Salitre
// Las Ánimas
// Las Pilas
// Michoacanejo
// La Media Luna
// La Rinconada
// Las Tinajas
// Norias Cuatas
// Salitrillo
// Jaltiche de Abajo
// La Fragua
// El Caracol
// El Terrero del Refugio
// Presa de los Serna
// El Papantón
// El Rodeo
// La Teresa
// Los Patos
// Mezquitillos
// Peña Blanca
// San José
// Santos
// Vaquerías
// Barranca de Portales
// El Tigre
// Miguel Hidalgo (El Huarache)
// El Ocote [Banco de Tierra]
// El Tepalcate
// La Joya
// Las Trojes
// Tanque de los Serna
// La Labor
// La Primavera
// Presa Ordeña Vieja
// Temazcal
// Paredes
// La Hiedra
// Ventanillas
// El Salitrillo
// El Jaralito
// El Tepozán
// Manguillas
// La Ciénega
// Presa de los Bajíos
// Puerta de Fragua (Presa la Codorniz)
// Santo Domingo
// Puerta Norte
// Residencial Misión de San José
// Residencial Campestre Ingles
// Camino Real
// Corral de Barrancos
// Maravillas
// Los Olivos
// Rinconada Maravillas
// Residencial Villa Campestre
// Valle Escondido
// Las Pérgolas
// La Nogalera
// El Maguey
// Las Jaulas
// La Loma de Valladolid
// La Chaveña
// Villas de Montecassino
// Residencial Santa Paulina
// Margaritas
// La Florida
// El Barreno
// Los Ramírez
// Los Vázquez
// Miravalle
// Paso Blanco
// Los Arenales
// La Lomita de Paso Blanco (Las Canoas)
// Los Sauces
// Viñedos Casa Leal
// Santa Elena
// Viñedos Frutilandia
// Paseos de Aguascalientes
// Arboledas de Paso Blanco
// Centro Distribuidor de Básicos Viñedos San Marcos
// Paseos del Country
// Residencial Campo Real
// Jardines de Campo Real
// Mayorazgo San Cristóbal
// Belmondo
// Residencial Marcellana
// Rinconada Cuauhtémoc
// Catania Spazio
// Punta Norte
// Los Gavilanes
// Nura
// Santa Isabel Tola
// Bosques de los Ciprés
// Bosques del Paraíso I
// Bosques del Paraíso II
// Augusta
// Bosques del Paraíso VI
// Bosques del Paraíso III
// Bosques del Paraíso IV
// Vivanta
// Zibá
// Tepetates
// Trojes de San Cristóbal
// Quintas de Monticello
// Viña Antigua
// Villas del Molino
// Porta Real
// Residencial Cedros
// Rancho San Miguel Residencial
// Alcázar Residencial
// Reserva San Cristóbal
// La Arborada
// Privanza de Gratamira
// Tierraverde (Habitat Gran Clase)
// Andares
// INFONAVIT Margaritas
// Villas del Sol
// Valle de Margaritas
// Saturnino Herran
// Los Vázquez
// Santa Fe Tecnopark
// Alea Park
// Jesús Gómez Portugal (Margaritas)
// El Zapato
// Paseos Gómez Portugal
// La Guayana (Rancho Seco)
// Paso de Argenta
// San Antonio de los Horcones
// Brownsville
// Valladolid
// El Refugio
// El Aurero
// Villas de Guadalupe (La Malobra)
// El Cenizo
// La Granjita (Los Palillos)
// Parque Industrial Chichimeco
// El Chichimeco
// Paseos de las Haciendas
// Cartuja Residencial
// Pedernal Segundo
// Jesús María Centro
// Bellavista
// La Troje
// El Calvario
// La Escalera
// Rinconada Jesús María
// Real Campestre
// La Villa Residencial
// Los Álamos
// La Misión
// Flores Magón
// La Cardona
// La Cuesta
// Los Arroyitos
// San Miguelito
// Rinconada San Miguelito
// Ruiseñores
// Residencial Jesús María
// Cielo Claro
// Agua Clara
// Jacarandas
// Deportiva
// Rancho San Pedro
// Palma Dorada
// Arroyo del Bosque
// Misantla
// Villas Tec
// Agua Zarca
// Benigno Chávez
// Lomas de Jesús María
// Vistas del Sáuz
// Puerta Grande
// Rincón del Pilar
// La Palma
// Quintas Miguel Jerónimo
// Las Palmas
// Porta Arvena
// Arboledas
// Chicahuales
// Lomas del Valle
// Martínez Andrade
// Solidaridad
// Vista Hermosa
// Manantiales del Pinar
// La Loma
// La Piedra
// Lomas de los Vergeles
// Rinconada Bugambilias
// Misión de Santa María
// Yalta Campestre
// Residencial Tres Arroyos
// Mirabrujas
// Tulipanes Residencial
// Ayuntamiento
// La Cañada
// Ampliación La Cañada
// Ojos de Agua
// Luis Donaldo Colosio
// Ejidal
// El Torito
// Las Palmas
// Plan Benito Juárez
// El Mezquital
// El Chaveño
// Buenavista
// Solar de Jonacatique
// Unión de Ladrilleros
// San Lorenzo
// Los Muñoz
// Milpillas de Abajo
// Ex-hacienda de Milpillas
// Gracias a Dios
// El Zapote
// Cañada el Rodeo
// El Conejo (Puerta del Llano)
// La Mesa del Contadero (El Contadero)
// San Rafael
// Piedras Negras
// Lomas de San Isidro
// Pedernal Primero
// El Rincón de la Virgen (El Rincón)
// Tapias Viejas
// Puente de Villalpando (El Puente)
// Puentes Cuates
// Real del Molino
// Mezquital del Country
// El Llano
// Trojes del Pedregal
// Residencial Trojes del Norte
// Residencial Trojes del Norte II
// Residencial Antiguo Country
// Villa Natty Residencial
// Andrea
// Providencia
// General Ignacio Zaragoza (Venadero)
// Buenavista
// Cieneguitas
// Villas de Montegrande
// La Tomatina
// Agua Zarca
// Jesús María
// Los Arquitos
// El Chacho
// La Primavera
// Ruscello
// Q Campestre Residencial
        ]);
    }
}
