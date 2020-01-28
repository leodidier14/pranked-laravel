<?php

use Illuminate\Database\Seeder;
use App\Product;
use Faker\Factory;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i=0; $i <30; $i++) {
            Product::create([
                'name' => $faker->sentence(2),
                'slug' => $faker->slug,
                'description' => $faker->sentence(10),
                'price' => $faker->numberBetween(15,300) * 100,
                'image' => 'https://cdn.shopify.com/s/files/1/0277/2202/2987/products/TEE_360x.png?v=1573687645'
            ]);
        }
    }
}
