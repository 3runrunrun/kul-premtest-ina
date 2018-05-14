<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('products')->truncate();
      $faker = Faker\Factory::create();

      for ($i=0; $i < 2; $i++) { 
        $product = app()->make('App\Product');
        $product->fill([
          'name' => $faker->name,
        ]);
        $product->save();
      }
    }
}
