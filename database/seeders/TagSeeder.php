<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Tag::create([
            'name' => 'Perder peso y Tonificar',
        ]);

        Tag::create([
            'name' => 'Construir Músculos',
        ]);

        Tag::create([
            'name' => 'Aumentar energía',
        ]);

        Tag::create([
            'name' => 'Mejora rendimiento',
        ]);

        Tag::create([
            'name' => 'Salud y bienestar',
        ]);

        Tag::create([
            'name' => 'Definición Muscular',
        ]);

        Tag::create([
            'name' => 'Orgánicos y Naturales',
        ]);
    }
}
