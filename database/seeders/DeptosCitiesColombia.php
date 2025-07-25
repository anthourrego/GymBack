<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Country;

class DeptosCitiesColombia extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $data = [
            "AMAZONAS"=> [
                [
                "municipio"=> "El Encanto",
                "codigo"=> "91263"
                ],
                [
                "municipio"=> "La Chorrera",
                "codigo"=> "91405"
                ],
                [
                "municipio"=> "La Pedrera",
                "codigo"=> "91407"
                ],
                [
                "municipio"=> "La Victoria",
                "codigo"=> "91430"
                ],
                [
                "municipio"=> "Leticia",
                "codigo"=> "91001"
                ],
                [
                "municipio"=> "Miriti - Paraná",
                "codigo"=> "91460"
                ],
                [
                "municipio"=> "Puerto Alegria",
                "codigo"=> "91530"
                ],
                [
                "municipio"=> "Puerto Arica",
                "codigo"=> "91536"
                ],
                [
                "municipio"=> "Puerto Nariño",
                "codigo"=> "91540"
                ],
                [
                "municipio"=> "Puerto Santander",
                "codigo"=> "91669"
                ],
                [
                "municipio"=> "Tarapacá",
                "codigo"=> "91798"
                ]
            ],
            "ANTIOQUIA"=> [
                [
                "municipio"=> "Cáceres",
                "codigo"=> "05120"
                ],
                [
                "municipio"=> "Caucasia",
                "codigo"=> "05154"
                ],
                [
                "municipio"=> "El Bagre",
                "codigo"=> "05250"
                ],
                [
                "municipio"=> "Nechí",
                "codigo"=> "05495"
                ],
                [
                "municipio"=> "Tarazá",
                "codigo"=> "05790"
                ],
                [
                "municipio"=> "Zaragoza",
                "codigo"=> "05895"
                ],
                [
                "municipio"=> "Caracolí",
                "codigo"=> "05142"
                ],
                [
                "municipio"=> "Maceo",
                "codigo"=> "05425"
                ],
                [
                "municipio"=> "Puerto Berrio",
                "codigo"=> "05579"
                ],
                [
                "municipio"=> "Puerto Nare",
                "codigo"=> "05585"
                ],
                [
                "municipio"=> "Puerto Triunfo",
                "codigo"=> "05591"
                ],
                [
                "municipio"=> "Yondó",
                "codigo"=> "05893"
                ],
                [
                "municipio"=> "Amalfi",
                "codigo"=> "05031"
                ],
                [
                "municipio"=> "Anorí",
                "codigo"=> "05040"
                ],
                [
                "municipio"=> "Cisneros",
                "codigo"=> "05190"
                ],
                [
                "municipio"=> "Remedios",
                "codigo"=> "05604"
                ],
                [
                "municipio"=> "San Roque",
                "codigo"=> "05670"
                ],
                [
                "municipio"=> "Santo Domingo",
                "codigo"=> "05690"
                ],
                [
                "municipio"=> "Segovia",
                "codigo"=> "05736"
                ],
                [
                "municipio"=> "Vegachí",
                "codigo"=> "05858"
                ],
                [
                "municipio"=> "Yalí",
                "codigo"=> "05885"
                ],
                [
                "municipio"=> "Yolombó",
                "codigo"=> "05890"
                ],
                [
                "municipio"=> "Angostura",
                "codigo"=> "05038"
                ],
                [
                "municipio"=> "Belmira",
                "codigo"=> "05086"
                ],
                [
                "municipio"=> "Briceño",
                "codigo"=> "05107"
                ],
                [
                "municipio"=> "Campamento",
                "codigo"=> "05134"
                ],
                [
                "municipio"=> "Carolina",
                "codigo"=> "05150"
                ],
                [
                "municipio"=> "Don Matias",
                "codigo"=> "05237"
                ],
                [
                "municipio"=> "Entrerrios",
                "codigo"=> "05264"
                ],
                [
                "municipio"=> "Gómez Plata",
                "codigo"=> "05310"
                ],
                [
                "municipio"=> "Guadalupe",
                "codigo"=> "05315"
                ],
                [
                "municipio"=> "Ituango",
                "codigo"=> "05361"
                ],
                [
                "municipio"=> "San Andrés",
                "codigo"=> "05647"
                ],
                [
                "municipio"=> "San José De La Montaña",
                "codigo"=> "05658"
                ],
                [
                "municipio"=> "San Pedro",
                "codigo"=> "05664"
                ],
                [
                "municipio"=> "Santa Rosa De Osos",
                "codigo"=> "05686"
                ],
                [
                "municipio"=> "Toledo",
                "codigo"=> "05819"
                ],
                [
                "municipio"=> "Valdivia",
                "codigo"=> "05854"
                ],
                [
                "municipio"=> "Yarumal",
                "codigo"=> "05887"
                ],
                [
                "municipio"=> "Abriaquí",
                "codigo"=> "05004"
                ],
                [
                "municipio"=> "Anza",
                "codigo"=> "05044"
                ],
                [
                "municipio"=> "Armenia",
                "codigo"=> "05059"
                ],
                [
                "municipio"=> "Buriticá",
                "codigo"=> "05113"
                ],
                [
                "municipio"=> "Cañasgordas",
                "codigo"=> "05138"
                ],
                [
                "municipio"=> "Dabeiba",
                "codigo"=> "05234"
                ],
                [
                "municipio"=> "Ebéjico",
                "codigo"=> "05240"
                ],
                [
                "municipio"=> "Frontino",
                "codigo"=> "05284"
                ],
                [
                "municipio"=> "Giraldo",
                "codigo"=> "05306"
                ],
                [
                "municipio"=> "Heliconia",
                "codigo"=> "05347"
                ],
                [
                "municipio"=> "Liborina",
                "codigo"=> "05411"
                ],
                [
                "municipio"=> "Olaya",
                "codigo"=> "05501"
                ],
                [
                "municipio"=> "Peque",
                "codigo"=> "05543"
                ],
                [
                "municipio"=> "Sabanalarga",
                "codigo"=> "05628"
                ],
                [
                "municipio"=> "San Jerónimo",
                "codigo"=> "05656"
                ],
                [
                "municipio"=> "Santafé De Antioquia",
                "codigo"=> "05042"
                ],
                [
                "municipio"=> "Sopetran",
                "codigo"=> "05761"
                ],
                [
                "municipio"=> "Uramita",
                "codigo"=> "05842"
                ],
                [
                "municipio"=> "Abejorral",
                "codigo"=> "05002"
                ],
                [
                "municipio"=> "Alejandría",
                "codigo"=> "05021"
                ],
                [
                "municipio"=> "Argelia",
                "codigo"=> "05055"
                ],
                [
                "municipio"=> "Carmen De Viboral",
                "codigo"=> "05148"
                ],
                [
                "municipio"=> "Cocorná",
                "codigo"=> "05197"
                ],
                [
                "municipio"=> "Concepción",
                "codigo"=> "05206"
                ],
                [
                "municipio"=> "Granada",
                "codigo"=> "05313"
                ],
                [
                "municipio"=> "Guarne",
                "codigo"=> "05318"
                ],
                [
                "municipio"=> "Guatape",
                "codigo"=> "05321"
                ],
                [
                "municipio"=> "La Ceja",
                "codigo"=> "05376"
                ],
                [
                "municipio"=> "La Unión",
                "codigo"=> "05400"
                ],
                [
                "municipio"=> "Marinilla",
                "codigo"=> "05440"
                ],
                [
                "municipio"=> "Nariño",
                "codigo"=> "05483"
                ],
                [
                "municipio"=> "Peñol",
                "codigo"=> "05541"
                ],
                [
                "municipio"=> "Retiro",
                "codigo"=> "05607"
                ],
                [
                "municipio"=> "Rionegro",
                "codigo"=> "05615"
                ],
                [
                "municipio"=> "San Carlos",
                "codigo"=> "05649"
                ],
                [
                "municipio"=> "San Francisco",
                "codigo"=> "05652"
                ],
                [
                "municipio"=> "San Luis",
                "codigo"=> "05660"
                ],
                [
                "municipio"=> "San Rafael",
                "codigo"=> "05667"
                ],
                [
                "municipio"=> "San Vicente",
                "codigo"=> "05674"
                ],
                [
                "municipio"=> "Santuario",
                "codigo"=> "05697"
                ],
                [
                "municipio"=> "Sonson",
                "codigo"=> "05756"
                ],
                [
                "municipio"=> "Amaga",
                "codigo"=> "05030"
                ],
                [
                "municipio"=> "Andes",
                "codigo"=> "05034"
                ],
                [
                "municipio"=> "Angelopolis",
                "codigo"=> "05036"
                ],
                [
                "municipio"=> "Betania",
                "codigo"=> "05091"
                ],
                [
                "municipio"=> "Betulia",
                "codigo"=> "05093"
                ],
                [
                "municipio"=> "Caicedo",
                "codigo"=> "05125"
                ],
                [
                "municipio"=> "Caramanta",
                "codigo"=> "05145"
                ],
                [
                "municipio"=> "Ciudad Bolívar",
                "codigo"=> "05101"
                ],
                [
                "municipio"=> "Concordia",
                "codigo"=> "05209"
                ],
                [
                "municipio"=> "Fredonia",
                "codigo"=> "05282"
                ],
                [
                "municipio"=> "Hispania",
                "codigo"=> "05353"
                ],
                [
                "municipio"=> "Jardín",
                "codigo"=> "05364"
                ],
                [
                "municipio"=> "Jericó",
                "codigo"=> "05368"
                ],
                [
                "municipio"=> "La Pintada",
                "codigo"=> "05390"
                ],
                [
                "municipio"=> "Montebello",
                "codigo"=> "05467"
                ],
                [
                "municipio"=> "Pueblorrico",
                "codigo"=> "05576"
                ],
                [
                "municipio"=> "Salgar",
                "codigo"=> "05642"
                ],
                [
                "municipio"=> "Santa Barbara",
                "codigo"=> "05679"
                ],
                [
                "municipio"=> "Támesis",
                "codigo"=> "05789"
                ],
                [
                "municipio"=> "Tarso",
                "codigo"=> "05792"
                ],
                [
                "municipio"=> "Titiribí",
                "codigo"=> "05809"
                ],
                [
                "municipio"=> "Urrao",
                "codigo"=> "05847"
                ],
                [
                "municipio"=> "Valparaiso",
                "codigo"=> "05856"
                ],
                [
                "municipio"=> "Venecia",
                "codigo"=> "05861"
                ],
                [
                "municipio"=> "Apartadó",
                "codigo"=> "05045"
                ],
                [
                "municipio"=> "Arboletes",
                "codigo"=> "05051"
                ],
                [
                "municipio"=> "Carepa",
                "codigo"=> "05147"
                ],
                [
                "municipio"=> "Chigorodó",
                "codigo"=> "05172"
                ],
                [
                "municipio"=> "Murindó",
                "codigo"=> "05475"
                ],
                [
                "municipio"=> "Mutata",
                "codigo"=> "05480"
                ],
                [
                "municipio"=> "Necoclí",
                "codigo"=> "05490"
                ],
                [
                "municipio"=> "San Juan De Uraba",
                "codigo"=> "05659"
                ],
                [
                "municipio"=> "San Pedro De Uraba",
                "codigo"=> "05665"
                ],
                [
                "municipio"=> "Turbo",
                "codigo"=> "05837"
                ],
                [
                "municipio"=> "Vigía Del Fuerte",
                "codigo"=> "05873"
                ],
                [
                "municipio"=> "Barbosa",
                "codigo"=> "05079"
                ],
                [
                "municipio"=> "Bello",
                "codigo"=> "05088"
                ],
                [
                "municipio"=> "Caldas",
                "codigo"=> "05129"
                ],
                [
                "municipio"=> "Copacabana",
                "codigo"=> "05212"
                ],
                [
                "municipio"=> "Envigado",
                "codigo"=> "05266"
                ],
                [
                "municipio"=> "Girardota",
                "codigo"=> "05308"
                ],
                [
                "municipio"=> "Itagui",
                "codigo"=> "05360"
                ],
                [
                "municipio"=> "La Estrella",
                "codigo"=> "05380"
                ],
                [
                "municipio"=> "Medellín",
                "codigo"=> "05001"
                ],
                [
                "municipio"=> "Sabaneta",
                "codigo"=> "05631"
                ]
            ],
            "ARAUCA"=> [
                [
                "municipio"=> "Arauca",
                "codigo"=> "81001"
                ],
                [
                "municipio"=> "Arauquita",
                "codigo"=> "81065"
                ],
                [
                "municipio"=> "Cravo Norte",
                "codigo"=> "81220"
                ],
                [
                "municipio"=> "Fortul",
                "codigo"=> "81300"
                ],
                [
                "municipio"=> "Puerto Rondón",
                "codigo"=> "81591"
                ],
                [
                "municipio"=> "Saravena",
                "codigo"=> "81736"
                ],
                [
                "municipio"=> "Tame",
                "codigo"=> "81794"
                ]
            ],
            "ARCHIPIELAGO DE SAN ANDRES"=> [
                [
                "municipio"=> "Providencia Y Santa Catalina",
                "codigo"=> "88564"
                ],
                [
                "municipio"=> "San Andres",
                "codigo"=> "88001"
                ]
            ],
            "ATLÁNTICO"=> [
                [
                "municipio"=> "Barranquilla",
                "codigo"=> "08001"
                ],
                [
                "municipio"=> "Galapa",
                "codigo"=> "08296"
                ],
                [
                "municipio"=> "Malambo",
                "codigo"=> "08433"
                ],
                [
                "municipio"=> "Puerto Colombia",
                "codigo"=> "08573"
                ],
                [
                "municipio"=> "Soledad",
                "codigo"=> "08758"
                ],
                [
                "municipio"=> "Campo De La Cruz",
                "codigo"=> "08137"
                ],
                [
                "municipio"=> "Candelaria",
                "codigo"=> "08141"
                ],
                [
                "municipio"=> "Luruaco",
                "codigo"=> "08421"
                ],
                [
                "municipio"=> "Manati",
                "codigo"=> "08436"
                ],
                [
                "municipio"=> "Repelon",
                "codigo"=> "08606"
                ],
                [
                "municipio"=> "Santa Lucia",
                "codigo"=> "08675"
                ],
                [
                "municipio"=> "Suan",
                "codigo"=> "08770"
                ],
                [
                "municipio"=> "Baranoa",
                "codigo"=> "08078"
                ],
                [
                "municipio"=> "Palmar De Varela",
                "codigo"=> "08520"
                ],
                [
                "municipio"=> "Polonuevo",
                "codigo"=> "08558"
                ],
                [
                "municipio"=> "Ponedera",
                "codigo"=> "08560"
                ],
                [
                "municipio"=> "Sabanagrande",
                "codigo"=> "08634"
                ],
                [
                "municipio"=> "Sabanalarga",
                "codigo"=> "08638"
                ],
                [
                "municipio"=> "Santo Tomas",
                "codigo"=> "08685"
                ],
                [
                "municipio"=> "Juan De Acosta",
                "codigo"=> "08372"
                ],
                [
                "municipio"=> "Piojó",
                "codigo"=> "08549"
                ],
                [
                "municipio"=> "Tubara",
                "codigo"=> "08832"
                ],
                [
                "municipio"=> "Usiacuri",
                "codigo"=> "08849"
                ]
            ],
            "BOGOTÁ DC"=> [
                [
                "municipio"=> "Bogota D.C.",
                "codigo"=> "11001"
                ]
            ],
            "BOLIVAR"=> [
                [
                "municipio"=> "Cicuco",
                "codigo"=> "13188"
                ],
                [
                "municipio"=> "Hatillo De Loba",
                "codigo"=> "13300"
                ],
                [
                "municipio"=> "Margarita",
                "codigo"=> "13440"
                ],
                [
                "municipio"=> "Mompós",
                "codigo"=> "13468"
                ],
                [
                "municipio"=> "San Fernando",
                "codigo"=> "13650"
                ],
                [
                "municipio"=> "Talaigua Nuevo",
                "codigo"=> "13780"
                ],
                [
                "municipio"=> "Arjona",
                "codigo"=> "13052"
                ],
                [
                "municipio"=> "Arroyohondo",
                "codigo"=> "13062"
                ],
                [
                "municipio"=> "Calamar",
                "codigo"=> "13140"
                ],
                [
                "municipio"=> "Cartagena",
                "codigo"=> "13001"
                ],
                [
                "municipio"=> "Clemencia",
                "codigo"=> "13222"
                ],
                [
                "municipio"=> "Mahates",
                "codigo"=> "13433"
                ],
                [
                "municipio"=> "San Cristobal",
                "codigo"=> "13620"
                ],
                [
                "municipio"=> "San Estanislao",
                "codigo"=> "13647"
                ],
                [
                "municipio"=> "Santa Catalina",
                "codigo"=> "13673"
                ],
                [
                "municipio"=> "Santa Rosa De Lima",
                "codigo"=> "13683"
                ],
                [
                "municipio"=> "Soplaviento",
                "codigo"=> "13760"
                ],
                [
                "municipio"=> "Turbaco",
                "codigo"=> "13836"
                ],
                [
                "municipio"=> "Turbana",
                "codigo"=> "13838"
                ],
                [
                "municipio"=> "Villanueva",
                "codigo"=> "13873"
                ],
                [
                "municipio"=> "Altos Del Rosario",
                "codigo"=> "13030"
                ],
                [
                "municipio"=> "Barranco De Loba",
                "codigo"=> "13074"
                ],
                [
                "municipio"=> "El Peñon",
                "codigo"=> "13268"
                ],
                [
                "municipio"=> "Regidor",
                "codigo"=> "13580"
                ],
                [
                "municipio"=> "Río Viejo",
                "codigo"=> "13600"
                ],
                [
                "municipio"=> "San Martin De Loba",
                "codigo"=> "13667"
                ],
                [
                "municipio"=> "Arenal",
                "codigo"=> "13042"
                ],
                [
                "municipio"=> "Cantagallo",
                "codigo"=> "13160"
                ],
                [
                "municipio"=> "Morales",
                "codigo"=> "13473"
                ],
                [
                "municipio"=> "San Pablo",
                "codigo"=> "13670"
                ],
                [
                "municipio"=> "Santa Rosa Del Sur",
                "codigo"=> "13688"
                ],
                [
                "municipio"=> "Simití",
                "codigo"=> "13744"
                ],
                [
                "municipio"=> "Achí",
                "codigo"=> "13006"
                ],
                [
                "municipio"=> "Magangué",
                "codigo"=> "13430"
                ],
                [
                "municipio"=> "Montecristo",
                "codigo"=> "13458"
                ],
                [
                "municipio"=> "Pinillos",
                "codigo"=> "13549"
                ],
                [
                "municipio"=> "San Jacinto Del Cauca",
                "codigo"=> "13655"
                ],
                [
                "municipio"=> "Tiquisio",
                "codigo"=> "13810"
                ],
                [
                "municipio"=> "Carmen De Bolívar",
                "codigo"=> "13244"
                ],
                [
                "municipio"=> "Córdoba",
                "codigo"=> "13212"
                ],
                [
                "municipio"=> "El Guamo",
                "codigo"=> "13248"
                ],
                [
                "municipio"=> "María La Baja",
                "codigo"=> "13442"
                ],
                [
                "municipio"=> "San Jacinto",
                "codigo"=> "13654"
                ],
                [
                "municipio"=> "San Juan Nepomuceno",
                "codigo"=> "13657"
                ],
                [
                "municipio"=> "Zambrano",
                "codigo"=> "13894"
                ]
            ],
            "BOYACÁ"=> [
                [
                "municipio"=> "Chíquiza",
                "codigo"=> "15232"
                ],
                [
                "municipio"=> "Chivatá",
                "codigo"=> "15187"
                ],
                [
                "municipio"=> "Cómbita",
                "codigo"=> "15204"
                ],
                [
                "municipio"=> "Cucaita",
                "codigo"=> "15224"
                ],
                [
                "municipio"=> "Motavita",
                "codigo"=> "15476"
                ],
                [
                "municipio"=> "Oicatá",
                "codigo"=> "15500"
                ],
                [
                "municipio"=> "Samacá",
                "codigo"=> "15646"
                ],
                [
                "municipio"=> "Siachoque",
                "codigo"=> "15740"
                ],
                [
                "municipio"=> "Sora",
                "codigo"=> "15762"
                ],
                [
                "municipio"=> "Soracá",
                "codigo"=> "15764"
                ],
                [
                "municipio"=> "Sotaquirá",
                "codigo"=> "15763"
                ],
                [
                "municipio"=> "Toca",
                "codigo"=> "15814"
                ],
                [
                "municipio"=> "Tunja",
                "codigo"=> "15001"
                ],
                [
                "municipio"=> "Tuta",
                "codigo"=> "15837"
                ],
                [
                "municipio"=> "Ventaquemada",
                "codigo"=> "15861"
                ],
                [
                "municipio"=> "Chiscas",
                "codigo"=> "15180"
                ],
                [
                "municipio"=> "Cubará",
                "codigo"=> "15223"
                ],
                [
                "municipio"=> "El Cocuy",
                "codigo"=> "15244"
                ],
                [
                "municipio"=> "El Espino",
                "codigo"=> "15248"
                ],
                [
                "municipio"=> "Guacamayas",
                "codigo"=> "15317"
                ],
                [
                "municipio"=> "Güicán",
                "codigo"=> "15332"
                ],
                [
                "municipio"=> "Panqueba",
                "codigo"=> "15522"
                ],
                [
                "municipio"=> "Labranzagrande",
                "codigo"=> "15377"
                ],
                [
                "municipio"=> "Pajarito",
                "codigo"=> "15518"
                ],
                [
                "municipio"=> "Paya",
                "codigo"=> "15533"
                ],
                [
                "municipio"=> "Pisba",
                "codigo"=> "15550"
                ],
                [
                "municipio"=> "Berbeo",
                "codigo"=> "15090"
                ],
                [
                "municipio"=> "Campohermoso",
                "codigo"=> "15135"
                ],
                [
                "municipio"=> "Miraflores",
                "codigo"=> "15455"
                ],
                [
                "municipio"=> "Páez",
                "codigo"=> "15514"
                ],
                [
                "municipio"=> "San Eduardo",
                "codigo"=> "15660"
                ],
                [
                "municipio"=> "Zetaquira",
                "codigo"=> "15897"
                ],
                [
                "municipio"=> "Boyacá",
                "codigo"=> "15104"
                ],
                [
                "municipio"=> "Ciénega",
                "codigo"=> "15189"
                ],
                [
                "municipio"=> "Jenesano",
                "codigo"=> "15367"
                ],
                [
                "municipio"=> "Nuevo Colón",
                "codigo"=> "15494"
                ],
                [
                "municipio"=> "Ramiriquí",
                "codigo"=> "15599"
                ],
                [
                "municipio"=> "Rondón",
                "codigo"=> "15621"
                ],
                [
                "municipio"=> "Tibaná",
                "codigo"=> "15804"
                ],
                [
                "municipio"=> "Turmequé",
                "codigo"=> "15835"
                ],
                [
                "municipio"=> "Umbita",
                "codigo"=> "15842"
                ],
                [
                "municipio"=> "Viracachá",
                "codigo"=> "15879"
                ],
                [
                "municipio"=> "Chinavita",
                "codigo"=> "15172"
                ],
                [
                "municipio"=> "Garagoa",
                "codigo"=> "15299"
                ],
                [
                "municipio"=> "Macanal",
                "codigo"=> "15425"
                ],
                [
                "municipio"=> "Pachavita",
                "codigo"=> "15511"
                ],
                [
                "municipio"=> "San Luis De Gaceno",
                "codigo"=> "15667"
                ],
                [
                "municipio"=> "Santa María",
                "codigo"=> "15690"
                ],
                [
                "municipio"=> "Boavita",
                "codigo"=> "15097"
                ],
                [
                "municipio"=> "Covarachía",
                "codigo"=> "15218"
                ],
                [
                "municipio"=> "La Uvita",
                "codigo"=> "15403"
                ],
                [
                "municipio"=> "San Mateo",
                "codigo"=> "15673"
                ],
                [
                "municipio"=> "Sativanorte",
                "codigo"=> "15720"
                ],
                [
                "municipio"=> "Sativasur",
                "codigo"=> "15723"
                ],
                [
                "municipio"=> "Soatá",
                "codigo"=> "15753"
                ],
                [
                "municipio"=> "Susacón",
                "codigo"=> "15774"
                ],
                [
                "municipio"=> "Tipacoque",
                "codigo"=> "15810"
                ],
                [
                "municipio"=> "Briceño",
                "codigo"=> "15106"
                ],
                [
                "municipio"=> "Buenavista",
                "codigo"=> "15109"
                ],
                [
                "municipio"=> "Caldas",
                "codigo"=> "15131"
                ],
                [
                "municipio"=> "Chiquinquirá",
                "codigo"=> "15176"
                ],
                [
                "municipio"=> "Coper",
                "codigo"=> "15212"
                ],
                [
                "municipio"=> "La Victoria",
                "codigo"=> "15401"
                ],
                [
                "municipio"=> "Maripí",
                "codigo"=> "15442"
                ],
                [
                "municipio"=> "Muzo",
                "codigo"=> "15480"
                ],
                [
                "municipio"=> "Otanche",
                "codigo"=> "15507"
                ],
                [
                "municipio"=> "Pauna",
                "codigo"=> "15531"
                ],
                [
                "municipio"=> "Puerto Boyaca",
                "codigo"=> "15572"
                ],
                [
                "municipio"=> "Quípama",
                "codigo"=> "15580"
                ],
                [
                "municipio"=> "Saboyá",
                "codigo"=> "15632"
                ],
                [
                "municipio"=> "San Miguel De Sema",
                "codigo"=> "15676"
                ],
                [
                "municipio"=> "San Pablo Borbur",
                "codigo"=> "15681"
                ],
                [
                "municipio"=> "Tununguá",
                "codigo"=> "15832"
                ],
                [
                "municipio"=> "Almeida",
                "codigo"=> "15022"
                ],
                [
                "municipio"=> "Chivor",
                "codigo"=> "15236"
                ],
                [
                "municipio"=> "Guateque",
                "codigo"=> "15322"
                ],
                [
                "municipio"=> "Guayatá",
                "codigo"=> "15325"
                ],
                [
                "municipio"=> "La Capilla",
                "codigo"=> "15380"
                ],
                [
                "municipio"=> "Somondoco",
                "codigo"=> "15761"
                ],
                [
                "municipio"=> "Sutatenza",
                "codigo"=> "15778"
                ],
                [
                "municipio"=> "Tenza",
                "codigo"=> "15798"
                ],
                [
                "municipio"=> "Arcabuco",
                "codigo"=> "15051"
                ],
                [
                "municipio"=> "Chitaraque",
                "codigo"=> "15185"
                ],
                [
                "municipio"=> "Gachantivá",
                "codigo"=> "15293"
                ],
                [
                "municipio"=> "Moniquirá",
                "codigo"=> "15469"
                ],
                [
                "municipio"=> "Ráquira",
                "codigo"=> "15600"
                ],
                [
                "municipio"=> "Sáchica",
                "codigo"=> "15638"
                ],
                [
                "municipio"=> "San José De Pare",
                "codigo"=> "15664"
                ],
                [
                "municipio"=> "Santa Sofía",
                "codigo"=> "15696"
                ],
                [
                "municipio"=> "Santana",
                "codigo"=> "15686"
                ],
                [
                "municipio"=> "Sutamarchán",
                "codigo"=> "15776"
                ],
                [
                "municipio"=> "Tinjacá",
                "codigo"=> "15808"
                ],
                [
                "municipio"=> "Togüí",
                "codigo"=> "15816"
                ],
                [
                "municipio"=> "Villa De Leyva",
                "codigo"=> "15407"
                ],
                [
                "municipio"=> "Aquitania",
                "codigo"=> "15047"
                ],
                [
                "municipio"=> "Cuítiva",
                "codigo"=> "15226"
                ],
                [
                "municipio"=> "Firavitoba",
                "codigo"=> "15272"
                ],
                [
                "municipio"=> "Gameza",
                "codigo"=> "15296"
                ],
                [
                "municipio"=> "Iza",
                "codigo"=> "15362"
                ],
                [
                "municipio"=> "Mongua",
                "codigo"=> "15464"
                ],
                [
                "municipio"=> "Monguí",
                "codigo"=> "15466"
                ],
                [
                "municipio"=> "Nobsa",
                "codigo"=> "15491"
                ],
                [
                "municipio"=> "Pesca",
                "codigo"=> "15542"
                ],
                [
                "municipio"=> "Sogamoso",
                "codigo"=> "15759"
                ],
                [
                "municipio"=> "Tibasosa",
                "codigo"=> "15806"
                ],
                [
                "municipio"=> "Tópaga",
                "codigo"=> "15820"
                ],
                [
                "municipio"=> "Tota",
                "codigo"=> "15822"
                ],
                [
                "municipio"=> "Belén",
                "codigo"=> "15087"
                ],
                [
                "municipio"=> "Busbanzá",
                "codigo"=> "15114"
                ],
                [
                "municipio"=> "Cerinza",
                "codigo"=> "15162"
                ],
                [
                "municipio"=> "Corrales",
                "codigo"=> "15215"
                ],
                [
                "municipio"=> "Duitama",
                "codigo"=> "15238"
                ],
                [
                "municipio"=> "Floresta",
                "codigo"=> "15276"
                ],
                [
                "municipio"=> "Paipa",
                "codigo"=> "15516"
                ],
                [
                "municipio"=> "San Rosa Viterbo",
                "codigo"=> "15693"
                ],
                [
                "municipio"=> "Tutazá",
                "codigo"=> "15839"
                ],
                [
                "municipio"=> "Betéitiva",
                "codigo"=> "15092"
                ],
                [
                "municipio"=> "Chita",
                "codigo"=> "15183"
                ],
                [
                "municipio"=> "Jericó",
                "codigo"=> "15368"
                ],
                [
                "municipio"=> "Paz De Río",
                "codigo"=> "15537"
                ],
                [
                "municipio"=> "Socha",
                "codigo"=> "15757"
                ],
                [
                "municipio"=> "Socotá",
                "codigo"=> "15755"
                ],
                [
                "municipio"=> "Tasco",
                "codigo"=> "15790"
                ]
            ],
            "CALDAS"=> [
                [
                "municipio"=> "Filadelfia",
                "codigo"=> "17272"
                ],
                [
                "municipio"=> "La Merced",
                "codigo"=> "17388"
                ],
                [
                "municipio"=> "Marmato",
                "codigo"=> "17442"
                ],
                [
                "municipio"=> "Riosucio",
                "codigo"=> "17614"
                ],
                [
                "municipio"=> "Supía",
                "codigo"=> "17777"
                ],
                [
                "municipio"=> "Manzanares",
                "codigo"=> "17433"
                ],
                [
                "municipio"=> "Marquetalia",
                "codigo"=> "17444"
                ],
                [
                "municipio"=> "Marulanda",
                "codigo"=> "17446"
                ],
                [
                "municipio"=> "Pensilvania",
                "codigo"=> "17541"
                ],
                [
                "municipio"=> "Anserma",
                "codigo"=> "17042"
                ],
                [
                "municipio"=> "Belalcázar",
                "codigo"=> "17088"
                ],
                [
                "municipio"=> "Risaralda",
                "codigo"=> "17616"
                ],
                [
                "municipio"=> "San José",
                "codigo"=> "17665"
                ],
                [
                "municipio"=> "Viterbo",
                "codigo"=> "17877"
                ],
                [
                "municipio"=> "Chinchina",
                "codigo"=> "17174"
                ],
                [
                "municipio"=> "Manizales",
                "codigo"=> "17001"
                ],
                [
                "municipio"=> "Neira",
                "codigo"=> "17486"
                ],
                [
                "municipio"=> "Palestina",
                "codigo"=> "17524"
                ],
                [
                "municipio"=> "Villamaria",
                "codigo"=> "17873"
                ],
                [
                "municipio"=> "Aguadas",
                "codigo"=> "17013"
                ],
                [
                "municipio"=> "Aranzazu",
                "codigo"=> "17050"
                ],
                [
                "municipio"=> "Pácora",
                "codigo"=> "17513"
                ],
                [
                "municipio"=> "Salamina",
                "codigo"=> "17653"
                ],
                [
                "municipio"=> "La Dorada",
                "codigo"=> "17380"
                ],
                [
                "municipio"=> "Norcasia",
                "codigo"=> "17495"
                ],
                [
                "municipio"=> "Samaná",
                "codigo"=> "17662"
                ],
                [
                "municipio"=> "Victoria",
                "codigo"=> "17867"
                ]
            ],
            "CAQUETA"=> [
                [
                "municipio"=> "Albania",
                "codigo"=> "18029"
                ],
                [
                "municipio"=> "Belén De Los Andaquies",
                "codigo"=> "18094"
                ],
                [
                "municipio"=> "Cartagena Del Chairá",
                "codigo"=> "18150"
                ],
                [
                "municipio"=> "Currillo",
                "codigo"=> "18205"
                ],
                [
                "municipio"=> "El Doncello",
                "codigo"=> "18247"
                ],
                [
                "municipio"=> "El Paujil",
                "codigo"=> "18256"
                ],
                [
                "municipio"=> "Florencia",
                "codigo"=> "18001"
                ],
                [
                "municipio"=> "La Montañita",
                "codigo"=> "18410"
                ],
                [
                "municipio"=> "Milan",
                "codigo"=> "18460"
                ],
                [
                "municipio"=> "Morelia",
                "codigo"=> "18479"
                ],
                [
                "municipio"=> "Puerto Rico",
                "codigo"=> "18592"
                ],
                [
                "municipio"=> "San Jose Del Fragua",
                "codigo"=> "18610"
                ],
                [
                "municipio"=> "San Vicente Del Caguán",
                "codigo"=> "18753"
                ],
                [
                "municipio"=> "Solano",
                "codigo"=> "18756"
                ],
                [
                "municipio"=> "Solita",
                "codigo"=> "18785"
                ],
                [
                "municipio"=> "Valparaiso",
                "codigo"=> "18860"
                ]
            ],
            "CASANARE"=> [
                [
                "municipio"=> "Aguazul",
                "codigo"=> "85010"
                ],
                [
                "municipio"=> "Chameza",
                "codigo"=> "85015"
                ],
                [
                "municipio"=> "Hato Corozal",
                "codigo"=> "85125"
                ],
                [
                "municipio"=> "La Salina",
                "codigo"=> "85136"
                ],
                [
                "municipio"=> "Maní",
                "codigo"=> "85139"
                ],
                [
                "municipio"=> "Monterrey",
                "codigo"=> "85162"
                ],
                [
                "municipio"=> "Nunchía",
                "codigo"=> "85225"
                ],
                [
                "municipio"=> "Orocué",
                "codigo"=> "85230"
                ],
                [
                "municipio"=> "Paz De Ariporo",
                "codigo"=> "85250"
                ],
                [
                "municipio"=> "Pore",
                "codigo"=> "85263"
                ],
                [
                "municipio"=> "Recetor",
                "codigo"=> "85279"
                ],
                [
                "municipio"=> "Sabanalarga",
                "codigo"=> "85300"
                ],
                [
                "municipio"=> "Sácama",
                "codigo"=> "85315"
                ],
                [
                "municipio"=> "San Luis De Palenque",
                "codigo"=> "85325"
                ],
                [
                "municipio"=> "Támara",
                "codigo"=> "85400"
                ],
                [
                "municipio"=> "Tauramena",
                "codigo"=> "85410"
                ],
                [
                "municipio"=> "Trinidad",
                "codigo"=> "85430"
                ],
                [
                "municipio"=> "Villanueva",
                "codigo"=> "85440"
                ],
                [
                "municipio"=> "Yopal",
                "codigo"=> "85001"
                ]
            ],
            "CAUCA"=> [
                [
                "municipio"=> "Cajibío",
                "codigo"=> "19130"
                ],
                [
                "municipio"=> "El Tambo",
                "codigo"=> "19256"
                ],
                [
                "municipio"=> "La Sierra",
                "codigo"=> "19392"
                ],
                [
                "municipio"=> "Morales",
                "codigo"=> "19473"
                ],
                [
                "municipio"=> "Piendamo",
                "codigo"=> "19548"
                ],
                [
                "municipio"=> "Popayán",
                "codigo"=> "19001"
                ],
                [
                "municipio"=> "Rosas",
                "codigo"=> "19622"
                ],
                [
                "municipio"=> "Sotara",
                "codigo"=> "19760"
                ],
                [
                "municipio"=> "Timbio",
                "codigo"=> "19807"
                ],
                [
                "municipio"=> "Buenos Aires",
                "codigo"=> "19110"
                ],
                [
                "municipio"=> "Caloto",
                "codigo"=> "19142"
                ],
                [
                "municipio"=> "Corinto",
                "codigo"=> "19212"
                ],
                [
                "municipio"=> "Miranda",
                "codigo"=> "19455"
                ],
                [
                "municipio"=> "Padilla",
                "codigo"=> "19513"
                ],
                [
                "municipio"=> "Puerto Tejada",
                "codigo"=> "19573"
                ],
                [
                "municipio"=> "Santander De Quilichao",
                "codigo"=> "19698"
                ],
                [
                "municipio"=> "Suarez",
                "codigo"=> "19780"
                ],
                [
                "municipio"=> "Villa Rica",
                "codigo"=> "19845"
                ],
                [
                "municipio"=> "Guapi",
                "codigo"=> "19318"
                ],
                [
                "municipio"=> "Lopez",
                "codigo"=> "19418"
                ],
                [
                "municipio"=> "Timbiqui",
                "codigo"=> "19809"
                ],
                [
                "municipio"=> "Caldono",
                "codigo"=> "19137"
                ],
                [
                "municipio"=> "Inzá",
                "codigo"=> "19355"
                ],
                [
                "municipio"=> "Jambalo",
                "codigo"=> "19364"
                ],
                [
                "municipio"=> "Paez",
                "codigo"=> "19517"
                ],
                [
                "municipio"=> "Purace",
                "codigo"=> "19585"
                ],
                [
                "municipio"=> "Silvia",
                "codigo"=> "19743"
                ],
                [
                "municipio"=> "Toribio",
                "codigo"=> "19821"
                ],
                [
                "municipio"=> "Totoro",
                "codigo"=> "19824"
                ],
                [
                "municipio"=> "Almaguer",
                "codigo"=> "19022"
                ],
                [
                "municipio"=> "Argelia",
                "codigo"=> "19050"
                ],
                [
                "municipio"=> "Balboa",
                "codigo"=> "19075"
                ],
                [
                "municipio"=> "Bolívar",
                "codigo"=> "19100"
                ],
                [
                "municipio"=> "Florencia",
                "codigo"=> "19290"
                ],
                [
                "municipio"=> "La Vega",
                "codigo"=> "19397"
                ],
                [
                "municipio"=> "Mercaderes",
                "codigo"=> "19450"
                ],
                [
                "municipio"=> "Patia",
                "codigo"=> "19532"
                ],
                [
                "municipio"=> "Piamonte",
                "codigo"=> "19533"
                ],
                [
                "municipio"=> "San Sebastian",
                "codigo"=> "19693"
                ],
                [
                "municipio"=> "Santa Rosa",
                "codigo"=> "19701"
                ],
                [
                "municipio"=> "Sucre",
                "codigo"=> "19785"
                ]
            ],
            "CESAR"=> [
                [
                "municipio"=> "Becerril",
                "codigo"=> "20045"
                ],
                [
                "municipio"=> "Chimichagua",
                "codigo"=> "20175"
                ],
                [
                "municipio"=> "Chiriguana",
                "codigo"=> "20178"
                ],
                [
                "municipio"=> "Curumaní",
                "codigo"=> "20228"
                ],
                [
                "municipio"=> "La Jagua De Ibirico",
                "codigo"=> "20400"
                ],
                [
                "municipio"=> "Pailitas",
                "codigo"=> "20517"
                ],
                [
                "municipio"=> "Tamalameque",
                "codigo"=> "20787"
                ],
                [
                "municipio"=> "Astrea",
                "codigo"=> "20032"
                ],
                [
                "municipio"=> "Bosconia",
                "codigo"=> "20060"
                ],
                [
                "municipio"=> "El Copey",
                "codigo"=> "20238"
                ],
                [
                "municipio"=> "El Paso",
                "codigo"=> "20250"
                ],
                [
                "municipio"=> "Agustín Codazzi",
                "codigo"=> "20013"
                ],
                [
                "municipio"=> "La Paz",
                "codigo"=> "20621"
                ],
                [
                "municipio"=> "Manaure",
                "codigo"=> "20443"
                ],
                [
                "municipio"=> "Pueblo Bello",
                "codigo"=> "20570"
                ],
                [
                "municipio"=> "San Diego",
                "codigo"=> "20750"
                ],
                [
                "municipio"=> "Valledupar",
                "codigo"=> "20001"
                ],
                [
                "municipio"=> "Aguachica",
                "codigo"=> "20011"
                ],
                [
                "municipio"=> "Gamarra",
                "codigo"=> "20295"
                ],
                [
                "municipio"=> "González",
                "codigo"=> "20310"
                ],
                [
                "municipio"=> "La Gloria",
                "codigo"=> "20383"
                ],
                [
                "municipio"=> "Pelaya",
                "codigo"=> "20550"
                ],
                [
                "municipio"=> "Río De Oro",
                "codigo"=> "20614"
                ],
                [
                "municipio"=> "San Alberto",
                "codigo"=> "20710"
                ],
                [
                "municipio"=> "San Martín",
                "codigo"=> "20770"
                ]
            ],
            "CHOCO"=> [
                [
                "municipio"=> "Atrato",
                "codigo"=> "27050"
                ],
                [
                "municipio"=> "Bagadó",
                "codigo"=> "27073"
                ],
                [
                "municipio"=> "Bojaya",
                "codigo"=> "27099"
                ],
                [
                "municipio"=> "El Carmen De Atrato",
                "codigo"=> "27245"
                ],
                [
                "municipio"=> "Lloró",
                "codigo"=> "27413"
                ],
                [
                "municipio"=> "Medio Atrato",
                "codigo"=> "27425"
                ],
                [
                "municipio"=> "Quibdó",
                "codigo"=> "27001"
                ],
                [
                "municipio"=> "Rio Quito",
                "codigo"=> "27600"
                ],
                [
                "municipio"=> "Acandí",
                "codigo"=> "27006"
                ],
                [
                "municipio"=> "Belén De Bajira",
                "codigo"=> "27086"
                ],
                [
                "municipio"=> "Carmén Del Darién",
                "codigo"=> "27150"
                ],
                [
                "municipio"=> "Riosucio",
                "codigo"=> "27615"
                ],
                [
                "municipio"=> "Unguía",
                "codigo"=> "27800"
                ],
                [
                "municipio"=> "Bahía Solano",
                "codigo"=> "27075"
                ],
                [
                "municipio"=> "Juradó",
                "codigo"=> "27372"
                ],
                [
                "municipio"=> "Nuquí",
                "codigo"=> "27495"
                ],
                [
                "municipio"=> "Alto Baudó",
                "codigo"=> "27025"
                ],
                [
                "municipio"=> "Bajo Baudó",
                "codigo"=> "27077"
                ],
                [
                "municipio"=> "El Litoral Del San Juan",
                "codigo"=> "27250"
                ],
                [
                "municipio"=> "Medio Baudó",
                "codigo"=> "27430"
                ],
                [
                "municipio"=> "Canton De San Pablo",
                "codigo"=> "27135"
                ],
                [
                "municipio"=> "Certegui",
                "codigo"=> "27160"
                ],
                [
                "municipio"=> "Condoto",
                "codigo"=> "27205"
                ],
                [
                "municipio"=> "Itsmina",
                "codigo"=> "27361"
                ],
                [
                "municipio"=> "Medio San Juan",
                "codigo"=> "27450"
                ],
                [
                "municipio"=> "Nóvita",
                "codigo"=> "27491"
                ],
                [
                "municipio"=> "Río Frío",
                "codigo"=> "27580"
                ],
                [
                "municipio"=> "San José Del Palmar",
                "codigo"=> "27660"
                ],
                [
                "municipio"=> "Sipí",
                "codigo"=> "27745"
                ],
                [
                "municipio"=> "Tadó",
                "codigo"=> "27787"
                ],
                [
                "municipio"=> "Union Panamericana",
                "codigo"=> "27810"
                ]
            ],
            "CORDOBA"=> [
                [
                "municipio"=> "Tierralta",
                "codigo"=> "23807"
                ],
                [
                "municipio"=> "Valencia",
                "codigo"=> "23855"
                ],
                [
                "municipio"=> "Chimá",
                "codigo"=> "23168"
                ],
                [
                "municipio"=> "Cotorra",
                "codigo"=> "23300"
                ],
                [
                "municipio"=> "Lorica",
                "codigo"=> "23417"
                ],
                [
                "municipio"=> "Momil",
                "codigo"=> "23464"
                ],
                [
                "municipio"=> "Purísima",
                "codigo"=> "23586"
                ],
                [
                "municipio"=> "Montería",
                "codigo"=> "23001"
                ],
                [
                "municipio"=> "Canalete",
                "codigo"=> "23090"
                ],
                [
                "municipio"=> "Los Córdobas",
                "codigo"=> "23419"
                ],
                [
                "municipio"=> "Moñitos",
                "codigo"=> "23500"
                ],
                [
                "municipio"=> "Puerto Escondido",
                "codigo"=> "23574"
                ],
                [
                "municipio"=> "San Antero",
                "codigo"=> "23672"
                ],
                [
                "municipio"=> "San Bernardo Del Viento",
                "codigo"=> "23675"
                ],
                [
                "municipio"=> "Chinú",
                "codigo"=> "23182"
                ],
                [
                "municipio"=> "Sahagún",
                "codigo"=> "23660"
                ],
                [
                "municipio"=> "San Andrés Sotavento",
                "codigo"=> "23670"
                ],
                [
                "municipio"=> "Ayapel",
                "codigo"=> "23068"
                ],
                [
                "municipio"=> "Buenavista",
                "codigo"=> "23079"
                ],
                [
                "municipio"=> "La Apartada",
                "codigo"=> "23350"
                ],
                [
                "municipio"=> "Montelíbano",
                "codigo"=> "23466"
                ],
                [
                "municipio"=> "Planeta Rica",
                "codigo"=> "23555"
                ],
                [
                "municipio"=> "Pueblo Nuevo",
                "codigo"=> "23570"
                ],
                [
                "municipio"=> "Puerto Libertador",
                "codigo"=> "23580"
                ],
                [
                "municipio"=> "Cereté",
                "codigo"=> "23162"
                ],
                [
                "municipio"=> "Ciénaga De Oro",
                "codigo"=> "23189"
                ],
                [
                "municipio"=> "San Carlos",
                "codigo"=> "23678"
                ],
                [
                "municipio"=> "San Pelayo",
                "codigo"=> "23686"
                ]
            ],
            "CUNDINAMARCA"=> [
                [
                "municipio"=> "Chocontá",
                "codigo"=> "25183"
                ],
                [
                "municipio"=> "Macheta",
                "codigo"=> "25426"
                ],
                [
                "municipio"=> "Manta",
                "codigo"=> "25436"
                ],
                [
                "municipio"=> "Sesquilé",
                "codigo"=> "25736"
                ],
                [
                "municipio"=> "Suesca",
                "codigo"=> "25772"
                ],
                [
                "municipio"=> "Tibirita",
                "codigo"=> "25807"
                ],
                [
                "municipio"=> "Villapinzón",
                "codigo"=> "25873"
                ],
                [
                "municipio"=> "Agua De Dios",
                "codigo"=> "25001"
                ],
                [
                "municipio"=> "Girardot",
                "codigo"=> "25307"
                ],
                [
                "municipio"=> "Guataquí",
                "codigo"=> "25324"
                ],
                [
                "municipio"=> "Jerusalén",
                "codigo"=> "25368"
                ],
                [
                "municipio"=> "Nariño",
                "codigo"=> "25483"
                ],
                [
                "municipio"=> "Nilo",
                "codigo"=> "25488"
                ],
                [
                "municipio"=> "Ricaurte",
                "codigo"=> "25612"
                ],
                [
                "municipio"=> "Tocaima",
                "codigo"=> "25815"
                ],
                [
                "municipio"=> "Caparrapí",
                "codigo"=> "25148"
                ],
                [
                "municipio"=> "Guaduas",
                "codigo"=> "25320"
                ],
                [
                "municipio"=> "Puerto Salgar",
                "codigo"=> "25572"
                ],
                [
                "municipio"=> "Albán",
                "codigo"=> "25019"
                ],
                [
                "municipio"=> "La Peña",
                "codigo"=> "25398"
                ],
                [
                "municipio"=> "La Vega",
                "codigo"=> "25402"
                ],
                [
                "municipio"=> "Nimaima",
                "codigo"=> "25489"
                ],
                [
                "municipio"=> "Nocaima",
                "codigo"=> "25491"
                ],
                [
                "municipio"=> "Quebradanegra",
                "codigo"=> "25592"
                ],
                [
                "municipio"=> "San Francisco",
                "codigo"=> "25658"
                ],
                [
                "municipio"=> "Sasaima",
                "codigo"=> "25718"
                ],
                [
                "municipio"=> "Supatá",
                "codigo"=> "25777"
                ],
                [
                "municipio"=> "Útica",
                "codigo"=> "25851"
                ],
                [
                "municipio"=> "Vergara",
                "codigo"=> "25862"
                ],
                [
                "municipio"=> "Villeta",
                "codigo"=> "25875"
                ],
                [
                "municipio"=> "Gachala",
                "codigo"=> "25293"
                ],
                [
                "municipio"=> "Gacheta",
                "codigo"=> "25297"
                ],
                [
                "municipio"=> "Gama",
                "codigo"=> "25299"
                ],
                [
                "municipio"=> "Guasca",
                "codigo"=> "25322"
                ],
                [
                "municipio"=> "Guatavita",
                "codigo"=> "25326"
                ],
                [
                "municipio"=> "Junín",
                "codigo"=> "25372"
                ],
                [
                "municipio"=> "La Calera",
                "codigo"=> "25377"
                ],
                [
                "municipio"=> "Ubalá",
                "codigo"=> "25839"
                ],
                [
                "municipio"=> "Beltrán",
                "codigo"=> "25086"
                ],
                [
                "municipio"=> "Bituima",
                "codigo"=> "25095"
                ],
                [
                "municipio"=> "Chaguaní",
                "codigo"=> "25168"
                ],
                [
                "municipio"=> "Guayabal De Siquima",
                "codigo"=> "25328"
                ],
                [
                "municipio"=> "Puli",
                "codigo"=> "25580"
                ],
                [
                "municipio"=> "San Juan De Río Seco",
                "codigo"=> "25662"
                ],
                [
                "municipio"=> "Vianí",
                "codigo"=> "25867"
                ],
                [
                "municipio"=> "Medina",
                "codigo"=> "25438"
                ],
                [
                "municipio"=> "Paratebueno",
                "codigo"=> "25530"
                ],
                [
                "municipio"=> "Caqueza",
                "codigo"=> "25151"
                ],
                [
                "municipio"=> "Chipaque",
                "codigo"=> "25178"
                ],
                [
                "municipio"=> "Choachí",
                "codigo"=> "25181"
                ],
                [
                "municipio"=> "Fomeque",
                "codigo"=> "25279"
                ],
                [
                "municipio"=> "Fosca",
                "codigo"=> "25281"
                ],
                [
                "municipio"=> "Guayabetal",
                "codigo"=> "25335"
                ],
                [
                "municipio"=> "Gutiérrez",
                "codigo"=> "25339"
                ],
                [
                "municipio"=> "Quetame",
                "codigo"=> "25594"
                ],
                [
                "municipio"=> "Ubaque",
                "codigo"=> "25841"
                ],
                [
                "municipio"=> "Une",
                "codigo"=> "25845"
                ],
                [
                "municipio"=> "El Peñón",
                "codigo"=> "25258"
                ],
                [
                "municipio"=> "La Palma",
                "codigo"=> "25394"
                ],
                [
                "municipio"=> "Pacho",
                "codigo"=> "25513"
                ],
                [
                "municipio"=> "Paime",
                "codigo"=> "25518"
                ],
                [
                "municipio"=> "San Cayetano",
                "codigo"=> "25653"
                ],
                [
                "municipio"=> "Topaipi",
                "codigo"=> "25823"
                ],
                [
                "municipio"=> "Villagomez",
                "codigo"=> "25871"
                ],
                [
                "municipio"=> "Yacopí",
                "codigo"=> "25885"
                ],
                [
                "municipio"=> "Cajicá",
                "codigo"=> "25126"
                ],
                [
                "municipio"=> "Chía",
                "codigo"=> "25175"
                ],
                [
                "municipio"=> "Cogua",
                "codigo"=> "25200"
                ],
                [
                "municipio"=> "Gachancipá",
                "codigo"=> "25295"
                ],
                [
                "municipio"=> "Nemocon",
                "codigo"=> "25486"
                ],
                [
                "municipio"=> "Sopó",
                "codigo"=> "25758"
                ],
                [
                "municipio"=> "Tabio",
                "codigo"=> "25785"
                ],
                [
                "municipio"=> "Tocancipá",
                "codigo"=> "25817"
                ],
                [
                "municipio"=> "Zipaquirá",
                "codigo"=> "25899"
                ],
                [
                "municipio"=> "Bojacá",
                "codigo"=> "25099"
                ],
                [
                "municipio"=> "Cota",
                "codigo"=> "25214"
                ],
                [
                "municipio"=> "El Rosal",
                "codigo"=> "25260"
                ],
                [
                "municipio"=> "Facatativá",
                "codigo"=> "25269"
                ],
                [
                "municipio"=> "Funza",
                "codigo"=> "25286"
                ],
                [
                "municipio"=> "Madrid",
                "codigo"=> "25430"
                ],
                [
                "municipio"=> "Mosquera",
                "codigo"=> "25473"
                ],
                [
                "municipio"=> "Subachoque",
                "codigo"=> "25769"
                ],
                [
                "municipio"=> "Tenjo",
                "codigo"=> "25799"
                ],
                [
                "municipio"=> "Zipacon",
                "codigo"=> "25898"
                ],
                [
                "municipio"=> "Sibaté",
                "codigo"=> "25740"
                ],
                [
                "municipio"=> "Soacha",
                "codigo"=> "25754"
                ],
                [
                "municipio"=> "Arbeláez",
                "codigo"=> "25053"
                ],
                [
                "municipio"=> "Cabrera",
                "codigo"=> "25120"
                ],
                [
                "municipio"=> "Fusagasugá",
                "codigo"=> "25290"
                ],
                [
                "municipio"=> "Granada",
                "codigo"=> "25312"
                ],
                [
                "municipio"=> "Pandi",
                "codigo"=> "25524"
                ],
                [
                "municipio"=> "Pasca",
                "codigo"=> "25535"
                ],
                [
                "municipio"=> "San Bernardo",
                "codigo"=> "25649"
                ],
                [
                "municipio"=> "Silvania",
                "codigo"=> "25743"
                ],
                [
                "municipio"=> "Tibacuy",
                "codigo"=> "25805"
                ],
                [
                "municipio"=> "Venecia",
                "codigo"=> "25506"
                ],
                [
                "municipio"=> "Anapoima",
                "codigo"=> "25035"
                ],
                [
                "municipio"=> "Anolaima",
                "codigo"=> "25040"
                ],
                [
                "municipio"=> "Apulo",
                "codigo"=> "25599"
                ],
                [
                "municipio"=> "Cachipay",
                "codigo"=> "25123"
                ],
                [
                "municipio"=> "El Colegio",
                "codigo"=> "25245"
                ],
                [
                "municipio"=> "La Mesa",
                "codigo"=> "25386"
                ],
                [
                "municipio"=> "Quipile",
                "codigo"=> "25596"
                ],
                [
                "municipio"=> "San Antonio De Tequendama",
                "codigo"=> "25645"
                ],
                [
                "municipio"=> "Tena",
                "codigo"=> "25797"
                ],
                [
                "municipio"=> "Viotá",
                "codigo"=> "25878"
                ],
                [
                "municipio"=> "Carmen De Carupa",
                "codigo"=> "25154"
                ],
                [
                "municipio"=> "Cucunubá",
                "codigo"=> "25224"
                ],
                [
                "municipio"=> "Fúquene",
                "codigo"=> "25288"
                ],
                [
                "municipio"=> "Guachetá",
                "codigo"=> "25317"
                ],
                [
                "municipio"=> "Lenguazaque",
                "codigo"=> "25407"
                ],
                [
                "municipio"=> "Simijaca",
                "codigo"=> "25745"
                ],
                [
                "municipio"=> "Susa",
                "codigo"=> "25779"
                ],
                [
                "municipio"=> "Sutatausa",
                "codigo"=> "25781"
                ],
                [
                "municipio"=> "Tausa",
                "codigo"=> "25793"
                ],
                [
                "municipio"=> "Ubate",
                "codigo"=> "25843"
                ]
            ],
            "GUAINIA"=> [
                [
                "municipio"=> "Barranco Mina",
                "codigo"=> "94343"
                ],
                [
                "municipio"=> "Cacahual",
                "codigo"=> "94886"
                ],
                [
                "municipio"=> "Inírida",
                "codigo"=> "94001"
                ],
                [
                "municipio"=> "La Guadalupe",
                "codigo"=> "94885"
                ],
                [
                "municipio"=> "Mapiripan",
                "codigo"=> "94663"
                ],
                [
                "municipio"=> "Morichal",
                "codigo"=> "94888"
                ],
                [
                "municipio"=> "Pana Pana",
                "codigo"=> "94887"
                ],
                [
                "municipio"=> "Puerto Colombia",
                "codigo"=> "94884"
                ],
                [
                "municipio"=> "San Felipe",
                "codigo"=> "94883"
                ]
            ],
            "GUAVIARE"=> [
                [
                "municipio"=> "Calamar",
                "codigo"=> "95015"
                ],
                [
                "municipio"=> "El Retorno",
                "codigo"=> "95025"
                ],
                [
                "municipio"=> "Miraflores",
                "codigo"=> "95200"
                ],
                [
                "municipio"=> "San José Del Guaviare",
                "codigo"=> "95001"
                ]
            ],
            "HUILA"=> [
                [
                "municipio"=> "Agrado",
                "codigo"=> "41013"
                ],
                [
                "municipio"=> "Altamira",
                "codigo"=> "41026"
                ],
                [
                "municipio"=> "Garzón",
                "codigo"=> "41298"
                ],
                [
                "municipio"=> "Gigante",
                "codigo"=> "41306"
                ],
                [
                "municipio"=> "Guadalupe",
                "codigo"=> "41319"
                ],
                [
                "municipio"=> "Pital",
                "codigo"=> "41548"
                ],
                [
                "municipio"=> "Suaza",
                "codigo"=> "41770"
                ],
                [
                "municipio"=> "Tarqui",
                "codigo"=> "41791"
                ],
                [
                "municipio"=> "Aipe",
                "codigo"=> "41016"
                ],
                [
                "municipio"=> "Algeciras",
                "codigo"=> "41020"
                ],
                [
                "municipio"=> "Baraya",
                "codigo"=> "41078"
                ],
                [
                "municipio"=> "Campoalegre",
                "codigo"=> "41132"
                ],
                [
                "municipio"=> "Colombia",
                "codigo"=> "41206"
                ],
                [
                "municipio"=> "Hobo",
                "codigo"=> "41349"
                ],
                [
                "municipio"=> "Iquira",
                "codigo"=> "41357"
                ],
                [
                "municipio"=> "Neiva",
                "codigo"=> "41001"
                ],
                [
                "municipio"=> "Palermo",
                "codigo"=> "41524"
                ],
                [
                "municipio"=> "Rivera",
                "codigo"=> "41615"
                ],
                [
                "municipio"=> "Santa María",
                "codigo"=> "41676"
                ],
                [
                "municipio"=> "Tello",
                "codigo"=> "41799"
                ],
                [
                "municipio"=> "Teruel",
                "codigo"=> "41801"
                ],
                [
                "municipio"=> "Villavieja",
                "codigo"=> "41872"
                ],
                [
                "municipio"=> "Yaguará",
                "codigo"=> "41885"
                ],
                [
                "municipio"=> "La Argentina",
                "codigo"=> "41378"
                ],
                [
                "municipio"=> "La Plata",
                "codigo"=> "41396"
                ],
                [
                "municipio"=> "Nátaga",
                "codigo"=> "41483"
                ],
                [
                "municipio"=> "Paicol",
                "codigo"=> "41518"
                ],
                [
                "municipio"=> "Tesalia",
                "codigo"=> "41797"
                ],
                [
                "municipio"=> "Acevedo",
                "codigo"=> "41006"
                ],
                [
                "municipio"=> "Elías",
                "codigo"=> "41244"
                ],
                [
                "municipio"=> "Isnos",
                "codigo"=> "41359"
                ],
                [
                "municipio"=> "Oporapa",
                "codigo"=> "41503"
                ],
                [
                "municipio"=> "Palestina",
                "codigo"=> "41530"
                ],
                [
                "municipio"=> "Pitalito",
                "codigo"=> "41551"
                ],
                [
                "municipio"=> "Saladoblanco",
                "codigo"=> "41660"
                ],
                [
                "municipio"=> "San Agustín",
                "codigo"=> "41668"
                ],
                [
                "municipio"=> "Timaná",
                "codigo"=> "41807"
                ]
            ],
            "LA GUAJIRA"=> [
                [
                "municipio"=> "Albania",
                "codigo"=> "44035"
                ],
                [
                "municipio"=> "Dibulla",
                "codigo"=> "44090"
                ],
                [
                "municipio"=> "Maicao",
                "codigo"=> "44430"
                ],
                [
                "municipio"=> "Manaure",
                "codigo"=> "44560"
                ],
                [
                "municipio"=> "Riohacha",
                "codigo"=> "44001"
                ],
                [
                "municipio"=> "Uribia",
                "codigo"=> "44847"
                ],
                [
                "municipio"=> "Barrancas",
                "codigo"=> "44078"
                ],
                [
                "municipio"=> "Distraccion",
                "codigo"=> "44098"
                ],
                [
                "municipio"=> "El Molino",
                "codigo"=> "44110"
                ],
                [
                "municipio"=> "Fonseca",
                "codigo"=> "44279"
                ],
                [
                "municipio"=> "Hatonuevo",
                "codigo"=> "44378"
                ],
                [
                "municipio"=> "La Jagua Del Pilar",
                "codigo"=> "44420"
                ],
                [
                "municipio"=> "San Juan Del Cesar",
                "codigo"=> "44650"
                ],
                [
                "municipio"=> "Urumita",
                "codigo"=> "44855"
                ],
                [
                "municipio"=> "Villanueva",
                "codigo"=> "44874"
                ]
            ],
            "MAGDALENA"=> [
                [
                "municipio"=> "Ariguaní",
                "codigo"=> "47058"
                ],
                [
                "municipio"=> "Chibolo",
                "codigo"=> "47170"
                ],
                [
                "municipio"=> "Nueva Granada",
                "codigo"=> "47460"
                ],
                [
                "municipio"=> "Plato",
                "codigo"=> "47555"
                ],
                [
                "municipio"=> "Sabanas De San Angel",
                "codigo"=> "47660"
                ],
                [
                "municipio"=> "Tenerife",
                "codigo"=> "47798"
                ],
                [
                "municipio"=> "Algarrobo",
                "codigo"=> "47030"
                ],
                [
                "municipio"=> "Aracataca",
                "codigo"=> "47053"
                ],
                [
                "municipio"=> "Ciénaga",
                "codigo"=> "47189"
                ],
                [
                "municipio"=> "El Reten",
                "codigo"=> "47268"
                ],
                [
                "municipio"=> "Fundacion",
                "codigo"=> "47288"
                ],
                [
                "municipio"=> "Pueblo Viejo",
                "codigo"=> "47570"
                ],
                [
                "municipio"=> "Zona Bananera",
                "codigo"=> "47980"
                ],
                [
                "municipio"=> "Cerro San Antonio",
                "codigo"=> "47161"
                ],
                [
                "municipio"=> "Concordia",
                "codigo"=> "47205"
                ],
                [
                "municipio"=> "El Piñon",
                "codigo"=> "47258"
                ],
                [
                "municipio"=> "Pedraza",
                "codigo"=> "47541"
                ],
                [
                "municipio"=> "Pivijay",
                "codigo"=> "47551"
                ],
                [
                "municipio"=> "Remolino",
                "codigo"=> "47605"
                ],
                [
                "municipio"=> "Salamina",
                "codigo"=> "47675"
                ],
                [
                "municipio"=> "Sitionuevo",
                "codigo"=> "47745"
                ],
                [
                "municipio"=> "Zapayan",
                "codigo"=> "47960"
                ],
                [
                "municipio"=> "Santa Marta",
                "codigo"=> "47001"
                ],
                [
                "municipio"=> "El Banco",
                "codigo"=> "47245"
                ],
                [
                "municipio"=> "Guamal",
                "codigo"=> "47318"
                ],
                [
                "municipio"=> "Pijiño Del Carmen",
                "codigo"=> "47545"
                ],
                [
                "municipio"=> "San Sebastian De Buenavista",
                "codigo"=> "47692"
                ],
                [
                "municipio"=> "San Zenon",
                "codigo"=> "47703"
                ],
                [
                "municipio"=> "Santa Ana",
                "codigo"=> "47707"
                ],
                [
                "municipio"=> "Santa Barbara De Pinto",
                "codigo"=> "47720"
                ]
            ],
            "META"=> [
                [
                "municipio"=> "El Castillo",
                "codigo"=> "50251"
                ],
                [
                "municipio"=> "El Dorado",
                "codigo"=> "50270"
                ],
                [
                "municipio"=> "Fuente De Oro",
                "codigo"=> "50287"
                ],
                [
                "municipio"=> "Granada",
                "codigo"=> "50313"
                ],
                [
                "municipio"=> "La Macarena",
                "codigo"=> "50350"
                ],
                [
                "municipio"=> "La Uribe",
                "codigo"=> "50370"
                ],
                [
                "municipio"=> "Lejanías",
                "codigo"=> "50400"
                ],
                [
                "municipio"=> "Mapiripan",
                "codigo"=> "50325"
                ],
                [
                "municipio"=> "Mesetas",
                "codigo"=> "50330"
                ],
                [
                "municipio"=> "Puerto Concordia",
                "codigo"=> "50450"
                ],
                [
                "municipio"=> "Puerto Lleras",
                "codigo"=> "50577"
                ],
                [
                "municipio"=> "Puerto Rico",
                "codigo"=> "50590"
                ],
                [
                "municipio"=> "San Juan De Arama",
                "codigo"=> "50683"
                ],
                [
                "municipio"=> "Vista Hermosa",
                "codigo"=> "50711"
                ],
                [
                "municipio"=> "Villavicencio",
                "codigo"=> "50001"
                ],
                [
                "municipio"=> "Acacias",
                "codigo"=> "50006"
                ],
                [
                "municipio"=> "Barranca De Upia",
                "codigo"=> "50110"
                ],
                [
                "municipio"=> "Castilla La Nueva",
                "codigo"=> "50150"
                ],
                [
                "municipio"=> "Cumaral",
                "codigo"=> "50226"
                ],
                [
                "municipio"=> "El Calvario",
                "codigo"=> "50245"
                ],
                [
                "municipio"=> "Guamal",
                "codigo"=> "50318"
                ],
                [
                "municipio"=> "Restrepo",
                "codigo"=> "50606"
                ],
                [
                "municipio"=> "San Carlos Guaroa",
                "codigo"=> "50680"
                ],
                [
                "municipio"=> "San Juanito",
                "codigo"=> "50686"
                ],
                [
                "municipio"=> "San Luis De Cubarral",
                "codigo"=> "50223"
                ],
                [
                "municipio"=> "San Martín",
                "codigo"=> "50689"
                ],
                [
                "municipio"=> "Cabuyaro",
                "codigo"=> "50124"
                ],
                [
                "municipio"=> "Puerto Gaitán",
                "codigo"=> "50568"
                ],
                [
                "municipio"=> "Puerto Lopez",
                "codigo"=> "50573"
                ]
            ],
            "NARIÑO"=> [
                [
                "municipio"=> "Chachagui",
                "codigo"=> "52240"
                ],
                [
                "municipio"=> "Consaca",
                "codigo"=> "52207"
                ],
                [
                "municipio"=> "El Peñol",
                "codigo"=> "52254"
                ],
                [
                "municipio"=> "El Tambo",
                "codigo"=> "52260"
                ],
                [
                "municipio"=> "La Florida",
                "codigo"=> "52381"
                ],
                [
                "municipio"=> "Nariño",
                "codigo"=> "52480"
                ],
                [
                "municipio"=> "Pasto",
                "codigo"=> "52001"
                ],
                [
                "municipio"=> "Sandoná",
                "codigo"=> "52683"
                ],
                [
                "municipio"=> "Tangua",
                "codigo"=> "52788"
                ],
                [
                "municipio"=> "Yacuanquer",
                "codigo"=> "52885"
                ],
                [
                "municipio"=> "Ancuya",
                "codigo"=> "52036"
                ],
                [
                "municipio"=> "Guaitarilla",
                "codigo"=> "52320"
                ],
                [
                "municipio"=> "La Llanada",
                "codigo"=> "52385"
                ],
                [
                "municipio"=> "Linares",
                "codigo"=> "52411"
                ],
                [
                "municipio"=> "Los Andes",
                "codigo"=> "52418"
                ],
                [
                "municipio"=> "Mallama",
                "codigo"=> "52435"
                ],
                [
                "municipio"=> "Ospina",
                "codigo"=> "52506"
                ],
                [
                "municipio"=> "Providencia",
                "codigo"=> "52565"
                ],
                [
                "municipio"=> "Ricaurte",
                "codigo"=> "52612"
                ],
                [
                "municipio"=> "Samaniego",
                "codigo"=> "52678"
                ],
                [
                "municipio"=> "Santa Cruz",
                "codigo"=> "52699"
                ],
                [
                "municipio"=> "Sapuyes",
                "codigo"=> "52720"
                ],
                [
                "municipio"=> "Tuquerres",
                "codigo"=> "52838"
                ],
                [
                "municipio"=> "Barbacoas",
                "codigo"=> "52079"
                ],
                [
                "municipio"=> "El Charco",
                "codigo"=> "52250"
                ],
                [
                "municipio"=> "Francisco Pizarro",
                "codigo"=> "52520"
                ],
                [
                "municipio"=> "La Tola",
                "codigo"=> "52390"
                ],
                [
                "municipio"=> "Magui",
                "codigo"=> "52427"
                ],
                [
                "municipio"=> "Mosquera",
                "codigo"=> "52473"
                ],
                [
                "municipio"=> "Olaya Herrera",
                "codigo"=> "52490"
                ],
                [
                "municipio"=> "Roberto Payan",
                "codigo"=> "52621"
                ],
                [
                "municipio"=> "Santa Barbara",
                "codigo"=> "52696"
                ],
                [
                "municipio"=> "Tumaco",
                "codigo"=> "52835"
                ],
                [
                "municipio"=> "Alban",
                "codigo"=> "52019"
                ],
                [
                "municipio"=> "Arboleda",
                "codigo"=> "52051"
                ],
                [
                "municipio"=> "Belen",
                "codigo"=> "52083"
                ],
                [
                "municipio"=> "Buesaco",
                "codigo"=> "52110"
                ],
                [
                "municipio"=> "Colon",
                "codigo"=> "52203"
                ],
                [
                "municipio"=> "Cumbitara",
                "codigo"=> "52233"
                ],
                [
                "municipio"=> "El Rosario",
                "codigo"=> "52256"
                ],
                [
                "municipio"=> "El Tablon De Gomez",
                "codigo"=> "52258"
                ],
                [
                "municipio"=> "La Cruz",
                "codigo"=> "52378"
                ],
                [
                "municipio"=> "La Union",
                "codigo"=> "52399"
                ],
                [
                "municipio"=> "Leiva",
                "codigo"=> "52405"
                ],
                [
                "municipio"=> "Policarpa",
                "codigo"=> "52540"
                ],
                [
                "municipio"=> "San Bernardo",
                "codigo"=> "52685"
                ],
                [
                "municipio"=> "San Lorenzo",
                "codigo"=> "52687"
                ],
                [
                "municipio"=> "San Pablo",
                "codigo"=> "52693"
                ],
                [
                "municipio"=> "San Pedro De Cartago",
                "codigo"=> "52694"
                ],
                [
                "municipio"=> "Taminango",
                "codigo"=> "52786"
                ],
                [
                "municipio"=> "Aldana",
                "codigo"=> "52022"
                ],
                [
                "municipio"=> "Contadero",
                "codigo"=> "52210"
                ],
                [
                "municipio"=> "Córdoba",
                "codigo"=> "52215"
                ],
                [
                "municipio"=> "Cuaspud",
                "codigo"=> "52224"
                ],
                [
                "municipio"=> "Cumbal",
                "codigo"=> "52227"
                ],
                [
                "municipio"=> "Funes",
                "codigo"=> "52287"
                ],
                [
                "municipio"=> "Guachucal",
                "codigo"=> "52317"
                ],
                [
                "municipio"=> "Gualmatan",
                "codigo"=> "52323"
                ],
                [
                "municipio"=> "Iles",
                "codigo"=> "52352"
                ],
                [
                "municipio"=> "Imues",
                "codigo"=> "52354"
                ],
                [
                "municipio"=> "Ipiales",
                "codigo"=> "52356"
                ],
                [
                "municipio"=> "Potosí",
                "codigo"=> "52560"
                ],
                [
                "municipio"=> "Puerres",
                "codigo"=> "52573"
                ],
                [
                "municipio"=> "Pupiales",
                "codigo"=> "52585"
                ]
            ],
            "NORTE DE SANTANDER"=> [
                [
                "municipio"=> "Arboledas",
                "codigo"=> "54051"
                ],
                [
                "municipio"=> "Cucutilla",
                "codigo"=> "54223"
                ],
                [
                "municipio"=> "Gramalote",
                "codigo"=> "54313"
                ],
                [
                "municipio"=> "Lourdes",
                "codigo"=> "54418"
                ],
                [
                "municipio"=> "Salazar",
                "codigo"=> "54660"
                ],
                [
                "municipio"=> "Santiago",
                "codigo"=> "54680"
                ],
                [
                "municipio"=> "Villa Caro",
                "codigo"=> "54871"
                ],
                [
                "municipio"=> "Bucarasica",
                "codigo"=> "54109"
                ],
                [
                "municipio"=> "El Tarra",
                "codigo"=> "54250"
                ],
                [
                "municipio"=> "Sardinata",
                "codigo"=> "54720"
                ],
                [
                "municipio"=> "Tibú",
                "codigo"=> "54810"
                ],
                [
                "municipio"=> "Abrego",
                "codigo"=> "54003"
                ],
                [
                "municipio"=> "Cachirá",
                "codigo"=> "54128"
                ],
                [
                "municipio"=> "Convención",
                "codigo"=> "54206"
                ],
                [
                "municipio"=> "El Carmen",
                "codigo"=> "54245"
                ],
                [
                "municipio"=> "Hacarí",
                "codigo"=> "54344"
                ],
                [
                "municipio"=> "La Esperanza",
                "codigo"=> "54385"
                ],
                [
                "municipio"=> "La Playa",
                "codigo"=> "54398"
                ],
                [
                "municipio"=> "Ocaña",
                "codigo"=> "54498"
                ],
                [
                "municipio"=> "San Calixto",
                "codigo"=> "54670"
                ],
                [
                "municipio"=> "Teorama",
                "codigo"=> "54800"
                ],
                [
                "municipio"=> "Cúcuta",
                "codigo"=> "54001"
                ],
                [
                "municipio"=> "El Zulia",
                "codigo"=> "54261"
                ],
                [
                "municipio"=> "Los Patios",
                "codigo"=> "54405"
                ],
                [
                "municipio"=> "Puerto Santander",
                "codigo"=> "54553"
                ],
                [
                "municipio"=> "San Cayetano",
                "codigo"=> "54673"
                ],
                [
                "municipio"=> "Villa Del Rosario",
                "codigo"=> "54874"
                ],
                [
                "municipio"=> "Cácota",
                "codigo"=> "54125"
                ],
                [
                "municipio"=> "Chitagá",
                "codigo"=> "54174"
                ],
                [
                "municipio"=> "Mutiscua",
                "codigo"=> "54480"
                ],
                [
                "municipio"=> "Pamplona",
                "codigo"=> "54518"
                ],
                [
                "municipio"=> "Pamplonita",
                "codigo"=> "54520"
                ],
                [
                "municipio"=> "Silos",
                "codigo"=> "54743"
                ],
                [
                "municipio"=> "Bochalema",
                "codigo"=> "54099"
                ],
                [
                "municipio"=> "Chinácota",
                "codigo"=> "54172"
                ],
                [
                "municipio"=> "Durania",
                "codigo"=> "54239"
                ],
                [
                "municipio"=> "Herrán",
                "codigo"=> "54347"
                ],
                [
                "municipio"=> "Labateca",
                "codigo"=> "54377"
                ],
                [
                "municipio"=> "Ragonvalia",
                "codigo"=> "54599"
                ],
                [
                "municipio"=> "Toledo",
                "codigo"=> "54820"
                ]
            ],
            "PUTUMAYO"=> [
                [
                "municipio"=> "Colón",
                "codigo"=> "86219"
                ],
                [
                "municipio"=> "Mocoa",
                "codigo"=> "86001"
                ],
                [
                "municipio"=> "Orito",
                "codigo"=> "86320"
                ],
                [
                "municipio"=> "Puerto Asis",
                "codigo"=> "86568"
                ],
                [
                "municipio"=> "Puerto Caicedo",
                "codigo"=> "86569"
                ],
                [
                "municipio"=> "Puerto Guzman",
                "codigo"=> "86571"
                ],
                [
                "municipio"=> "Puerto Leguizamo",
                "codigo"=> "86573"
                ],
                [
                "municipio"=> "San Francisco",
                "codigo"=> "86755"
                ],
                [
                "municipio"=> "San Miguel",
                "codigo"=> "86757"
                ],
                [
                "municipio"=> "Santiago",
                "codigo"=> "86760"
                ],
                [
                "municipio"=> "Sibundoy",
                "codigo"=> "86749"
                ],
                [
                "municipio"=> "Valle Del Guamuez",
                "codigo"=> "86865"
                ],
                [
                "municipio"=> "Villa Garzon",
                "codigo"=> "86885"
                ]
            ],
            "QUINDIO"=> [
                [
                "municipio"=> "Armenia",
                "codigo"=> "63001"
                ],
                [
                "municipio"=> "Buenavista",
                "codigo"=> "63111"
                ],
                [
                "municipio"=> "Calarca",
                "codigo"=> "63130"
                ],
                [
                "municipio"=> "Cordoba",
                "codigo"=> "63212"
                ],
                [
                "municipio"=> "Genova",
                "codigo"=> "63302"
                ],
                [
                "municipio"=> "Pijao",
                "codigo"=> "63548"
                ],
                [
                "municipio"=> "Filandia",
                "codigo"=> "63272"
                ],
                [
                "municipio"=> "Salento",
                "codigo"=> "63690"
                ],
                [
                "municipio"=> "Circasia",
                "codigo"=> "63190"
                ],
                [
                "municipio"=> "La Tebaida",
                "codigo"=> "63401"
                ],
                [
                "municipio"=> "Montengro",
                "codigo"=> "63470"
                ],
                [
                "municipio"=> "Quimbaya",
                "codigo"=> "63594"
                ]
            ],
            "RISARALDA"=> [
                [
                "municipio"=> "Dosquebradas",
                "codigo"=> "66170"
                ],
                [
                "municipio"=> "La Virginia",
                "codigo"=> "66400"
                ],
                [
                "municipio"=> "Marsella",
                "codigo"=> "66440"
                ],
                [
                "municipio"=> "Pereira",
                "codigo"=> "66001"
                ],
                [
                "municipio"=> "Santa Rosa De Cabal",
                "codigo"=> "66682"
                ],
                [
                "municipio"=> "Apía",
                "codigo"=> "66045"
                ],
                [
                "municipio"=> "Balboa",
                "codigo"=> "66075"
                ],
                [
                "municipio"=> "Belén De Umbría",
                "codigo"=> "66088"
                ],
                [
                "municipio"=> "Guática",
                "codigo"=> "66318"
                ],
                [
                "municipio"=> "La Celia",
                "codigo"=> "66383"
                ],
                [
                "municipio"=> "Quinchia",
                "codigo"=> "66594"
                ],
                [
                "municipio"=> "Santuario",
                "codigo"=> "66687"
                ],
                [
                "municipio"=> "Mistrató",
                "codigo"=> "66456"
                ],
                [
                "municipio"=> "Pueblo Rico",
                "codigo"=> "66572"
                ]
            ],
            "SANTANDER"=> [
                [
                "municipio"=> "Chima",
                "codigo"=> "68176"
                ],
                [
                "municipio"=> "Confines",
                "codigo"=> "68209"
                ],
                [
                "municipio"=> "Contratación",
                "codigo"=> "68211"
                ],
                [
                "municipio"=> "El Guacamayo",
                "codigo"=> "68245"
                ],
                [
                "municipio"=> "Galán",
                "codigo"=> "68296"
                ],
                [
                "municipio"=> "Gambita",
                "codigo"=> "68298"
                ],
                [
                "municipio"=> "Guadalupe",
                "codigo"=> "68320"
                ],
                [
                "municipio"=> "Guapotá",
                "codigo"=> "68322"
                ],
                [
                "municipio"=> "Hato",
                "codigo"=> "68344"
                ],
                [
                "municipio"=> "Oiba",
                "codigo"=> "68500"
                ],
                [
                "municipio"=> "Palmar",
                "codigo"=> "68522"
                ],
                [
                "municipio"=> "Palmas Del Socorro",
                "codigo"=> "68524"
                ],
                [
                "municipio"=> "Santa Helena Del Opón",
                "codigo"=> "68720"
                ],
                [
                "municipio"=> "Simacota",
                "codigo"=> "68745"
                ],
                [
                "municipio"=> "Socorro",
                "codigo"=> "68755"
                ],
                [
                "municipio"=> "Suaita",
                "codigo"=> "68770"
                ],
                [
                "municipio"=> "Capitanejo",
                "codigo"=> "68147"
                ],
                [
                "municipio"=> "Carcasí",
                "codigo"=> "68152"
                ],
                [
                "municipio"=> "Cepitá",
                "codigo"=> "68160"
                ],
                [
                "municipio"=> "Cerrito",
                "codigo"=> "68162"
                ],
                [
                "municipio"=> "Concepción",
                "codigo"=> "68207"
                ],
                [
                "municipio"=> "Enciso",
                "codigo"=> "68266"
                ],
                [
                "municipio"=> "Guaca",
                "codigo"=> "68318"
                ],
                [
                "municipio"=> "Macaravita",
                "codigo"=> "68425"
                ],
                [
                "municipio"=> "Málaga",
                "codigo"=> "68432"
                ],
                [
                "municipio"=> "Molagavita",
                "codigo"=> "68468"
                ],
                [
                "municipio"=> "San Andrés",
                "codigo"=> "68669"
                ],
                [
                "municipio"=> "San José De Miranda",
                "codigo"=> "68684"
                ],
                [
                "municipio"=> "San Miguel",
                "codigo"=> "68686"
                ],
                [
                "municipio"=> "Aratoca",
                "codigo"=> "68051"
                ],
                [
                "municipio"=> "Barichara",
                "codigo"=> "68079"
                ],
                [
                "municipio"=> "Cabrera",
                "codigo"=> "68121"
                ],
                [
                "municipio"=> "Charalá",
                "codigo"=> "68167"
                ],
                [
                "municipio"=> "Coromoro",
                "codigo"=> "68217"
                ],
                [
                "municipio"=> "Curití",
                "codigo"=> "68229"
                ],
                [
                "municipio"=> "Encino",
                "codigo"=> "68264"
                ],
                [
                "municipio"=> "Jordán",
                "codigo"=> "68370"
                ],
                [
                "municipio"=> "Mogotes",
                "codigo"=> "68464"
                ],
                [
                "municipio"=> "Ocamonte",
                "codigo"=> "68498"
                ],
                [
                "municipio"=> "Onzaga",
                "codigo"=> "68502"
                ],
                [
                "municipio"=> "Páramo",
                "codigo"=> "68533"
                ],
                [
                "municipio"=> "Pinchote",
                "codigo"=> "68549"
                ],
                [
                "municipio"=> "San Gil",
                "codigo"=> "68679"
                ],
                [
                "municipio"=> "San Joaquín",
                "codigo"=> "68682"
                ],
                [
                "municipio"=> "Valle De San José",
                "codigo"=> "68855"
                ],
                [
                "municipio"=> "Villanueva",
                "codigo"=> "68872"
                ],
                [
                "municipio"=> "Barrancabermeja",
                "codigo"=> "68081"
                ],
                [
                "municipio"=> "Betulia",
                "codigo"=> "68092"
                ],
                [
                "municipio"=> "El Carmen De Chucurí",
                "codigo"=> "68235"
                ],
                [
                "municipio"=> "Puerto Wilches",
                "codigo"=> "68575"
                ],
                [
                "municipio"=> "Sabana De Torres",
                "codigo"=> "68655"
                ],
                [
                "municipio"=> "San Vicente De Chucurí",
                "codigo"=> "68689"
                ],
                [
                "municipio"=> "Zapatoca",
                "codigo"=> "68895"
                ],
                [
                "municipio"=> "Bucaramanga",
                "codigo"=> "68001"
                ],
                [
                "municipio"=> "California",
                "codigo"=> "68132"
                ],
                [
                "municipio"=> "Charta",
                "codigo"=> "68169"
                ],
                [
                "municipio"=> "El Playón",
                "codigo"=> "68255"
                ],
                [
                "municipio"=> "Floridablanca",
                "codigo"=> "68276"
                ],
                [
                "municipio"=> "Girón",
                "codigo"=> "68307"
                ],
                [
                "municipio"=> "Lebríja",
                "codigo"=> "68406"
                ],
                [
                "municipio"=> "Los Santos",
                "codigo"=> "68418"
                ],
                [
                "municipio"=> "Matanza",
                "codigo"=> "68444"
                ],
                [
                "municipio"=> "Piedecuesta",
                "codigo"=> "68547"
                ],
                [
                "municipio"=> "Rionegro",
                "codigo"=> "68615"
                ],
                [
                "municipio"=> "Santa Bárbara",
                "codigo"=> "68705"
                ],
                [
                "municipio"=> "Surata",
                "codigo"=> "68780"
                ],
                [
                "municipio"=> "Tona",
                "codigo"=> "68820"
                ],
                [
                "municipio"=> "Vetas",
                "codigo"=> "68867"
                ],
                [
                "municipio"=> "Aguada",
                "codigo"=> "68013"
                ],
                [
                "municipio"=> "Albania",
                "codigo"=> "68020"
                ],
                [
                "municipio"=> "Barbosa",
                "codigo"=> "68077"
                ],
                [
                "municipio"=> "Bolívar",
                "codigo"=> "68101"
                ],
                [
                "municipio"=> "Chipatá",
                "codigo"=> "68179"
                ],
                [
                "municipio"=> "Cimitarra",
                "codigo"=> "68190"
                ],
                [
                "municipio"=> "El Peñón",
                "codigo"=> "68250"
                ],
                [
                "municipio"=> "Florián",
                "codigo"=> "68271"
                ],
                [
                "municipio"=> "Guavatá",
                "codigo"=> "68324"
                ],
                [
                "municipio"=> "Guepsa",
                "codigo"=> "68327"
                ],
                [
                "municipio"=> "Jesús María",
                "codigo"=> "68368"
                ],
                [
                "municipio"=> "La Belleza",
                "codigo"=> "68377"
                ],
                [
                "municipio"=> "La Paz",
                "codigo"=> "68397"
                ],
                [
                "municipio"=> "Landázuri",
                "codigo"=> "68385"
                ],
                [
                "municipio"=> "Puente Nacional",
                "codigo"=> "68572"
                ],
                [
                "municipio"=> "Puerto Parra",
                "codigo"=> "68573"
                ],
                [
                "municipio"=> "San Benito",
                "codigo"=> "68673"
                ],
                [
                "municipio"=> "Sucre",
                "codigo"=> "68773"
                ],
                [
                "municipio"=> "Vélez",
                "codigo"=> "68861"
                ]
            ],
            "SUCRE"=> [
                [
                "municipio"=> "Guaranda",
                "codigo"=> "70265"
                ],
                [
                "municipio"=> "Majagual",
                "codigo"=> "70429"
                ],
                [
                "municipio"=> "Sucre",
                "codigo"=> "70771"
                ],
                [
                "municipio"=> "Chalán",
                "codigo"=> "70230"
                ],
                [
                "municipio"=> "Coloso",
                "codigo"=> "70204"
                ],
                [
                "municipio"=> "Morroa",
                "codigo"=> "70473"
                ],
                [
                "municipio"=> "Ovejas",
                "codigo"=> "70508"
                ],
                [
                "municipio"=> "Sincelejo",
                "codigo"=> "70001"
                ],
                [
                "municipio"=> "Coveñas",
                "codigo"=> "70221"
                ],
                [
                "municipio"=> "Palmito",
                "codigo"=> "70523"
                ],
                [
                "municipio"=> "San Onofre",
                "codigo"=> "70713"
                ],
                [
                "municipio"=> "Santiago De Tolú",
                "codigo"=> "70820"
                ],
                [
                "municipio"=> "Tolú Viejo",
                "codigo"=> "70823"
                ],
                [
                "municipio"=> "Buenavista",
                "codigo"=> "70110"
                ],
                [
                "municipio"=> "Corozal",
                "codigo"=> "70215"
                ],
                [
                "municipio"=> "El Roble",
                "codigo"=> "70233"
                ],
                [
                "municipio"=> "Galeras",
                "codigo"=> "70235"
                ],
                [
                "municipio"=> "Los Palmitos",
                "codigo"=> "70418"
                ],
                [
                "municipio"=> "Sampués",
                "codigo"=> "70670"
                ],
                [
                "municipio"=> "San Juan Betulia",
                "codigo"=> "70702"
                ],
                [
                "municipio"=> "San Pedro",
                "codigo"=> "70717"
                ],
                [
                "municipio"=> "Sincé",
                "codigo"=> "70742"
                ],
                [
                "municipio"=> "Caimito",
                "codigo"=> "70124"
                ],
                [
                "municipio"=> "La Unión",
                "codigo"=> "70400"
                ],
                [
                "municipio"=> "San Benito Abad",
                "codigo"=> "70678"
                ],
                [
                "municipio"=> "San Marcos",
                "codigo"=> "70708"
                ]
            ],
            "TOLIMA"=> [
                [
                "municipio"=> "Ambalema",
                "codigo"=> "73030"
                ],
                [
                "municipio"=> "Armero",
                "codigo"=> "73055"
                ],
                [
                "municipio"=> "Falan",
                "codigo"=> "73270"
                ],
                [
                "municipio"=> "Fresno",
                "codigo"=> "73283"
                ],
                [
                "municipio"=> "Honda",
                "codigo"=> "73349"
                ],
                [
                "municipio"=> "Mariquita",
                "codigo"=> "73443"
                ],
                [
                "municipio"=> "Palocabildo",
                "codigo"=> "73520"
                ],
                [
                "municipio"=> "Carmen De Apicalá",
                "codigo"=> "73148"
                ],
                [
                "municipio"=> "Cunday",
                "codigo"=> "73226"
                ],
                [
                "municipio"=> "Icononzo",
                "codigo"=> "73352"
                ],
                [
                "municipio"=> "Melgar",
                "codigo"=> "73449"
                ],
                [
                "municipio"=> "Villarrica",
                "codigo"=> "73873"
                ],
                [
                "municipio"=> "Ataco",
                "codigo"=> "73067"
                ],
                [
                "municipio"=> "Chaparral",
                "codigo"=> "73168"
                ],
                [
                "municipio"=> "Coyaima",
                "codigo"=> "73217"
                ],
                [
                "municipio"=> "Natagaima",
                "codigo"=> "73483"
                ],
                [
                "municipio"=> "Ortega",
                "codigo"=> "73504"
                ],
                [
                "municipio"=> "Planadas",
                "codigo"=> "73555"
                ],
                [
                "municipio"=> "Rioblanco",
                "codigo"=> "73616"
                ],
                [
                "municipio"=> "Roncesvalles",
                "codigo"=> "73622"
                ],
                [
                "municipio"=> "San Antonio",
                "codigo"=> "73675"
                ],
                [
                "municipio"=> "Alvarado",
                "codigo"=> "73026"
                ],
                [
                "municipio"=> "Anzoátegui",
                "codigo"=> "73043"
                ],
                [
                "municipio"=> "Cajamarca",
                "codigo"=> "73124"
                ],
                [
                "municipio"=> "Coello",
                "codigo"=> "73200"
                ],
                [
                "municipio"=> "Espinal",
                "codigo"=> "73268"
                ],
                [
                "municipio"=> "Flandes",
                "codigo"=> "73275"
                ],
                [
                "municipio"=> "Ibague",
                "codigo"=> "73001"
                ],
                [
                "municipio"=> "Piedras",
                "codigo"=> "73547"
                ],
                [
                "municipio"=> "Rovira",
                "codigo"=> "73624"
                ],
                [
                "municipio"=> "San Luis",
                "codigo"=> "73678"
                ],
                [
                "municipio"=> "Valle De San Juan",
                "codigo"=> "73854"
                ],
                [
                "municipio"=> "Alpujarra",
                "codigo"=> "73024"
                ],
                [
                "municipio"=> "Dolores",
                "codigo"=> "73236"
                ],
                [
                "municipio"=> "Guamo",
                "codigo"=> "73319"
                ],
                [
                "municipio"=> "Prado",
                "codigo"=> "73563"
                ],
                [
                "municipio"=> "Purificación",
                "codigo"=> "73585"
                ],
                [
                "municipio"=> "Saldaña",
                "codigo"=> "73671"
                ],
                [
                "municipio"=> "Suárez",
                "codigo"=> "73770"
                ],
                [
                "municipio"=> "Casabianca",
                "codigo"=> "73152"
                ],
                [
                "municipio"=> "Herveo",
                "codigo"=> "73347"
                ],
                [
                "municipio"=> "Lerida",
                "codigo"=> "73408"
                ],
                [
                "municipio"=> "Libano",
                "codigo"=> "73411"
                ],
                [
                "municipio"=> "Murillo",
                "codigo"=> "73461"
                ],
                [
                "municipio"=> "Santa Isabel",
                "codigo"=> "73686"
                ],
                [
                "municipio"=> "Venadillo",
                "codigo"=> "73861"
                ],
                [
                "municipio"=> "Villahermosa",
                "codigo"=> "73870"
                ]
            ],
            "VALLE DEL CAUCA"=> [
                [
                "municipio"=> "Andalucía",
                "codigo"=> "76036"
                ],
                [
                "municipio"=> "Buga",
                "codigo"=> "76111"
                ],
                [
                "municipio"=> "Bugalagrande",
                "codigo"=> "76113"
                ],
                [
                "municipio"=> "Calima",
                "codigo"=> "76126"
                ],
                [
                "municipio"=> "El Cerrito",
                "codigo"=> "76248"
                ],
                [
                "municipio"=> "Ginebra",
                "codigo"=> "76306"
                ],
                [
                "municipio"=> "Guacarí",
                "codigo"=> "76318"
                ],
                [
                "municipio"=> "Restrepo",
                "codigo"=> "76606"
                ],
                [
                "municipio"=> "Riofrio",
                "codigo"=> "76616"
                ],
                [
                "municipio"=> "San Pedro",
                "codigo"=> "76670"
                ],
                [
                "municipio"=> "Trujillo",
                "codigo"=> "76828"
                ],
                [
                "municipio"=> "Tuluá",
                "codigo"=> "76834"
                ],
                [
                "municipio"=> "Yotoco",
                "codigo"=> "76890"
                ],
                [
                "municipio"=> "Alcala",
                "codigo"=> "76020"
                ],
                [
                "municipio"=> "Ansermanuevo",
                "codigo"=> "76041"
                ],
                [
                "municipio"=> "Argelia",
                "codigo"=> "76054"
                ],
                [
                "municipio"=> "Bolívar",
                "codigo"=> "76100"
                ],
                [
                "municipio"=> "Cartago",
                "codigo"=> "76147"
                ],
                [
                "municipio"=> "El Águila",
                "codigo"=> "76243"
                ],
                [
                "municipio"=> "El Cairo",
                "codigo"=> "76246"
                ],
                [
                "municipio"=> "El Dovio",
                "codigo"=> "76250"
                ],
                [
                "municipio"=> "La Unión",
                "codigo"=> "76400"
                ],
                [
                "municipio"=> "La Victoria",
                "codigo"=> "76403"
                ],
                [
                "municipio"=> "Obando",
                "codigo"=> "76497"
                ],
                [
                "municipio"=> "Roldanillo",
                "codigo"=> "76622"
                ],
                [
                "municipio"=> "Toro",
                "codigo"=> "76823"
                ],
                [
                "municipio"=> "Ulloa",
                "codigo"=> "76845"
                ],
                [
                "municipio"=> "Versalles",
                "codigo"=> "76863"
                ],
                [
                "municipio"=> "Zarzal",
                "codigo"=> "76895"
                ],
                [
                "municipio"=> "Buenaventura",
                "codigo"=> "76109"
                ],
                [
                "municipio"=> "Caicedonia",
                "codigo"=> "76122"
                ],
                [
                "municipio"=> "Sevilla",
                "codigo"=> "76736"
                ],
                [
                "municipio"=> "Cali",
                "codigo"=> "76001"
                ],
                [
                "municipio"=> "Candelaria",
                "codigo"=> "76130"
                ],
                [
                "municipio"=> "Dagua",
                "codigo"=> "76233"
                ],
                [
                "municipio"=> "Florida",
                "codigo"=> "76275"
                ],
                [
                "municipio"=> "Jamundí",
                "codigo"=> "76364"
                ],
                [
                "municipio"=> "La Cumbre",
                "codigo"=> "76377"
                ],
                [
                "municipio"=> "Palmira",
                "codigo"=> "76520"
                ],
                [
                "municipio"=> "Pradera",
                "codigo"=> "76563"
                ],
                [
                "municipio"=> "Vijes",
                "codigo"=> "76869"
                ],
                [
                "municipio"=> "Yumbo",
                "codigo"=> "76892"
                ]
            ],
            "VAUPES"=> [
                [
                "municipio"=> "Caruru",
                "codigo"=> "97161"
                ],
                [
                "municipio"=> "Mitú",
                "codigo"=> "97001"
                ],
                [
                "municipio"=> "Pacoa",
                "codigo"=> "97511"
                ],
                [
                "municipio"=> "Papunahua",
                "codigo"=> "97777"
                ],
                [
                "municipio"=> "Taraira",
                "codigo"=> "97666"
                ],
                [
                "municipio"=> "Yavaraté",
                "codigo"=> "97889"
                ]
            ],
            "VICHADA"=> [
                [
                "municipio"=> "Cumaribo",
                "codigo"=> "99773"
                ],
                [
                "municipio"=> "La Primavera",
                "codigo"=> "99524"
                ],
                [
                "municipio"=> "Puerto Carreño",
                "codigo"=> "99001"
                ],
                [
                "municipio"=> "Santa Rosalía",
                "codigo"=> "99624"
                ]
            ]
        ];

        $country = Country::where('name', 'Colombia')->first();

        if (!$country) {
            return;
        }

        foreach ($data as $key => $cities) {
            
            $idState = DB::table('states')->insertGetId([
                'code' => null,
                'name' => $key,
                'is_active' => true,
                'country_id' => $country->id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            
            $citiesInsert = [];

            foreach ($cities as $city) {
                $citiesInsert[] = [
                    'code' => $city['codigo'],
                    'name' => $city['municipio'],
                    'is_active' => true,
                    'state_id' => $idState,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
            
            DB::table('cities')->insert($citiesInsert);
        }
    }
}
