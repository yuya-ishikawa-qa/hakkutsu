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
            'postal' => '1234567',
            'address' => '○県△町×番地',
            'tel' => '09012345678',
            'mail' => 'hakkutsu@example.com',
            'image_path' => 'storage/stores_image/image_path1.png',
            'description' => 'ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。'
        ]);

        DB::table('stores')->insert([
            'user_id' => '3',
            'store_name' => 'ミルキーミルキー',
            'postal' => '1234567',
            'address' => '○県△町×番地',
            'tel' => '09012345678',
            'mail' => 'hakkutsu@example.com',
            'image_path' => 'storage/stores_image/image_path3.png',
            'description' => 'ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。'
        ]);
        DB::table('stores')->insert([
            'user_id' => '4',
            'store_name' => '俺のオレンジ',
            'postal' => '1234567',
            'address' => '○県△町×番地',
            'tel' => '09012345678',
            'mail' => 'hakkutsu@example.com',
            'image_path' => 'storage/stores_image/image_path4.png',
            'description' => 'ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。'
        ]);
        DB::table('stores')->insert([
            'user_id' => '5',
            'store_name' => 'パンプキング',
            'postal' => '1234567',
            'address' => '○県△町×番地',
            'tel' => '09012345678',
            'mail' => 'hakkutsu@example.com',
            'image_path' => 'storage/stores_image/image_path5.png',
            'description' => 'ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。'
        ]);
        DB::table('stores')->insert([
            'user_id' => '1',
            'store_name' => 'バナナマン',
            'postal' => '1234567',
            'address' => '○県△町×番地',
            'tel' => '09012345678',
            'mail' => 'hakkutsu@example.com',
            'image_path' => 'storage/stores_image/image_path6.png',
            'description' => 'ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。'
        ]);
        DB::table('stores')->insert([
            'user_id' => '2',
            'store_name' => 'これぞ日本酒',
            'postal' => '1234567',
            'address' => '○県△町×番地',
            'tel' => '09012345678',
            'mail' => 'hakkutsu@example.com',
            'image_path' => 'storage/stores_image/image_path7.png',
            'description' => 'ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。'
        ]);
        DB::table('stores')->insert([
            'user_id' => '3',
            'store_name' => 'TeasTea',
            'postal' => '1234567',
            'address' => '○県△町×番地',
            'tel' => '09012345678',
            'mail' => 'hakkutsu@example.com',
            'image_path' => 'storage/stores_image/image_path8.png',
            'description' => 'ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。'
        ]);
        DB::table('stores')->insert([
            'user_id' => '4',
            'store_name' => '世界のチーズ取り揃えました',
            'postal' => '1234567',
            'address' => '○県△町×番地',
            'tel' => '09012345678',
            'mail' => 'hakkutsu@example.com',
            'image_path' => 'storage/stores_image/image_path9.png',
            'description' => 'ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。'
        ]);
        DB::table('stores')->insert([
            'user_id' => '5',
            'store_name' => '我が家の野菜',
            'postal' => '1234567',
            'address' => '○県△町×番地',
            'tel' => '09012345678',
            'mail' => 'hakkutsu@example.com',
            'image_path' => 'storage/stores_image/image_path10.png',
            'description' => 'ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。'
        ]);
        DB::table('stores')->insert([
            'user_id' => '1',
            'store_name' => '私ん家の野菜',
            'postal' => '1234567',
            'address' => '○県△町×番地',
            'tel' => '09012345678',
            'mail' => 'hakkutsu@example.com',
            'image_path' => 'storage/stores_image/image_path11.png',
            'description' => 'ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。'
        ]);
        DB::table('stores')->insert([
            'user_id' => '2',
            'store_name' => 'ワイのワイン',
            'postal' => '1234567',
            'address' => '○県△町×番地',
            'tel' => '09012345678',
            'mail' => 'hakkutsu@example.com',
            'image_path' => 'storage/stores_image/image_path12.png',
            'description' => 'ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。'
        ]);
        DB::table('stores')->insert([
            'user_id' => '3',
            'store_name' => '洒落おつワイン',
            'postal' => '1234567',
            'address' => '○県△町×番地',
            'tel' => '09012345678',
            'mail' => 'hakkutsu@example.com',
            'image_path' => 'storage/stores_image/image_path13.png',
            'description' => 'ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。'
        ]);
        DB::table('stores')->insert([
            'user_id' => '4',
            'store_name' => 'チェリーマニア',
            'postal' => '1234567',
            'address' => '○県△町×番地',
            'tel' => '09012345678',
            'mail' => 'hakkutsu@example.com',
            'image_path' => 'storage/stores_image/image_path14.png',
            'description' => 'ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。'
        ]);

        DB::table('stores')->insert([
            'user_id' => '5',
            'store_name' => 'CoffeeLovers',
            'postal' => '1234567',
            'address' => '○県△町×番地',
            'tel' => '09012345678',
            'mail' => 'hakkutsu@example.com',
            'image_path' => 'storage/stores_image/image_path15.png',
            'description' => 'ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。'
        ]);
        DB::table('stores')->insert([
            'user_id' => '5',
            'store_name' => 'うっしっし',
            'postal' => '1234567',
            'address' => '○県△町×番地',
            'tel' => '09012345678',
            'mail' => 'hakkutsu@example.com',
            'image_path' => 'storage/stores_image/image_path16.png',
            'description' => 'ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。'
        ]);
        DB::table('stores')->insert([
            'user_id' => '5',
            'store_name' => '山形のサクランボ集めてみました',
            'postal' => '1234567',
            'address' => '○県△町×番地',
            'tel' => '09012345678',
            'mail' => 'hakkutsu@example.com',
            'image_path' => 'storage/stores_image/image_path17.png',
            'description' => 'ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。'
        ]);
        DB::table('stores')->insert([
            'user_id' => '5',
            'store_name' => '魚部',
            'postal' => '1234567',
            'address' => '○県△町×番地',
            'tel' => '09012345678',
            'mail' => 'hakkutsu@example.com',
            'image_path' => 'storage/stores_image/image_path18.png',
            'description' => 'ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。'
        ]);
        DB::table('stores')->insert([
            'user_id' => '5',
            'store_name' => '新鮮果物',
            'postal' => '1234567',
            'address' => '○県△町×番地',
            'tel' => '09012345678',
            'mail' => 'hakkutsu@example.com',
            'image_path' => 'storage/stores_image/image_path19.png',
            'description' => 'ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。'
        ]);

    }
}
