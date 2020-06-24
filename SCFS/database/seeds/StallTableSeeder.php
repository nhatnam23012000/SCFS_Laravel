<?php

use Illuminate\Database\Seeder;

class StallTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $stall =  new \App\Stall([
        'name' =>'Bao Ky fried rice', 
        ]);
        $stall->save();

        $stall =  new \App\Stall([
        'name' =>'Hoang Dat 2 veggie hotpot', 
        ]);
        $stall->save();

        $stall =  new \App\Stall([
        'name' =>'Hu tieu 76', 
        ]);
        $stall->save();
    }
}
