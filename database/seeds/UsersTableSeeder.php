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
            'email' => 'sample1@sample.com',
            'password' => bcrypt('sample01')
        ]);
        DB::table('users')->insert([
            'name' => 'sample2',
            'email' => 'sample2@sample.com',
            'password' => bcrypt('sample02')
        ]);
        DB::table('users')->insert([
            'name' => 'sample3',
            'email' => 'sample3@sample.com',
            'password' => bcrypt('sample03')
        ]);
        DB::table('users')->insert([
            'name' => 'sample4',
            'email' => 'sample4@sample.com',
            'password' => bcrypt('sample04')
        ]);
        DB::table('users')->insert([
            'name' => 'sample5',
            'email' => 'sample5@sample.com',
            'password' => bcrypt('sample05')
        ]);
    }
}
