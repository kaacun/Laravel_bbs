@extends('layouts.app')
@section('content')

<div class="col-xs-8 col-xs-offset-2">

    @foreach($threads as $thread)

    <h2>{!! link_to("/bbc/{$thread->id}", $thread->title) !!}</h2>
    <small>投稿日：{{ date("Y年 m月 d日",strtotime($thread->created_at)) }}</small>
    <small>投稿者：{{ $thread->user }}</small>
    <p>{{ $thread->description }}</p>
    <p>コメント数：{{ $thread->comment_count }}</p>
    <hr />
    @endforeach

</div>

@stop
