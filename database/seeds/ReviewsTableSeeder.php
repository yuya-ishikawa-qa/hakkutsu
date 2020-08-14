<?php

use Illuminate\Database\Seeder;
use App\Review;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            'user_id' => '1',
            'item_id' => '1',
            'title' => 'さくらんぼの',
            'body' => 'さくらんぼとってもおいしかったです。またお取り寄せしたいです。',
        ]);
        DB::table('reviews')->insert([
            'user_id' => '2',
            'item_id' => '2',
            'title' => '高級桜桃',
            'body' => '高級さくらんぼですね！甘さの中にも高級感があります。おすすめです。',
        ]);
        DB::table('reviews')->insert([
            'user_id' => '3',
            'item_id' => '3',
            'title' => '子供が大好き',
            'body' => '甘くて、子供がとっても美味しいと言っています！おすすめです。',
        ]);
        DB::table('reviews')->insert([
            'user_id' => '4',
            'item_id' => '4',
            'title' => '山形のブランド',
            'body' => '山形の高級ブランドです。高いけど一度は食べてみたい味ですね！',
        ]);
        DB::table('reviews')->insert([
            'user_id' => '5',
            'item_id' => '5',
            'title' => '静岡の和牛',
            'body' => '静岡の和牛ブランドです。あまり_聞いたことがありませんでしたが、侮れない！',
        ]);
        DB::table('reviews')->insert([
            'user_id' => '1',
            'item_id' => '5',
            'title' => '静岡の和牛ブランド',
            'body' => 'あまり聞いたことがありませんでしたが、めちゃ美味しかった！',
        ]);
        DB::table('reviews')->insert([
            'user_id' => '1',
            'item_id' => '6',
            'title' => '巣篭もりBBQ',
            'body' => 'お家で手軽にBBQやるときはこれが一番ですよ。',
        ]);
        DB::table('reviews')->insert([
            'user_id' => '2',
            'item_id' => '7',
            'title' => '絶品',
            'body' => '本家本元の黒毛和牛。とろけるうまさです。',
        ]);
        DB::table('reviews')->insert([
            'user_id' => '3',
            'item_id' => '8',
            'title' => '安くてうまい',
            'body' => '串焼きはビールと合う！',
        ]);
        DB::table('reviews')->insert([
            'user_id' => '4',
            'item_id' => '9',
            'title' => 'こんな牛乳初めて',
            'body' => '牛乳嫌いだった子供が牛乳大好きに！お風呂上がりに牛乳が日課になりました。',
        ]);
        DB::table('reviews')->insert([
            'user_id' => '5',
            'item_id' => '10',
            'title' => 'こんな牛乳初めて',
            'body' => '牛乳嫌いだった子供が牛乳大好きに！お風呂上がりに牛乳が日課になりました。',
        ]);
        DB::table('reviews')->insert([
            'user_id' => '1',
            'item_id' => '11',
            'title' => '世界のチーズ',
            'body' => '一風変わったチーズが楽しめます！',
        ]);
        DB::table('reviews')->insert([
            'user_id' => '2',
            'item_id' => '12',
            'title' => '世界のオレンジ',
            'body' => '世界のオレンジが食べられます！オレンジ好きにはたまらない商品です！',
        ]);
        DB::table('reviews')->insert([
            'user_id' => '2',
            'item_id' => '19',
            'title' => '侮ってはいけないワイン',
            'body' => 'お手頃だから味はそこそこかなと。飲んでびっくり！！めちゃ美味しいですよ！',
        ]);

    }
}
