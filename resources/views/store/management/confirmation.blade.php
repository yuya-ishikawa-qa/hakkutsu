@extends('layouts.app')

@section('content')

<div class="p-3 mb-2 bg-warning text-dark">出店依頼はこちら</div>
<br>
{{ Auth::user()->name }}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-8">
                <p class="pl-2">この内容でよろしければ「送信する」ボタンを押してください。</p>
            {!! Form::open(['url' => 'stores/management/store', 'method' => 'post']) !!}    
            <div class="form-group">
                    {!! Form::label('store_name', '【店名】: '. $data["store_name"]) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('postal', '【店舗郵便番号】 '. $data["postal"]) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('address', '【所在地】: '. $data["address"]) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('tel', '【電話番号】 '. $data["tel"]) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('mail', '【メールアドレス】: '. $data["mail"]) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('path', '【店舗イメージ】 '. $data["path"]) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('business_hours', '【営業時間】: '. $data["business_hours"]) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('description', '【店舗の説明】: '. $data["description"]) !!}
                </div>
        </div>            
    </div>
        <div class="container">
                <div class="row  justify-content-center">
                    <div class="col-sm-6 mt-3">
                        {!! Form::submit('送信する', ['name' => 'action', 'class' => 'btn btn-warning btn-block']) !!}
                    </div>
                </div>
    {!! Form::close() !!}
    <a href="/store/management/create" >
        <div class="row  justify-content-center">
            <div class="col-sm-6 mt-3">

            <button type="submit" class="btn btn-secondary btn-block">
            修正する
            </button>
            </div>    
        </div>
            
     </a>
</div>




<!-- 
店舗コード：（店のID表示）<br>


<div class="d-flex"> -->

    <!-- <a href="/store/management/createstore" >
        <button type="submit" class="btn btn-warning col-md-6">
        戻る
        </button>
    </a>


    <br>
    <br>

    <a href="/store/management/request" >
        <button type="submit" class="btn btn-warning col-md-6">
        申請する
        </button>
    </a>    

</div> -->

@endsection