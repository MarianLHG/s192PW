<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Clientes')->insert([
            [
                'nombre'=>'Marian',
                'apellido'=>'Hernandez',
                'correo'=>'hernandez@gmail.com',
                'telefono'=>'1234567890'
            ],
            [
                'nombre'=>'Joselin',
                'apellido'=>'garcia',
                'correo'=>'garcia@gmail.com',
                'telefono'=>'7528643597'
            ],
            [
                'nombre'=>'Diana',
                'apellido'=>'Leon',
                'correo'=>'leon@gmail.com',
                'telefono'=>'7112223334'
            ]]);
    }
}
