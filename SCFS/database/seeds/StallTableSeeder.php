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
        'image_link' => 'https://sites.google.com/site/quancomchienthientruc/_/rsrc/1533802245266/config/customLogo.gif?revision=23',   
        ]);
        $stall->save();
    }
}
