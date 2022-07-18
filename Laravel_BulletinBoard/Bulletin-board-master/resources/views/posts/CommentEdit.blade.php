@extends('layouts.login')

@section('title', '掲示板詳細画面')
@section('content')
    <h2>コメント内容</h2>

      {!! Form::open(['url' => 'post/commentEdit']) !!}


          <div class='commentEditForm'>
            <div>{!! Form::textarea('upComment', null, ['class' => 'input']) !!}</div>
          </div>

          {!! Form::close() !!}
          <div class="submit-btn">
              <button type="submit" class="btn btn-button-close" href="/post/detail">更新</button>
          </div>
          <div Class="Danger-btn">
            <button><a class="btn-danger" href="post/delete" onclick="return confirm('こちらの投稿を削除してもよろしいでしょうか？')"><div class="trash-image">削除</div></a></button>
          </div>
@endsection
