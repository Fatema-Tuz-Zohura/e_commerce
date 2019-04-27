<?php

use Illuminate\Database\Seeder;
use App\Models\Product;
use Faker\Factory;

class ProductTableSeeder extends Seeder
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
                'name'=> 'Mac',
                'slug'=> Str::slug('Mac'),
                'category_id'=> 1,
                'description'=> 'Test Description',
                'purchase_price'=> '90000',
                'sales_price'=> '100000',
                'quantity'=> 10,

            ],
            [
                'name'=> 'T Shirt',
                'slug'=> Str::slug('T Shirt'),
                'category_id'=> 2,
                'description'=> 'Test Description',
                'purchase_price'=> '400',
                'sales_price'=> '6000',
                'quantity'=> 10,

            ],

            [
                'name'=> 'Sports Keds Shoe',
                'slug'=> Str::slug('Sports Keds Shoe'),
                'category_id'=> 3,
                'description'=> 'Test Description',
                'purchase_price'=> '900',
                'sales_price'=> '1500',
                'quantity'=> 10,
            ]


        ]);

       $faker= Factory::create();

 		$product= Product::find(1); 
 		$product-> photos()->create(['image'=>$faker->imageUrl()]);

 		$product= Product::find(2); 
 		$product-> photos()->create(['image'=>$faker->imageUrl()]);

 		$product= Product::find(3); 
 		$product-> photos()->create(['image'=>$faker->imageUrl()]);
    }
}
