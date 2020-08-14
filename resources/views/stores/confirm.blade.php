@extends('layouts.app')

@section('content')


<div class="p-3 mb-2 bg-warning text-dark">出店依頼はこちら</div>
<br>

<div class="text-right">
{{ Auth::user()->name }}
</div>

<div class="container">
    <div class = "row justify-content-center">
        <div class = "col-12 col-sm-8">
                <p class = "pl-2">この内容でよろしければ「送信する」ボタンを押してください。</p>
            {!! Form::open(['route' => 'stores.store', 'method' => 'post']) !!}
            <div class = "form-group">
                    {!! Form::label('store_name', '【店名】: '. $post_data["store_name"]) !!}
                    <input type="hidden" value="{{$post_data["store_name"]}}">
                </div>
                <div class = "form-group">
                    {!! Form::label('postal', '【店舗郵便番号】 '. $post_data["postal"]) !!}
                </div>
                <div class = "form-group">
                    {!! Form::label('address', '【所在地】: '. $post_data["address"]) !!}
                </div>
                <div class = "form-group">
                    {!! Form::label('tel', '【電話番号】 '. $post_data["tel"]) !!}
                </div>
                <div class = "form-group">
                    {!! Form::label('mail', '【メールアドレス】: '. $post_data["mail"]) !!}
                </div>
                <div class = "form-group">
                     <p>【画像】：<img src = "/{{ $data['read_temp_path'] }}" width="450px"></p>
                </div>
                <div class = "form-group">
                    {!! Form::label('business_hours', '【営業時間】: '. $post_data["business_hours"]) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('description', '【店舗の説明】: '. $post_data["description"]) !!}
                </div>
               </div>

        <div class = "container">
                <div class="row  justify-content-center">
                    <div class = "col-sm-6 mt-3">
                        {!! Form::submit('送信する', ['name' => 'action', 'class' => 'btn btn-warning btn-block']) !!}
                    </div>
                </div>
    {!! Form::close() !!}
    <a href="/stores/create" >
        <div class="row  justify-content-center">
            <div class="col-sm-6 mt-3">
                <button type="submit" class="btn btn-secondary btn-block">
                    修正する
                </button>
            </div>
        </div>
     </a>
</div>

@endsection