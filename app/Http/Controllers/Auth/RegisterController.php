<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use App\Http\Requests\SignupRequest;
use Illuminate\Validation\Rule;    // 追加

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
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'name' => 'required | string | max:255',
    //         'name_kana' => 'required | string | max:255',
    //         'postal_code' => 'required | string | max:255',
    //         'address_1' => 'required | string | max:255',
    //         'address_2' => 'required | string | max:255',
    //         'address_3' => 'required | string | max:255',
    //         'tel' => 'required | string | max:255',
    //         'email' => 'required | string | email | max:255',
    //         Rule::unique('users', 'email')->whereNull('deleted_at'),
    //         // 8文字以上＆英数字(アルファベット・数字は最低1文字以上は使用する)
    //         'password' => 'required | string | min:6 | confirmed',
    //     ]);
    // }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */


     // 確認フォーム
    public function signup_confirm(SignupRequest $request)
    {
        $data = $request->all();


        // $request->session()->put($data);
        $request->session()->put([
            'data' => $data,
        ]);

        return view('auth.confirm', compact("data"));
    }


    public function store(Request $request)
    {
        // dd($request);

        $data = $request->session()->get('data');
        // $request->session()->forget('data');
        // dd($data);


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


    // protected function create(array $data)
    // {
    //     return User::create([
    //         'name' => $data['name'],
    //         'name_kana' => $data['name_kana'],
    //         'postal_code' => $data['postal_code'],
    //         'address_1' => $data['address_1'],
    //         'address_2' => $data['address_2'],
    //         'address_3' => $data['address_3'],
    //         'tel' => $data['tel'],
    //         'email' => $data['email'],
    //         'password' => Hash::make($data['password']),
    //     ]);
    // }


    /**
     * ユーザー登録後の処理
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function registered(Request $request)
    {
        // 登録したら、そのユーザーのプロフィール・ページへ移動
        return redirect('users')->with('my_status', __('会員登録が完了しました'));
    }

}
