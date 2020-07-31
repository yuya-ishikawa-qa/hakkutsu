<?php

use Illuminate\Database\Seeder;
use App\User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'sample1',
            'name_kana' => 'sample1',
            'postal_code' => 'sample1',
            'address_1' => 'sample1',
            'address_2' => 'sample1',
            'address_3' => 'sample1',
            'tel' => 'sample1',
            'email' => 'sample1@sample.com',
            'password' => bcrypt('sample01')
        ]);
        DB::table('users')->insert([
            'name' => 'sample2',
            'name_kana' => 'sample2',
            'postal_code' => 'sample2',
            'address_1' => 'sample2',
            'address_2' => 'sample2',
            'address_3' => 'sample2',
            'tel' => 'sample2',
            'email' => 'sample2@sample.com',
            'password' => bcrypt('sample02')
        ]);
        DB::table('users')->insert([
            'name' => 'sample3',
            'name_kana' => 'sample3',
            'postal_code' => 'sample3',
            'address_1' => 'sample3',
            'address_2' => 'sample3',
            'address_3' => 'sample3',
            'tel' => 'sample3',
            'email' => 'sample3@sample.com',
            'password' => bcrypt('sample03')
        ]);
        DB::table('users')->insert([
            'name' => 'sample4',
            'name_kana' => 'sample4',
            'postal_code' => 'sample4',
            'address_1' => 'sample4',
            'address_2' => 'sample4',
            'address_3' => 'sample4',
            'tel' => 'sample4',
            'email' => 'sample4@sample.com',
            'password' => bcrypt('sample04')
        ]);
        DB::table('users')->insert([
            'name' => 'sample5',
            'name_kana' => 'sample5',
            'postal_code' => 'sample5',
            'address_1' => 'sample5',
            'address_2' => 'sample5',
            'address_3' => 'sample5',
            'tel' => 'sample5',
            'email' => 'sample5@sample.com',
            'password' => bcrypt('sample05')
        ]);
    }
}
