<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Category;
use App\Models\Subcategory;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Subcategory::create([
            'name' => 'Proteinas',
            'category_id' => 1,
        ]);

        Subcategory::create([
            'name' => 'Snacks',
            'category_id' => 1,
        ]);

        Subcategory::create([
            'name' => 'Precursores',
            'category_id' => 1,
        ]);

        Subcategory::create([
            'name' => 'Vitaminas',
            'category_id' => 1,
        ]);

        Subcategory::create([
            'name' => 'Complementos',
            'category_id' => 1,
        ]);

        Subcategory::create([
            'name' => 'Proteinas',
            'category_id' => 2,
        ]);

        Subcategory::create([
            'name' => 'Aminoácidos',
            'category_id' => 2,
        ]);

        Subcategory::create([
            'name' => 'Vitaminas',
            'category_id' => 2,
        ]);

        Subcategory::create([
            'name' => 'Quemadores de Grasa',
            'category_id' => 3,
        ]);

        Subcategory::create([
            'name' => 'Proteínas dietéticas',
            'category_id' => 3,
        ]);

        Subcategory::create([
            'name' => 'Energizantes',
            'category_id' => 4,
        ]);

        Subcategory::create([
            'name' => 'Pre Workout',
            'category_id' => 4,
        ]);

        Subcategory::create([
            'name' => 'Vitaminas y Minerales',
            'category_id' => 5,
        ]);

        Subcategory::create([
            'name' => 'Salsas Saludables',
            'category_id' => 5,
        ]);

        Subcategory::create([
            'name' => 'Bienestar Diario',
            'category_id' => 6,
        ]);

        Subcategory::create([
            'name' => 'Belleza',
            'category_id' => 6,
        ]);

        Subcategory::create([
            'name' => 'Dieta y Detoxificacion',
            'category_id' => 6,
        ]);

        Subcategory::create([
            'name' => 'Deporte y Fitness',
            'category_id' => 6,
        ]);

        Subcategory::create([
            'name' => 'Cardiovascular',
            'category_id' => 6,
        ]);

        Subcategory::create([
            'name' => 'Barras',
            'category_id' => 7,
        ]);

        Subcategory::create([
            'name' => 'Bebibles',
            'category_id' => 7,
        ]);

        Subcategory::create([
            'name' => 'Cereales',
            'category_id' => 7,
        ]);

        Subcategory::create([
            'name' => 'Mascotas',
            'category_id' => 7,
        ]);


        Subcategory::create([
            'name' => 'Shakers',
            'category_id' => 8,
        ]);

        Subcategory::create([
            'name' => 'Entrenamiento',
            'category_id' => 8,
        ]);

    }
}
