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
                    'gambar'        => 'A.png',
                    'stok'          => 0,
                    'created_at'    => new \DateTime
                ],
                [
                    'golongan'      => 'B',
                    'gambar'        => 'B.png',
                    'stok'          => 0,
                    'created_at'    => new \DateTime
                ],
                [
                    'golongan'      => 'AB',
                    'gambar'        => 'AB.png',
                    'stok'          => 0,
                    'created_at'    => new \DateTime
                ],
                [
                    'golongan'      => 'O',
                    'gambar'        => 'O.png',
                    'stok'          => 0,
                    'created_at'    => new \DateTime
                ],
            ];

        \DB::table('golongans')->insert($gol);
    }
}
