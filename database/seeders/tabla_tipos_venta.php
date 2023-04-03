<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tabla_tipos_venta extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipos_venta')->insert([
            'nombre' => 'PIEZA',
            'status' => 1,
        ]);

        DB::table('tipos_venta')->insert([
            'nombre' => 'KILOS',
            'status' => 1,
        ]);

        DB::table('tipos_venta')->insert([
            'nombre' => 'CAJA',
            'status' => 1,
        ]);
    }
}