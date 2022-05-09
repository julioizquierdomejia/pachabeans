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
            'name' => 'Cafe Junin',
            'category_id' => 1,
        ]);

        Subcategory::create([
            'name' => 'Cafe Jaen',
            'category_id' => 1,
        ]);
        


    }
}
