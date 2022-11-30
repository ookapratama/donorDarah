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
                    'gambar'        => 'A-big.png',
                    'stok'          => 50,
                    'created_at'    => new \DateTime
                ],
                [
                    'golongan'      => 'B',
                    'gambar'        => 'B-big.png',
                    'stok'          => 50,
                    'created_at'    => new \DateTime
                ],
                [
                    'golongan'      => 'AB',
                    'gambar'        => 'AB-big.png',
                    'stok'          => 50,
                    'created_at'    => new \DateTime
                ],
                [
                    'golongan'      => 'O',
                    'gambar'        => 'O-big.png',
                    'stok'          => 50,
                    'created_at'    => new \DateTime
                ],
            ];

        \DB::table('golongans')->insert($gol);
    }
}
