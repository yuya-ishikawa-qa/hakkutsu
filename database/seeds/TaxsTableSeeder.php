<?php

use Illuminate\Database\Seeder;

class TaxsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('taxs')->insert([
            'tax_rate' => '8%',
        ]);

        DB::table('taxs')->insert([
            'tax_rate' => '10%',
        ]);
    }
}
