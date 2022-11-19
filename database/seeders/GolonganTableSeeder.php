<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GolonganTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gol  = 
        [
            [
                'golongan'      => 'A',
                'created_at'    => new \DateTime
            ],
            [
                'golongan'      => 'B',
                'created_at'    => new \DateTime
            ],
            [
                'golongan'      => 'AB',
                'created_at'    => new \DateTime
            ],
            [
                'golongan'      => 'O',
                'created_at'    => new \DateTime
            ],
        ];

        \DB::table('golongans')->insert($gol);
    }
}
