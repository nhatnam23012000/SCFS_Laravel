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
            'imageUrl'=>'/jpg/chickenGrillRice.jpg',
            'cost'=>'25000',
            'stall_id'=>'1',
        ]);
        $product->save();

        $product= new \App\Product([
            'name' => 'pork grill rice',
            'imageUrl'=>'/jpg/porkGrillRice.jpg',
            'cost'=>'25000',
            'stall_id'=>'1',
        ]);
        $product->save();

        $product= new \App\Product([
            'name' => 'Yang Chow fried rice',
            'imageUrl'=>'/jpg/yangChowFriedRice.jpg',
            'cost'=>'27000',
            'stall_id'=>'1',
        ]);
        $product->save();

        $product= new \App\Product([
            'name' => 'Hotpot for 4 people',
            'imageUrl'=>'/jpg/hotPotFor4people.jpg',
            'cost'=>'120000',
            'stall_id'=>'2',
        ]);
        $product->save();

        $product= new \App\Product([
            'name' => 'Hotpot for 6 people',
            'imageUrl'=>'/jpg/hotPotFor6people.jpg',
            'cost'=>'180000',
            'stall_id'=>'2',
        ]);
        $product->save();

        $product= new \App\Product([
            'name' => 'Extra noodles and vegetable',
            'imageUrl'=>'/jpg/noodles.jpg',
            'cost'=>'7000',
            'stall_id'=>'2',
        ]);
        $product->save();

        $product= new \App\Product([
            'name' => 'Dried noodles',
            'imageUrl'=>'/jpg/driedNoodles.jpg',
            'cost'=>'15000',
            'stall_id'=>'3',
        ]);
        $product->save();

        $product= new \App\Product([
            'name' => 'noodles with pork',
            'imageUrl'=>'/jpg/noodlesWithPork.jpg',
            'cost'=>'20000',
            'stall_id'=>'3',
        ]);
        $product->save();

        $product= new \App\Product([
            'name' => 'Banh canh',
            'imageUrl'=>'/jpg/banhCanh.jpg',
            'cost'=>'20000',
            'stall_id'=>'3',
        ]);
        $product->save();
    }
}
