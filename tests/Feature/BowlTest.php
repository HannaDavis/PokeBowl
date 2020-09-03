<?php

namespace Tests\Feature;

use App\Ingredient;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class BowlTest extends TestCase
{
    use RefreshDatabase;
    /**
     * @test
     */
    public function home_page_redirects_to_build_a_bowl_view()
    {
        $response = $this->get('/');
        $response->assertStatus(200);

        $response->assertSee('BuildBowl');
    }

//    /**
//     * @test
//     */
//    public function verify_categories_count()
//    {
//        DB::table('categories')->insert(
//            [
//                [
//                    'name' => 'fish',
//                ],
//                [
//                    'name' => 'vegetables',
//                ],
//                [
//                    'name' => 'sauce',
//                ]
//            ]
//        );
//
//        DB::table('ingredients')->insert(
//            [
//                [
//                    'category_id' => 1,
//                    'name' => 'salmon'
//                ],
//                [
//                    'category_id' => 1,
//                    'name' => 'tuna'
//                ],
//
//                [
//                    'category_id' => 2,
//                    'name' => 'avocado'
//                ],
//                [
//                    'category_id' => 2,
//                    'name' => 'cucumber'
//                ],
//
//                [
//                    'category_id' => 3,
//                    'name' => 'mango'
//                ],
//                [
//                    'category_id' => 3,
//                    'name' => 'manyo'
//                ],
//            ]
//        );
//
//        $fish = Ingredient::all();
//        $this->assertNotEmpty($fish);
//    }
}
