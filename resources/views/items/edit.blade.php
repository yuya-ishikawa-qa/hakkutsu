@extends('layouts.app')

@section('content')

<div class="container">
  <h3 class="p-3 mb-2 bg-warning text-dark text-center">商品編集画面</h3>    
  <div class="text-right">
    ユーザー名:{{ Auth::user()->name }}<br>
    店名:{{ $store->store_name}}<br>
    </div>
    <div class = "row"> 
        <div class = "col-sm-6 offset-sm-3">
            {!! Form::open(['route' => ['items.update',$store,$item], 'method' => 'put','enctype'=>'multipart/form-data']) !!}
                <div class = "form-group">
                    {!! Form::label('item_name', '【商品名】') !!}
                    {!! Form::text('item_name', $item->item_name, ['class' => 'form-control', 'placeholder' => '例）長良ぶどう詰め合わせ(1Kg)']) !!}
                </div>
                @if (count($errors) > 0)
                @foreach ($errors->get('item_name') as $error)
                <div class="text-danger">{{ $error }}</div>
                @endforeach
                @endif

                <div class = "form-group">
                    {!! Form::label('status', '【販売状況】') !!}</br>
                    {!! Form::select('status', ['○販売中です' => '○販売中です', '△商品入荷待ちです' => '△商品入荷待ちです', '×販売休止中です' => '×販売休止中です'], $item->status, ['placeholder' => '選択してください']) !!}
                </div>
                @if (count($errors) > 0)
                @foreach ($errors->get('status') as $error)
                <div class="text-danger">{{ $error }}</div>
                @endforeach
                @endif

                <div class = "form-group">
                    {!! Form::label('stock', '【在庫】') !!}</br>
                    {!! Form::select('stock', ['○在庫あり' => '○在庫あり','△残り僅か' => '△残り僅か','×なし' => '×なし' ], $item->stock, ['placeholder' => '選択してください']) !!}
                </div>
                @if (count($errors) > 0)
                @foreach ($errors->get('stock') as $error)
                <div class="text-danger">{{ $error }}</div>
                @endforeach
                @endif

                <div class = "form-group">
                    {!! Form::label('price', '【販売価格（税込）】') !!}
                    {!! Form::text('price', $item->price, ['class' => 'form-control', 'placeholder' => '例）2000 (半角数字のみ)']) !!}
                    <span>円</span>
                </div>
                @if (count($errors) > 0)
                @foreach ($errors->get('price') as $error)
                <div class="text-danger">{{ $error }}</div>
                @endforeach
                @endif

                <div class = 'form-group'>
                    {!! Form::label('image_path','【商品画像】') !!}
                    <div class="col-md-7">
                    <img class="img-fluid" src="{{ Storage::disk('s3')->url($item->image_path)}}" alt="">
                    </div>
                {!! Form::file('image_path') !!}
                </div>
                @if (count($errors) > 0)
                @foreach ($errors->get('image_path') as $error)
                <div class="text-danger">{{ $error }}</div>
                @endforeach
                @endif

                <div class = "form-group">
                    {!! Form::label('description', '【商品の説明文】') !!}
                    {!! Form::textarea('description', $item->description, ['class' => 'form-control', 'placeholder' => '例）産地直送の長良ぶどう詰め合わせセット。']) !!}
                </div>
                @if (count($errors) > 0)
                @foreach ($errors->get('description') as $error)
                <div class="text-danger">{{ $error }}</div>
                @endforeach
                @endif

                <div class = "form-group">
                    {!! Form::label('tax_id', '【消費税率】') !!}</br>
                    {{ Form::select('tax_id', $taxes, $item->tax_id, ['class' => 'form', 'id' => 'tax_id']) }}
                    <!-- {!! Form::select('tax_id', ['1' => '8%', '2' => '10%'], old('tax_id'), ['placeholder' => '選択してください']) !!} -->
                </div>
                @if (count($errors) > 0)
                @foreach ($errors->get('tax_id') as $error)
                <div class="text-danger">{{ $error }}</div>
                @endforeach
                @endif
                
                {!! Form::submit('商品を変更する', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>

@endsection('content')