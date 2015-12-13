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

</div>

@stop
