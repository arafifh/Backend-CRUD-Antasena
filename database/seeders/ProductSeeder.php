<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::insert([
            [
                'name'          => 'Gelang',
                'description'   => 'gelang ajaib bisa bongkar pasang',
            ],
            [
                'name'          => 'Mobil',
                'description'   => 'bisa terbang',
            ],
            [
                'name'          => 'Sticker',
                'description'   => 'dapet banyak',
            ],
            [
                'name'          => 'Tas',
                'description'   => 'bisa nyimpen kapal',
            ]
        ]);
    }
}
