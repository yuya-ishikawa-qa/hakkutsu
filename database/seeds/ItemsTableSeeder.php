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
            'status' => '○販売中です',
            'stock' => '○在庫あり',
            'price' => '1000',
            'image_path' => 'storage/stores_image/cherry01.jpg',
            'description' => 'ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。'
        ]);
        DB::table('items')->insert([
            'store_id' => '1',
            'tax_id' => '1',
            'item_name' => '煌めき',
            'status' => '○販売中です',
            'stock' => '○在庫あり',
            'price' => '500',
            'image_path' => 'storage/stores_image/cherry02.jpg',
            'description' => 'ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。'
        ]);
        DB::table('items')->insert([
            'store_id' => '1',
            'tax_id' => '1',
            'item_name' => 'とっても甘いサクランボ',
            'status' => '○販売中です',
            'stock' => '○在庫あり',
            'price' => '1500',
            'image_path' => 'storage/stores_image/cherry03.jpg',
            'description' => 'ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。'
        ]);
        DB::table('items')->insert([
            'store_id' => '1',
            'tax_id' => '1',
            'item_name' => '紅さやか',
            'status' => '○販売中です',
            'stock' => '○在庫あり',
            'price' => '2000',
            'image_path' => 'storage/stores_image/cherry04.jpg',
            'description' => 'ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。'
        ]);
        DB::table('items')->insert([
            'store_id' => '1',
            'tax_id' => '1',
            'item_name' => '静岡そだち（和牛）',
            'status' => '○販売中です',
            'stock' => '○在庫あり',
            'price' => '1500',
            'image_path' => 'storage/stores_image/beef01.png',
            'description' => 'ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。'
        ]);
        DB::table('items')->insert([
            'store_id' => '1',
            'tax_id' => '1',
            'item_name' => '味付きBBQ',
            'status' => '○販売中です',
            'stock' => '○在庫あり',
            'price' => '1000',
            'image_path' => 'storage/stores_image/beef02.jpg',
            'description' => 'ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。'
        ]);
        DB::table('items')->insert([
            'store_id' => '1',
            'tax_id' => '1',
            'item_name' => '黒毛和牛',
            'status' => '○販売中です',
            'stock' => '○在庫あり',
            'price' => '5000',
            'image_path' => 'storage/stores_image/beef03.jpg',
            'description' => 'ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。'
        ]);
        DB::table('items')->insert([
            'store_id' => '1',
            'tax_id' => '1',
            'item_name' => '串焼きBBQ',
            'status' => '○販売中です',
            'stock' => '○在庫あり',
            'price' => '1000',
            'image_path' => 'storage/stores_image/beef04.jpg',
            'description' => 'ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。'
        ]);
        DB::table('items')->insert([
            'store_id' => '1',
            'tax_id' => '1',
            'item_name' => 'ワインに合うチーズ３選',
            'status' => '○販売中です',
            'stock' => '○在庫あり',
            'price' => '1500',
            'image_path' => 'storage/stores_image/cheese01.jpg',
            'description' => 'ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。'
        ]);
        DB::table('items')->insert([
            'store_id' => '1',
            'tax_id' => '1',
            'item_name' => '超美おいしい牛乳',
            'status' => '○販売中です',
            'stock' => '○在庫あり',
            'price' => '800',
            'image_path' => 'storage/stores_image/milk01.jpg',
            'description' => 'ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。'
        ]);
        DB::table('items')->insert([
            'store_id' => '1',
            'tax_id' => '1',
            'item_name' => '世界の逸品（チーズ）',
            'status' => '○販売中です',
            'stock' => '○在庫あり',
            'price' => '3000',
            'image_path' => 'storage/stores_image/cheese02.jpg',
            'description' => 'ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。'
        ]);
        DB::table('items')->insert([
            'store_id' => '1',
            'tax_id' => '1',
            'item_name' => 'フルーツチーズ',
            'status' => '○販売中です',
            'stock' => '○在庫あり',
            'price' => '1250',
            'image_path' => 'storage/stores_image/cheese03.jpg',
            'description' => 'ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。'
        ]);
        DB::table('items')->insert([
            'store_id' => ' 1',
            'tax_id' => '1',
            'item_name' => '世界のオレンジ詰め合わせ',
            'status' => '○販売中です',
            'stock' => '○在庫あり',
            'price' => '2500',
            'image_path' => 'storage/stores_image/orange01.jpg',
            'description' => 'ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。'
        ]);
        DB::table('items')->insert([
            'store_id' => '1',
            'tax_id' => '1',
            'item_name' => 'OrangeOil',
            'status' => '○販売中です',
            'stock' => '○在庫あり',
            'price' => '1150',
            'image_path' => 'storage/stores_image/orange02.jpg',
            'description' => 'ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。'
        ]);
        DB::table('items')->insert([
            'store_id' => '1',
            'tax_id' => '1',
            'item_name' => 'はっさく（１箱・約１５個入）',
            'status' => '○販売中です',
            'stock' => '○在庫あり',
            'price' => '3000',
            'image_path' => 'storage/stores_image/orange03.jpg',
            'description' => 'ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。'
        ]);
        DB::table('items')->insert([
            'store_id' => '1',
            'tax_id' => '1',
            'item_name' => 'OrangeJuice',
            'status' => '○販売中です',
            'stock' => '○在庫あり',
            'price' => '950',
            'image_path' => 'storage/stores_image/orange04.jpg',
            'description' => 'ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。'
        ]);
        DB::table('items')->insert([
            'store_id' => '1',
            'tax_id' => '1',
            'item_name' => '俺のオレンジ特製 Orange',
            'status' => '○販売中です',
            'stock' => '○在庫あり',
            'price' => '3500',
            'image_path' => 'storage/stores_image/orange05.jpg',
            'description' => 'ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。'
        ]);
        DB::table('items')->insert([
            'store_id' => '1',
            'tax_id' => '1',
            'item_name' => 'みかん',
            'status' => '○販売中です',
            'stock' => '○在庫あり',
            'price' => '3500',
            'image_path' => 'storage/stores_image/orange06.jpg',
            'description' => 'ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。'
        ]);
        DB::table('items')->insert([
            'store_id' => '1',
            'tax_id' => '1',
            'item_name' => 'Naousa',
            'status' => '○販売中です',
            'stock' => '○在庫あり',
            'price' => '3500',
            'image_path' => 'storage/stores_image/wine01.jpg',
            'description' => 'ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。'
        ]);
        DB::table('items')->insert([
            'store_id' => '1',
            'tax_id' => '1',
            'item_name' => 'お手頃ワイン',
            'status' => '○販売中です',
            'stock' => '○在庫あり',
            'price' => '2500',
            'image_path' => 'storage/stores_image/wine02.jpg',
            'description' => 'ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。'
        ]);
        DB::table('items')->insert([
            'store_id' => '1',
            'tax_id' => '1',
            'item_name' => 'Moet',
            'status' => '○販売中です',
            'stock' => '○在庫あり',
            'price' => '6500',
            'image_path' => 'storage/stores_image/wine03.jpg',
            'description' => 'ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。'
        ]);
    }
}
