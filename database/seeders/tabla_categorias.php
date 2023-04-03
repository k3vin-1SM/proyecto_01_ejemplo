<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tabla_categorias extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $var1[1]='Enlatados';
        $var1[2]='Aderesos';
        $var1[3]='Embutidos';
        $var1[4]='Dulces';
        $var1[5]='Refrescos';
        $var1[6]='Botanas';
        $var1[7]='Lácteos';

        $var2[1]='Productos en envase metálico';
        $var2[2]='Mayonesa y Mostaza principalmente';
        $var2[3]='Todo producto para rebanar';
        $var2[4]='Tanto tradicionales como envueltos';
        $var2[5]='En todas presentaciones';
        $var2[6]='Papas, chocolates, semillas, etc.';
        $var2[7]='Tanto quesos, yogurt y leche';
        

        for ( $i = 1 ; $i <= 7 ; $i++ ){
            DB::table('categorias')->insert([
                'nombre' => $var1[$i],
                'descripcion' => $var2[$i],
                'status' => 1,
            ]);
        }
    }
}