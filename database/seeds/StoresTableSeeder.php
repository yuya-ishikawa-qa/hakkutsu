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
            'store_name' => 'さくらんぼ名店街',
            'postal' => 'postal1',
            'address' => 'address1',
            'tel' => 'tel1',
            'mail' => 'mail1',
            'image_path' => 'image_path1.png',
            'business_hours' => 'business_hours1',
            'description' => 'ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。'
        ]);
        DB::table('stores')->insert([
            'user_id' => '2',
            'store_name' => '牛屋',
            'postal' => 'postal2',
            'address' => 'address2',
            'tel' => 'tel2',
            'mail' => 'mail2',
            'image_path' => 'image_path2.png',
            'business_hours' => 'business_hours2',
            'description' => 'ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。'
        ]);
        DB::table('stores')->insert([
            'user_id' => '3',
            'store_name' => 'ミルキーミルキー',
            'postal' => 'postal3',
            'address' => 'address3',
            'tel' => 'tel3',
            'mail' => 'mail3',
            'image_path' => 'image_path3.png',
            'business_hours' => 'business_hours3',
            'description' => 'ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。'
        ]);
        DB::table('stores')->insert([
            'user_id' => '4',
            'store_name' => '俺のオレンジ',
            'postal' => 'postal4',
            'address' => 'address4',
            'tel' => 'tel4',
            'mail' => 'mail4',
            'image_path' => 'image_path4.png',
            'business_hours' => 'business_hours4',
            'description' => 'ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。'
        ]);
        DB::table('stores')->insert([
            'user_id' => '5',
            'store_name' => 'パンプキング',
            'postal' => 'postal5',
            'address' => 'address5',
            'tel' => 'tel5',
            'mail' => 'mail5',
            'image_path' => 'image_path5.png',
            'business_hours' => 'business_hours5',
            'description' => 'ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。'
        ]);
        DB::table('stores')->insert([
            'user_id' => '1',
            'store_name' => 'バナナマン',
            'postal' => 'postal6',
            'address' => 'address6',
            'tel' => 'tel6',
            'mail' => 'mail6',
            'image_path' => 'image_path6.png',
            'business_hours' => 'business_hours6',
            'description' => 'ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。'
        ]);
        DB::table('stores')->insert([
            'user_id' => '2',
            'store_name' => 'これぞ日本酒',
            'postal' => 'postal7',
            'address' => 'address7',
            'tel' => 'tel7',
            'mail' => 'mail7',
            'image_path' => 'image_path7.png',
            'business_hours' => 'business_hours7',
            'description' => 'ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。'
        ]);
        DB::table('stores')->insert([
            'user_id' => '3',
            'store_name' => 'TeasTea',
            'postal' => 'postal8',
            'address' => 'address8',
            'tel' => 'tel8',
            'mail' => 'mail8',
            'image_path' => 'image_path8.png',
            'business_hours' => 'business_hours8',
            'description' => 'ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。'
        ]);
        DB::table('stores')->insert([
            'user_id' => '4',
            'store_name' => '世界のチーズ取り揃えました',
            'postal' => 'postal9',
            'address' => 'address9',
            'tel' => 'tel9',
            'mail' => 'mail9',
            'image_path' => 'image_path9.png',
            'business_hours' => 'business_hours9',
            'description' => 'ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。'
        ]);
        DB::table('stores')->insert([
            'user_id' => '5',
            'store_name' => '我が家の野菜',
            'postal' => 'postal10',
            'address' => 'address10',
            'tel' => 'tel10',
            'mail' => 'mail10',
            'image_path' => 'image_path10.png',
            'business_hours' => 'business_hours10',
            'description' => 'ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。'
        ]);
        DB::table('stores')->insert([
            'user_id' => '1',
            'store_name' => '私ん家の野菜',
            'postal' => 'postal11',
            'address' => 'address11',
            'tel' => 'tel11',
            'mail' => 'mail11',
            'image_path' => 'image_path11.png',
            'business_hours' => 'business_hours11',
            'description' => 'ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。'
        ]);
        DB::table('stores')->insert([
            'user_id' => '2',
            'store_name' => 'ワイのワイン',
            'postal' => 'postal12',
            'address' => 'address12',
            'tel' => 'tel12',
            'mail' => 'mail12',
            'image_path' => 'image_path12.png',
            'business_hours' => 'business_hours12',
            'description' => 'ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。'
        ]);
        DB::table('stores')->insert([
            'user_id' => '3',
            'store_name' => '洒落おつワイン',
            'postal' => 'postal13',
            'address' => 'address13',
            'tel' => 'tel13',
            'mail' => 'mail13',
            'image_path' => 'image_path13.png',
            'business_hours' => 'business_hours13',
            'description' => 'ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。'
        ]);
        DB::table('stores')->insert([
            'user_id' => '4',
            'store_name' => 'チェリーマニア',
            'postal' => 'postal14',
            'address' => 'address14',
            'tel' => 'tel14',
            'mail' => 'mail14',
            'image_path' => 'image_path14.png',
            'business_hours' => 'business_hours14',
            'description' => 'ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。'
        ]);

        DB::table('stores')->insert([
            'user_id' => '5',
            'store_name' => 'CoffeeLovers',
            'postal' => 'postal15',
            'address' => 'address15',
            'tel' => 'tel15',
            'mail' => 'mail15',
            'image_path' => 'image_path15.png',
            'business_hours' => 'business_hours15',
            'description' => 'ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。'
        ]);
        DB::table('stores')->insert([
            'user_id' => '5',
            'store_name' => 'うっしっし',
            'postal' => 'postal16',
            'address' => 'address16',
            'tel' => 'tel16',
            'mail' => 'mail16',
            'image_path' => 'image_path16.png',
            'business_hours' => 'business_hours16',
            'description' => 'ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。'
        ]);
        DB::table('stores')->insert([
            'user_id' => '5',
            'store_name' => '山形のサクランボ集めてみました',
            'postal' => 'postal17',
            'address' => 'address17',
            'tel' => 'tel17',
            'mail' => 'mail17',
            'image_path' => 'image_path17.png',
            'business_hours' => 'business_hours17',
            'description' => 'ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。'
        ]);
        DB::table('stores')->insert([
            'user_id' => '5',
            'store_name' => '魚部',
            'postal' => 'postal18',
            'address' => 'address18',
            'tel' => 'tel18',
            'mail' => 'mail18',
            'image_path' => 'image_path18.png',
            'business_hours' => 'business_hours18',
            'description' => 'ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。'
        ]);
        DB::table('stores')->insert([
            'user_id' => '5',
            'store_name' => '新鮮果物',
            'postal' => 'postal19',
            'address' => 'address19',
            'tel' => 'tel19',
            'mail' => 'mail19',
            'image_path' => 'image_path19.png',
            'business_hours' => 'business_hours19',
            'description' => 'ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。'
        ]);

    }
}
