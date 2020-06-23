<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $product= new \App\Product([
            'name' => 'chicken grill rice',
            'image_link'=>'https://media.cooky.vn/recipe/g1/4055/s800x500/recipe4055-635721188510293719.jpg',
            'cost'=>'25000',
            'stall_id'=>'1',
        ]);
        $product->save();

        $product= new \App\Product([
            'name' => 'pork grill rice',
            'image_link'=>'https://cdn.beptruong.edu.vn/wp-content/uploads/2018/06/cach-uop-thit-nuong-com-tam.jpg',
            'cost'=>'25000',
            'stall_id'=>'1',
        ]);
        $product->save();

        $product= new \App\Product([
            'name' => 'Yang Chow fried rice',
            'image_link'=>'https://massageishealthy.com/wp-content/uploads/2018/12/cach-chien-com-chien-duong-chau-bang-tieng-anh-1.jpg',
            'cost'=>'27000',
            'stall_id'=>'1',
        ]);
        $product->save();
    }
}
