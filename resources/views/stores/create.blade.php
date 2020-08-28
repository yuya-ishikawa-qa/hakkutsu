@extends('layouts.app')

@section('content')

@section('breadcrumbs', Breadcrumbs::render('stores/create'))
<div class="container">
    <h3 class="p-3 mb-2 bg-warning text-dark text-center">店舗登録</h3>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6 offset-sm-3">
                    {!! Form::open(['route' => 'stores.confirm', 'method' => 'post','enctype'=>'multipart/form-data']) !!}
                    <div class="form-group">
                        {!! Form::label('store_name', '【店名】') !!}
                        {!! Form::text('store_name', old('store_name'), ['class' => 'form-control', 'placeholder' => '例）長良ぶどう屋']) !!}
                    </div>
                    @if (count($errors) > 0)
                    @foreach ($errors->get('store_name') as $error)
                    <div class="text-danger">{{ $error }}</div>
                    @endforeach
                    @endif

                    <div class="form-group">
                        {!! Form::label('postal', '【店舗郵便番号】') !!}
                        {!! Form::text('postal', old('postal'),  ['class' => 'form-control', 'placeholder' => '例）1234567 ハイフンなし']) !!}
                    </div>
                    @if (count($errors) > 0)
                    @foreach ($errors->get('postal') as $error)
                    <div class="text-danger">{{ $error }}</div>
                    @endforeach
                    @endif

                    <div class="form-group">
                        {!! Form::label('address', '【所在地】') !!}
                        {!! Form::text('address', old('address'), ['class' => 'form-control', 'placeholder' => '例）〇〇県〇〇市〇〇番地']) !!}
                    </div>
                    @if (count($errors) > 0)
                    @foreach ($errors->get('address') as $error)
                    <div class="text-danger">{{ $error }}</div>
                    @endforeach
                    @endif

                    <div class="form-group">
                        {!! Form::label('tel', '【電話番号】') !!}
                        {!! Form::text('tel', old('tel'), ['class' => 'form-control', 'placeholder' => '例）09012345678 ハイフンなし']) !!}
                    </div>
                    @if (count($errors) > 0)
                    @foreach ($errors->get('tel') as $error)
                    <div class="text-danger">{{ $error }}</div>
                    @endforeach
                    @endif

                    <div class="form-group">
                        {!! Form::label('mail', '【メールアドレス】') !!}
                        {!! Form::text('mail', old('mail'), ['class' => 'form-control', 'placeholder' => '例）hakkutsu@example.com']) !!}
                    </div>
                    @if (count($errors) > 0)
                    @foreach ($errors->get('mail') as $error)
                    <div class="text-danger">{{ $error }}</div>
                    @endforeach
                    @endif

                    <div class='form-group'>
                        {!! Form::label('image_path','【店舗イメージ】') !!}
                        {!! Form::file('image_path') !!}
                    </div>
                    @if (count($errors) > 0)
                    @foreach ($errors->get('image_path') as $error)
                    <div class="text-danger">{{ $error }}</div>
                    @endforeach
                    @endif


                    <div class="form-group">
                        {!! Form::label('description', '【店舗の説明】') !!}
                        {!! Form::textarea('description', old('description'), ['class' => 'form-control', 'placeholder' => '例）岐阜の長良ぶどうを産地直送でお送り致します。']) !!}
                    </div>
                    @if (count($errors) > 0)
                    @foreach ($errors->get('description') as $error)
                    <div class="text-danger">{{ $error }}</div>
                    @endforeach
                    @endif

                    {!! Form::submit('内容を確認する', ['class' => 'btn btn-primary mt-5 mb-3 p-3 btn-lg btn-block']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection('content')