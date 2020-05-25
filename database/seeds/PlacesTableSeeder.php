<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PlacesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('places')->insert([
            'user_id' => 3,
            'name' => 'BAR PLAZA',
            'image' => 'images/places/camarero.jpg',
            'zona' => 'Malasaña',
            'horario' => '18:00 - 3:30',
            'published' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('places')->insert([
            'user_id' => 3,
            'name' => 'BAR ROLLING',
            'image' => 'images/places/rolling.jpg',
            'zona' => 'Gran via',
            'horario' => '23:30 - 6:00',
            'published' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('places')->insert([
            'user_id' => 3,
            'name' => 'BAR AVENIDA',
            'image' => 'images/places/brew.jpg',
            'zona' => 'Sol',
            'horario' => '17:00 - 2:00',
            'published' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('places')->insert([
            'user_id' => 3,
            'name' => 'BAR CENTRAL',
            'image' => 'images/places/conil.jpg',
            'zona' => 'Chueca',
            'horario' => '22:00 - 5:30',
            'published' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
