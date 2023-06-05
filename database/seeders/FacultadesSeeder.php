<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class FacultadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos = [
            [
                'cod_facultad' => '10',
                'nom_Facultad' => 'Artes',
            ],
            [
                'cod_facultad' => '11',
                'nom_Facultad' => 'Fisica',
            ],
            [
                'cod_facultad' => '12',
                'nom_Facultad' => 'Mates',
            ],
            [
                'cod_facultad' => '13',
                'nom_Facultad' => 'Ciencias',
            ],
            [
                'codFacultad' => '14',
                'nom_Facultad' => 'Medicina',
            ],
        ];
        DB::table('facultades')->insert($datos);
    }
}
