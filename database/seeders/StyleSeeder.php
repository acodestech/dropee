<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StyleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $styles = [
            [
                'font' => 'none',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'font' => 'dancing-script',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'font' => 'nerko-one',
                'created_at' => date("Y-m-d H:i:s")
            ],
        ];

        DB::table('styles')->insert($styles);
    }
}
