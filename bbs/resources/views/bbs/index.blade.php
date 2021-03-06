@extends('layouts.app')
@section('content')

@if(Session::has('message'))
<div class="chip chip-info white-text">
    {{ Session::get('message') }}
    <i class="material-icons">close</i>
</div>
@endif

<h4>スレッド一覧</h4>

{!! link_to('bbs/create', 'スレッド新規作成', ['class' => 'waves-effect waves-light btn']) !!}

<table class="highlight bordered">
    <thead>
        <tr>
            <th data-field="datetime">投稿日</th>
            <th data-field="thread">スレッド名</th>
            <th data-field="commentNum">投稿数</th>
            <th data-field="user">投稿者</th>
        </tr>
    </thead>
    <tbody>
    @foreach($threads as $thread)
        <tr>
            <td>{{ date("Y年 m月 d日",strtotime($thread->created_at)) }}</td>
            <td>{!! link_to("bbs/show/{$thread->id}", $thread->title) !!}</td>
            <td>{{ $thread->comment_count }}</td>
            <td>{{ $thread->user }}</td>
        </tr>
    @endforeach
    </tbody>
</table>

{!! $threads->render() !!}

@stop
