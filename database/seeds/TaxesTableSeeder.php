<?php

use Illuminate\Database\Seeder;

class TaxesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $taxes = [
            ['code' => 1, 'tax_rate' => '8%'],
            ['code' => 2, 'tax_rate' => '10%'],
        ];
        DB::table('taxes')->insert($taxes);
    }
}
