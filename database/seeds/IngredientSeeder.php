<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ingredients')->insert(
            [
                [
                    'category_id' => 1,
                    'name' => 'salmon'
                ],
                [
                    'category_id' => 1,
                    'name' => 'tuna'
                ],

                [
                    'category_id' => 2,
                    'name' => 'avocado'
                ],
                [
                    'category_id' => 2,
                    'name' => 'cucumber'
                ],

                [
                    'category_id' => 3,
                    'name' => 'mango'
                ],
                [
                    'category_id' => 3,
                    'name' => 'manyo'
                ],
            ]
        );
    }
}
