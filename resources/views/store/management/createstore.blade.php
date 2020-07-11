@extends('layouts.app')

@section('content')


    

    <div class="text-center">
        <h1><i class="fas fa-store"></i>店舗登録</h1>
    </div>
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            {!! Form::open([]) !!}
                <div class="form-group">
                    {!! Form::label('store_name', '【店名】') !!}
                    {!! Form::text('store_name', old('store_name'), ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('postal', '【店舗郵便番号】') !!}
                    {!! Form::text('postal', old('postal'), ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('address', '【所在地】') !!}
                    {!! Form::text('address', old('address'), ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('tel', '【電話番号】') !!}
                    {!! Form::text('tel', old('tel'), ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('mail', '【メールアドレス】') !!}
                    {!! Form::text('mail', old('mail'), ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('image', '【店舗イメージ】') !!}
                    {!! Form::text('image', old('image'), ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('business_hours', '【営業時間】') !!}
                    {!! Form::textarea('business_hours', old('business_hours'), ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('description', '【店舗の説明】') !!}
                    {!! Form::textarea('description', old('description'),  ['rows' => 5,'cols' => 60]) !!}
                </div>
                {!! Form::submit('内容を確認する', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}
            <a href="/store/management/confirmation" >
                内容を確認する（作業用）
            </a>
        </div>
    </div>

    <div class="container mt-4">
        <div class="border p-4">
            <h1 class="h5 mb-4">
                投稿の新規作成
            </h1>
        
            <form method="POST" action="">
                {{csrf_field()}}
                <fieldset class="mb4">
                    <div class=form-group">
                    <label for="titile">
                        タイトル
                    </label>
                    <input 
                        id="title"
                        name="title"
                        class="form-control"
                        value="{{old('title')}}"
                        type="text" 
                        >
                        <div class="text-danger">
                            {{$errors->first('title')}}
                        </div>
                        
                    </div>
                    <div>
                        <label for="body">
                        本文
                        </label>
                        <textarea
                            id="body"
                            name="body"
                            class="form-control"
                            value={{old('title')}}
                            raws="4"
                        >{{old('body')}}</textarea>
                        <div class="text-danger">
                            {{$errors->first('body')}}
                        </div>
                    </div>
                    <div class="mt-5">
                        <a class="btn btn-secondary" href="">
                            キャンセル
                        </a>
                        
                        <button type="submit" class="btn btn-primary">
                            投稿する
                        </button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection('content')



