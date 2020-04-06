<?php

use Illuminate\Database\Seeder;
use App\product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //model factories
        factory( App\Product::class , 100)->create(); //

    }
}
