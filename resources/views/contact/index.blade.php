@extends('layouts.app')

@section('content')

@section('breadcrumbs', Breadcrumbs::render('contact'))

{{-- 本体 --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-8 mt-5">
            <h3 class="text-center mb-5">お問い合わせ内容をご入力ください</h3>

            {{ Form::open(['route' => 'contact.confirm']) }}
            <div class="container">
                <div class="row form-group">
                    {!! Form::label('name', 'お名前:', ['class' => 'col']) !!}
                    <div class="col-12">
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="row form-group">
                    {!! Form::label('email', 'メールアドレス :', ['class' => 'col']) !!}
                    <div class="col-12">
                        {!! Form::email('email', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="row form-group">
                    {!! Form::label('email', 'メールアドレス確認用 :', ['class' => 'col']) !!}
                    <div class="col-12">
                        {!! Form::email('email', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="row form-group">
                    {!! Form::label('body', '内容 :', ['class' => 'col']) !!}
                    <div class="col-12">
                        {!! Form::textarea('body', null, ['class' => 'form-control', 'rows' => '6']) !!}
                    </div>
                </div>
            </div>

            <div class="row  justify-content-center">
                <div class="col-sm-12 mt-3">
                    {!! Form::submit('お問い合わせ内容を確認する', ['class' => 'btn btn-outline-primary btn-block']) !!}
                </div>
            </div>

            {{ Form::close() }}

        </div>
    </div>
</div>

</div>
</div>


@endsection
