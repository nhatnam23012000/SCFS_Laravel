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

        $product= new \App\Product([
            'name' => 'Hotpot for 4 people',
            
            'cost'=>'120000',
            'stall_id'=>'2',
        ]);
        $product->save();

        $product= new \App\Product([
            'name' => 'Hotpot for 6 people',
            
            'cost'=>'180000',
            'stall_id'=>'2',
        ]);
        $product->save();

        $product= new \App\Product([
            'name' => 'Extra noodles and vegetable',
            'cost'=>'7000',
            'stall_id'=>'2',
        ]);
        $product->save();

        $product= new \App\Product([
            'name' => 'Dried noodles',
            
            'cost'=>'15000',
            'stall_id'=>'3',
        ]);
        $product->save();

        $product= new \App\Product([
            'name' => 'noodles with pork',
            
            'cost'=>'20000',
            'stall_id'=>'3',
        ]);
        $product->save();

        $product= new \App\Product([
            'name' => 'Banh canh',
            
            'cost'=>'20000',
            'stall_id'=>'3',
        ]);
        $product->save();
    }
}
