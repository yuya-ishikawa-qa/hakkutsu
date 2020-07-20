<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CreatePost;


class PostController extends Controller
{
    public function showCreateForm()
    {
        return view('posts/create');
    }

    public function create(Request $request)
    {
        // Postモデルのインスタンスを作成する
        $post = new Post();

        // タイトル
        $post->title = $request->title;

        //画像アップロード
        $time = date("Ymdhis");
        $post->image_url = $request->image_url->storeAs('public/post_images', $time.'_'.Auth::user()->id . '.jpg');

        //コンテンツ
        $post->content = $request->content;

        //登録ユーザーからidを取得
        $post->user_id = Auth::user()->id;

        // インスタンスの状態をデータベースに書き込む
        $post->save();

        //「投稿する」をクリックしたら投稿情報表示ページへリダイレクト        
        return redirect()->route('posts.detail', [
            'id' => $post->id,
        ]);
    }

    /**
     * 詳細ページ
     */
    public function detail(Post $post)
    {
        return view('posts/detail', [
            'title' => $post->title,
            'content' => $post->content,
            'user_id' => $post->user_id,
            'image_url' => str_replace('public/', 'storage/', $post->image_url),
        ]);        
    }

}
