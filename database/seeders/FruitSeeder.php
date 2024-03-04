<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FruitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('fruits')->insert(array(
            array(
                'nama_buah' => 'Apple ',
                'harga'     => '20000 '
            ),
            array(
                'nama_buah' => 'Grapes ',
                'harga'     => '30000 '
            ),
            array(
                'nama_buah' => 'Jackfruit ',
                'harga'     => '24000 '
            ),
            array(
                'nama_buah' => 'Pinnaple',
                'harga'     => '35000 '
            )
        ));
    }
}
