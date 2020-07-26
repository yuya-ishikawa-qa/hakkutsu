<?php

use Illuminate\Database\Seeder;

class StoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stores')->insert([
            'user_id' => '1',
            'store_name' => 'store_name1',
            'postal' => 'postal1',
            'address' => 'address1',
            'tel' => 'tel1',
            'mail' => 'mail1',
            'path' => 'path1',
            'business_hours' => 'business_hours1',
            'description' => 'description1'
        ]);
        DB::table('stores')->insert([
            'user_id' => '2',
            'store_name' => 'store_name2',
            'postal' => 'postal2',
            'address' => 'address2',
            'tel' => 'tel2',
            'mail' => 'mail2',
            'path' => 'path2',
            'business_hours' => 'business_hours2',
            'description' => 'description2'
        ]);
        DB::table('stores')->insert([
            'user_id' => '3',
            'store_name' => 'store_name3',
            'postal' => 'postal3',
            'address' => 'address3',
            'tel' => 'tel3',
            'mail' => 'mail3',
            'path' => 'path3',
            'business_hours' => 'business_hours3',
            'description' => 'description3'
        ]);
        DB::table('stores')->insert([
            'user_id' => '4',
            'store_name' => 'store_name4',
            'postal' => 'postal4',
            'address' => 'address4',
            'tel' => 'tel4',
            'mail' => 'mail4',
            'path' => 'path4',
            'business_hours' => 'business_hours4',
            'description' => 'description4' 
        ]);
        DB::table('stores')->insert([
            'user_id' => '5',
            'store_name' => 'store_name5',
            'postal' => 'postal5',
            'address' => 'address5',
            'tel' => 'tel5',
            'mail' => 'mail5',
            'path' => 'path5',
            'business_hours' => 'business_hours5',
            'description' => 'description5'
        ]);

    }
}
