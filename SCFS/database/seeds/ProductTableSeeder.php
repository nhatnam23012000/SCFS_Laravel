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
            
            'cost'=>'25000',
            'stall_id'=>'1',
        ]);
        $product->save();

        $product= new \App\Product([
            'name' => 'pork grill rice',
            
            'cost'=>'25000',
            'stall_id'=>'1',
        ]);
        $product->save();

        $product= new \App\Product([
            'name' => 'Yang Chow fried rice',
            
            'cost'=>'27000',
            'stall_id'=>'1',
        ]);
        $product->save();
    }
}
