<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GridSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $grids = [
            [
                'row' => 1,
                'column' => 1,
                'title' => '',
                'style_id' => 1,
                'colour_id' => 1,
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'row' => 1,
                'column' => 2,
                'title' => 'Dropee.com',
                'style_id' => 1,
                'colour_id' => 1,
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'row' => 1,
                'column' => 3,
                'title' => '',
                'style_id' => 1,
                'colour_id' => 1,
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'row' => 1,
                'column' => 4,
                'title' => 'Build Trust',
                'style_id' => 1,
                'colour_id' => 1,
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'row' => 2,
                'column' => 1,
                'title' => '',
                'style_id' => 1,
                'colour_id' => 1,
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'row' => 2,
                'column' => 2,
                'title' => '',
                'style_id' => 1,
                'colour_id' => 1,
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'row' => 2,
                'column' => 3,
                'title' => 'Saas enabled marketplace',
                'style_id' => 1,
                'colour_id' => 1,
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'row' => 2,
                'column' => 4,
                'title' => '',
                'style_id' => 1,
                'colour_id' => 1,
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'row' => 3,
                'column' => 1,
                'title' => 'B2B Marketplace',
                'style_id' => 1,
                'colour_id' => 1,
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'row' => 3,
                'column' => 2,
                'title' => '',
                'style_id' => 1,
                'colour_id' => 1,
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'row' => 3,
                'column' => 3,
                'title' => '',
                'style_id' => 1,
                'colour_id' => 1,
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'row' => 3,
                'column' => 4,
                'title' => '',
                'style_id' => 1,
                'colour_id' => 1,
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'row' => 4,
                'column' => 1,
                'title' => '',
                'style_id' => 1,
                'colour_id' => 1,
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'row' => 4,
                'column' => 2,
                'title' => '',
                'style_id' => 1,
                'colour_id' => 1,
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'row' => 4,
                'column' => 3,
                'title' => '',
                'style_id' => 1,
                'colour_id' => 1,
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'row' => 4,
                'column' => 4,
                'title' => 'Provide Transparency',
                'style_id' => 1,
                'colour_id' => 1,
                'created_at' => date("Y-m-d H:i:s")
            ],
        ];

        DB::table('grids')->insert($grids);
    }
}
