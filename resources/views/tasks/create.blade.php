@extends('layouts.app')

@section('content')

    <h1>タスク作成ページ</h1>

    <div class="row">
        <div class="col-6">
            <!--フォームの開始<form>-->
            <!--第一引数はモデルのインスタンス、第二引数はformタグのアクション属性の設定-->
            {!! Form::model($task, ['route' => 'tasks.store']) !!}
        
                <div class="form-group">
                    <!--第一引数にカラム名、第二引数にラベル名※<label>
                    {!! Form::label('content', 'タスク:') !!}
                    <!--第一引数にカラム名、第二引数は初期値、第三引数はタグの属性※<<input type="text"-->
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
                
                <!--第一引数に名称、第二引数にタグの属性-->
                {!! Form::submit('作成', ['class' => 'btn btn-primary']) !!}
            
            <!--フォームの終了</form>-->
            {!! Form::close() !!}
        </div>
    </div>

@endsection