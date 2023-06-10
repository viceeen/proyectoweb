<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class EstudiantesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB:table('estudiantes')->insert([

            ['rut'=>'12345678-9','nombre'=>'Juan', 'apellido'=>'Pérez', 'email'=>'juan.perez@example.com', 'create_at'=>Carbon::now()],
            ['rut'=>'11345678-9','nombre'=>'Juan', 'apellido'=>'Pérez', 'email'=>'juan.perez@example.com','create_at'=>Carbon::now()],
            ['rut'=>'13345678-9','nombre'=>'Juan', 'apellido'=>'Pérez', 'email'=>'juan.perez@example.com','create_at'=>Carbon::now()],
            
        ]);
    }
}
