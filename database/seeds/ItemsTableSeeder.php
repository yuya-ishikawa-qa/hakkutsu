<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            'store_id' => '1',
            'tax_id' => '1',
            'item_name' => '旬のさくらんぼ',
            'status' => 'status',
            'stock' => 'stock',
            'price' => '1000',
            'image_path' => 'cherry01.jpg',
            'description' => 'ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。'
        ]);
        DB::table('items')->insert([
            'store_id' => '1',
            'tax_id' => '1',
            'item_name' => '煌めき',
            'status' => 'status',
            'stock' => 'stock',
            'price' => '500',
            'image_path' => 'cherry02.jpg',
            'description' => 'ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。'
        ]);
        DB::table('items')->insert([
            'store_id' => '1',
            'tax_id' => '1',
            'item_name' => 'とっても甘いサクランボ',
            'status' => 'status',
            'stock' => 'stock',
            'price' => '1500',
            'image_path' => 'cherry03.jpg',
            'description' => 'ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。'
        ]);
        DB::table('items')->insert([
            'store_id' => '1',
            'tax_id' => '1',
            'item_name' => '紅さやか',
            'status' => 'status',
            'stock' => 'stock',
            'price' => '2000',
            'image_path' => 'cherry04.jpg',
            'description' => 'ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。'
        ]);
        DB::table('items')->insert([
            'store_id' => '2',
            'tax_id' => '1',
            'item_name' => '静岡そだち（和牛）',
            'status' => 'status',
            'stock' => 'stock',
            'price' => '1500',
            'image_path' => 'beef01.png',
            'description' => 'ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。'
        ]);
        DB::table('items')->insert([
            'store_id' => '2',
            'tax_id' => '1',
            'item_name' => '味付きBBQ',
            'status' => 'status',
            'stock' => 'stock',
            'price' => '1000',
            'image_path' => 'beef02.jpg',
            'description' => 'ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。'
        ]);
        DB::table('items')->insert([
            'store_id' => '2',
            'tax_id' => '1',
            'item_name' => '黒毛和牛',
            'status' => 'status',
            'stock' => 'stock',
            'price' => '5000',
            'image_path' => 'beef03.jpg',
            'description' => 'ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。'
        ]);
        DB::table('items')->insert([
            'store_id' => '2',
            'tax_id' => '1',
            'item_name' => '串焼きBBQ',
            'status' => 'status',
            'stock' => 'stock',
            'price' => '1000',
            'image_path' => 'beef04.jpg',
            'description' => 'ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。'
        ]);
        DB::table('items')->insert([
            'store_id' => '3',
            'tax_id' => '1',
            'item_name' => 'ワインに合うチーズ３選',
            'status' => 'status',
            'stock' => 'stock',
            'price' => '1500',
            'image_path' => 'cheese01.jpg',
            'description' => 'ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。'
        ]);
        DB::table('items')->insert([
            'store_id' => '3',
            'tax_id' => '1',
            'item_name' => '超美おいしい牛乳',
            'status' => 'status',
            'stock' => 'stock',
            'price' => '800',
            'image_path' => 'milk01.jpg',
            'description' => 'ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。'
        ]);
        DB::table('items')->insert([
            'store_id' => '3',
            'tax_id' => '1',
            'item_name' => '世界の逸品（チーズ）',
            'status' => 'status',
            'stock' => 'stock',
            'price' => '3000',
            'image_path' => 'cheese02.jpg',
            'description' => 'ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。'
        ]);
        DB::table('items')->insert([
            'store_id' => '3',
            'tax_id' => '1',
            'item_name' => 'フルーツチーズ',
            'status' => 'status',
            'stock' => 'stock',
            'price' => '1250',
            'image_path' => 'cheese03.jpg',
            'description' => 'ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。'
        ]);
        DB::table('items')->insert([
            'store_id' => '4',
            'tax_id' => '1',
            'item_name' => '世界のオレンジ詰め合わせ',
            'status' => 'status',
            'stock' => 'stock',
            'price' => '2500',
            'image_path' => 'orange01.jpg',
            'description' => 'ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。'
        ]);
        DB::table('items')->insert([
            'store_id' => '4',
            'tax_id' => '1',
            'item_name' => 'OrangeOil',
            'status' => 'status',
            'stock' => 'stock',
            'price' => '1150',
            'image_path' => 'orange02.jpg',
            'description' => 'ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。'
        ]);
        DB::table('items')->insert([
            'store_id' => '4',
            'tax_id' => '1',
            'item_name' => 'はっさく（１箱・約１５個入）',
            'status' => 'status',
            'stock' => 'stock',
            'price' => '3000',
            'image_path' => 'orange03.jpg',
            'description' => 'ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。'
        ]);
        DB::table('items')->insert([
            'store_id' => '4',
            'tax_id' => '1',
            'item_name' => 'OrangeJuice',
            'status' => 'status',
            'stock' => 'stock',
            'price' => '950',
            'image_path' => 'orange04.jpg',
            'description' => 'ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。'
        ]);
        DB::table('items')->insert([
            'store_id' => '4',
            'tax_id' => '1',
            'item_name' => '俺のオレンジ特製 Orange',
            'status' => 'status',
            'stock' => 'stock',
            'price' => '3500',
            'image_path' => 'orange05.jpg',
            'description' => 'ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。'
        ]);
        DB::table('items')->insert([
            'store_id' => '4',
            'tax_id' => '1',
            'item_name' => 'みかん',
            'status' => 'status',
            'stock' => 'stock',
            'price' => '3500',
            'image_path' => 'orange06.jpg',
            'description' => 'ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。'
        ]);
        DB::table('items')->insert([
            'store_id' => '12',
            'tax_id' => '1',
            'item_name' => 'Naousa',
            'status' => 'status',
            'stock' => 'stock',
            'price' => '3500',
            'image_path' => 'wine01.jpg',
            'description' => 'ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。'
        ]);
        DB::table('items')->insert([
            'store_id' => '12',
            'tax_id' => '1',
            'item_name' => 'お手頃ワイン',
            'status' => 'status',
            'stock' => 'stock',
            'price' => '2500',
            'image_path' => 'wine02.jpg',
            'description' => 'ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。'
        ]);
        DB::table('items')->insert([
            'store_id' => '12',
            'tax_id' => '1',
            'item_name' => 'Moet',
            'status' => 'status',
            'stock' => 'stock',
            'price' => '6500',
            'image_path' => 'wine03.jpg',
            'description' => 'ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。'
        ]);
    }
}
