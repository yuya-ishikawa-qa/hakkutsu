<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use App\Http\Requests\SignupRequest;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */

    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */


    public function store(Request $request)
    {
        // dd($request);

        // $data = $request->session()->get('data');
        //確認画面で修正するが選択された時にお問い合わせフォームに戻る
        $data = $request->except('action');
        // dd($data);
        if($request->action === '修正する'){
            return redirect()->route('signup')->withInput($data);
        }

        $users = new User();
        $users->name = $data['name'];
        $users->name_kana = $data['name_kana'];
        $users->postal_code = $data['postal_code'];
        $users->address_1 = $data['address_1'];
        $users->address_2 = $data['address_2'];
        $users->address_3 = $data['address_3'];
        $users->tel = $data['tel'];
        $users->email = $data['email'];
        $users->password = Hash::make($data['password']);
        $users->save();
        return redirect('/')->with('my_status', __('会員登録が完了しました'));
    }


     // 確認フォーム
    public function signup_confirm(SignupRequest $request)
    {
        // $data = $request->all();
        // // dd($data);
        // $request->session()->put([
        //     'data' => $data,
        // ]);

        // return view('auth.confirm', compact("data"));
        $data = $request->all();

        return view ('auth.confirm',[
            'data' => $data
        ]);
    }

}
