<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PromotionsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('promotions')->insert([
            'place_id' => 1,
            'image' => null,
            'nombre_promotion' => 'Promoción 2x1',
            'fecha_promotion' => Carbon::now(),
            'published' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('promotions')->insert([
            'place_id' => 2,
            'image' => null,
            'nombre_promotion' => 'Descuento del 10%',
            'fecha_promotion' => Carbon::now(),
            'published' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('promotions')->insert([
            'place_id' => 3,
            'image' => null,
            'nombre_promotion' => 'Barra libre de 21 a 22',
            'fecha_promotion' => Carbon::now(),
            'published' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('promotions')->insert([
            'place_id' => 4,
            'image' => null,
            'nombre_promotion' => 'Segunda persona entra gratis',
            'fecha_promotion' => Carbon::now(),
            'published' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
