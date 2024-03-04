<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VegetableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vegetables')->insert(array(
            array(
                'nama-sayur' => 'Apple ',
                'harga'     => '20000 '
            ),
            array(
                'nama-sayur' => 'Grapes ',
                'harga'     => '30000 '
            ),
            array(
                'nama-sayur' => 'Jackfruit ',
                'harga'     => '24000 '
            ),
            array(
                'nama-sayur' => 'Pinnaple',
                'harga'     => '35000 '
            )
        ));
    }
}
