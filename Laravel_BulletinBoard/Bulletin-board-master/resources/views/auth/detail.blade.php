@extends('layouts.login')

@section('title', '掲示板詳細画面')
@section('content')
    <!--<h1>掲示板詳細画面</h1>-->
    @foreach ($userPost_ids as $userPost_ids)
      <div class="post-area">
        <a class="user-name">{{$userPost_ids->user->username}}</a>
        <a class="user-title">{{$userPost_ids->title}}</a>
        <a class="user-post">{{$userPost_ids->post}}</a>
        <a class="day-time">{{$userPost_ids->created_at}}</a>
        <p class="edit-btn"><a href="/posts/{{$userPost_ids->id}}/edit">編集</a></p>
      </div>

        <div class="commentArea" >
          <!--＄SubCategorysの中のリレーション先を指示$commentで特定-->
          @foreach ($SubCategorys->PostComment as $comment)
          <a class="comment">{{$comment->comment}}</a>
          {{$comment->user->username}}
          <p class="CommentEdit-btn"><a href="/posts/{{$comment->id}}/CommentEdit">編集</a></p>
          @endforeach



          <div class="form-group">
              <p class="comment-form">コメント</p>
              {!! Form::open(['url' => 'comment/create']) !!}
              {!! Form::hidden('id', $userPost_ids->id) !!}
                <div>{!! Form::textarea('comment', null,['class' => 'input', 'id' => 'comment', 'placeholder'=> 'こちらからコメントできます。', 'rows' => 4, 'cols'=> 20]) !!}</div>
                <span class="Form-button">{{ Form::submit('コメント')}}</span>
              {!! Form::close() !!}
            </div>
          <p class="top"><a href="/top">戻る</a></p>
        </div>
    @endforeach

@endsection
