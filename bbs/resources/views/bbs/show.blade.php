@extends('layouts.app')
@section('content')

<div class="col-xs-8 col-xs-offset-2">
    <h2>{{ $thread->title}}</h2>
    <small>投稿日：{{ date("Y年 m月 d日",strtotime($thread->created_at)) }}</small>
    <small>投稿者：{{ $thread->user }}</small>
    <p>{{ $thread->description }}</p>

    <hr/>

    <h3>コメント一覧</h3>
    @foreach($thread->comments as $comment)
    <h4>{{ $comment->user }}</h4>
    <p>{{ $comment->comment }}</p>
    @endforeach

    <h3>コメント投稿</h3>
    @if(Session::has('message'))
    <div class="bg-info">
        <p>{{ Session::get('message') }}</p>
    </div>
    @endif

    @foreach($errors->all() as $message)
    <p class="bg-danger">{{ $message }}</p>
    @endforeach

    {!! Form::open(['url' => 'comments'], array('class' => 'form')) !!}

    <div class="form-group">
      {!! Form::label('user', '投稿者') !!}
      {!! Form::text('user', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('comment', '本文') !!}
      {!! Form::text('comment', null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::hidden('thread_id', $thread->id) !!}

    <div class="form-group">
      {!! Form::submit('投稿する', ['class' => 'btn btn-primary form-control']) !!}
    </div>

    {!! Form::close() !!}

</div>

@stop
