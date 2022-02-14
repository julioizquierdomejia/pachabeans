<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Category::create([
            'name' => 'Orgánico y Naturales',
            'description' => 'Orgánico y Naturales',
        ]);

        Category::create([
            'name' => 'Proteinas y aminoácidos',
            'description' => 'Proteinas y aminoácidos',
        ]);

        Category::create([
            'name' => 'Control de peso',
            'description' => 'Control de peso',
        ]);

        Category::create([
            'name' => 'Energía',
            'description' => 'Energía',
        ]);

        Category::create([
            'name' => 'Salud y bienestar',
            'description' => 'Salud y bienestar',
        ]);

        Category::create([
            'name' => 'Zona solgar',
            'description' => 'Zona solgar',
        ]);

        Category::create([
            'name' => 'Snack',
            'description' => 'Snack',
        ]);

        Category::create([
            'name' => 'Accesorios',
            'description' => 'Accesorios',
        ]);

        Category::create([
            'name' => 'Marcas',
            'description' => 'Marcas',
        ]);

    }
}
