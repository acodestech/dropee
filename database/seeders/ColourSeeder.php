<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $colours = [
            [
                'gradient' => 'none',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'gradient' => 'velvet-sun',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'gradient' => 'nepal',
                'created_at' => date("Y-m-d H:i:s")
            ],
        ];

        DB::table('colours')->insert($colours);
    }
}
