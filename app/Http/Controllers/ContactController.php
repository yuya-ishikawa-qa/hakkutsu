<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index ()
    {
        return view('contact.index');
    }

    public function confirm(ContactRequest $request)
    {
        $inputs = $request->all();
        // dd($inputs);

        return view ('contact.confirm',[
            'inputs' => $inputs
        ]);
    }

    public function complete (Request $request)
    {
        //確認画面で修正するが選択された時にお問い合わせフォームに戻る
        $input = $request->except('action');
        // dd($input);
        if($request->action === '修正する'){
            return redirect()->route('contact.index')->withInput($input);
        }

        //二重送信防止のためのトークン発行
        $request->session()->regenerateToken();

        //お客様に送るメール
        \Mail::send(new \App\Mail\ContactMail([
            'to'        => $request->email,
            'to_name'   => $request->name,
            'from'      => 'hakkutsu.mrs@gmail.com',
            'from_name' => 'Hakkutsu',
            'subject'   => 'お問い合わせ受付完了のお知らせ',
            'body'      => $request->body
        ],'to'));

        //自分に送るメール
        \Mail::send(new \App\Mail\ContactMail([
            'to'        => 'hakkutsu.mrs@gmail.com',
            'to_name'   => 'Hakkutsu',
            'from'      => $request->email,
            'from_name' => $request->name,
            'subject'   => 'お客様からのお問い合わせ',
            'body'      => $request->body
        ],'from'));
        return view ('contact.complete');
    }
}
