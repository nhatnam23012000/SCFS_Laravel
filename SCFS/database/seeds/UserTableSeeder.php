<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Nam',
            'email' => 'nam@test.com',
            'phone_number' => '1212121212',
            'role'=>'COOK',
            'password' => Hash::make('12345678'),
        ]);

        DB::table('users')->insert([
            'name' => 'Trinh',
            'email' => 'trinh@test.com',
            'phone_number' => '3434343434',
            'role'=>'STALLOWNER',
            'password' => Hash::make('12345678'),
        ]);

        DB::table('users')->insert([
            'name' => 'Anh',
            'email' => 'anh@test.com',
            'phone_number' => '5656565656',
            'role'=>'MANAGER',
            'password' => Hash::make('12345678'),
        ]);

        DB::table('users')->insert([
            'name' => 'Phuoc',
            'email' => 'phuoc@test.com',
            'phone_number' => '7878787878',
            'role'=>'ITSTAFF',
            'password' => Hash::make('12345678'),
        ]);
    }
}
