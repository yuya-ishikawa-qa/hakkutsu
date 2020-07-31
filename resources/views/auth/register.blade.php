@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3 class="p-3 mb-2 bg-warning text-dark text-center">会員登録</h3>
            <div class="card">
                <div class="card-body">

                    @csrf

                    <div class="row mt-5 mb-5">
                        <div class="col-sm-6 offset-sm-3">

                            {!! Form::open(['route' => 'signup']) !!}
                            <div class="form-group">
                                {!! Form::label('name', 'お名前') !!}
                                {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('name_kana', 'お名前（フリガナ）') !!}
                                {!! Form::text('name_kana', old('name_kana'), ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('postal_code', '郵便番号') !!}
                                {!! Form::text('postal_code', old('postal_code'), ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('address_1', '住所１') !!}
                                {!! Form::text('address_1', old('address_1'), ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('address_2', '住所２') !!}
                                {!! Form::text('address_2', old('address_2'), ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('address_3', '住所３') !!}
                                {!! Form::text('address_3', old('address_3'), ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('tel', '電話番号') !!}
                                {!! Form::text('tel', old('tel'), ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('email', 'メールアドレス') !!}
                                {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('email_confirmation', 'メールアドレス（確認）') !!}
                                {!! Form::email('email_confirmation', old('email_confirmation'), ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('password', 'パスワード') !!}
                                {!! Form::password('password', ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('password_confirmation', 'パスワード（確認）') !!}
                                {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                            </div>


                            {!! Form::submit('登録する', ['class' => 'btn btn-info mt-5 p-3 btn-lg btn-block']) !!}
                            {!! Form::close() !!}


                        </div>
                    </div>



                    <!-- <div class="form-group row">
                            <label for="address_1" class="col-md-4 col-form-label text-md-right">住所</label>
                            <select class="form-control col-md-4 col-form-label text-md-right" id="exampleFormControlSelect1" value="{{ old('address_1') }}">
                                <option>都道府県を選択</option>
                                <option>北海道</option>
                                <option>青森県</option>
                                <option>岩手県</option>
                                <option>宮城県</option>
                                <option>秋田県</option>
                                <option>山形県</option>
                                <option>福島県</option>
                                <option>茨城県</option>
                                <option>栃木県</option>
                                <option>群馬県</option>
                                <option>埼玉県</option>
                                <option>千葉県</option>
                                <option>東京都</option>
                                <option>神奈川県</option>
                                <option>新潟県</option>
                                <option>富山県</option>
                                <option>石川県</option>
                                <option>福井県</option>
                                <option>山梨県</option>
                                <option>長野県</option>
                                <option>岐阜県</option>
                                <option>静岡県</option>
                                <option>愛知県</option>
                                <option>三重県</option>
                                <option>滋賀県</option>
                                <option>京都府</option>
                                <option>大阪府</option>
                                <option>兵庫県</option>
                                <option>奈良県</option>
                                <option>和歌山県</option>
                                <option>鳥取県</option>
                                <option>島根県</option>
                                <option>岡山県</option>
                                <option>広島県</option>
                                <option>山口県</option>
                                <option>徳島県</option>
                                <option>香川県</option>
                                <option>愛媛県</option>
                                <option>高知県</option>
                                <option>福岡県</option>
                                <option>佐賀県</option>
                                <option>長崎県</option>
                                <option>熊本県</option>
                                <option>大分県</option>
                                <option>宮崎県</option>
                                <option>鹿児島県</option>
                                <option>沖縄県</option>
                            </select>


                        </div> -->



                    <!-- <div class="form-group row">
                            <label for="sex" class="col-md-4 col-form-label text-md-right">{{ __('性別') }}</label>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" value="{{ old('sex') }}">
                                <label class="form-check-label" for="inlineRadio1">男性</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" value="{{ old('sex') }}">
                                <label class="form-check-label" for="inlineRadio2">女性</label>
                            </div>

                            @error('sex')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div> -->

                    <!-- <div class="form-group row">
                            <label for="age" class="col-md-4 col-form-label text-md-right">年齢</label>
                            <select class="form-control col-md-4 col-form-label text-md-right" id="exampleFormControlSelect1" value="{{ old('age') }}">
                                <option>選択してください</option>
                                <option>〜19</option>
                                <option>20〜29</option>
                                <option>30〜39</option>
                                <option>40〜49</option>
                                <option>50〜59</option>
                                <option>60〜</option>
                            </select>

                            @error('age')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div> -->

                </div>
            </div>
        </div>
    </div>
</div>
@endsection