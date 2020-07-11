
    
    <div class="center jumbotron bg-warning">
        <div class="text-center text-white">
            <h1>YouTubeまとめ ×　SNS</h1>
        </div>
    </div>

    <div class="text-center">
        <h3 class="text-left d-inline-block mt-5">新規ユーザー登録</h3>
    </div>
    
    <div class="row mt-5 mb-5">
        <div class="col-sm-6 offset-sm-3">
            {!! Form::open(['route'=>'welcome']) !!}
                <div class="form-group">
                    {!! Form::label('last_name','お名前') !!}
                    {!! Form::text('last_name',old('last_name'),['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('first_name','お名前') !!}
                    {!! Form::text('first_name',old('first_name'),['class'=>'form-control']) !!}
                </div>


                




                
                {!! Form::submit('新規登録',['class'=>'btn btn-primary mt-2']) !!}

            {!! Form::close() !!}
        </div>
    </div>


