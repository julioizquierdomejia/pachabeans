<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Value;

class ValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Value::create([
            'name' => 'Vainilla',
            'attribute_id' => 1,
            'color' => '#f9f4dd',
        ]);

        Value::create([
            'name' => 'Chocolate',
            'attribute_id' => 1,
            'color' => '#d29e2d',
        ]);

        Value::create([
            'name' => 'Xl',
            'attribute_id' => 2,
            'color' => '#eac8c8',
        ]);

        Value::create([
            'name' => 'Large',
            'attribute_id' => 2,
            'color' => '#eac8c8',
        ]);
    }
}
