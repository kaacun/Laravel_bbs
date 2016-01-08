@extends('layouts.app')
@section('content')

@if(Session::has('message'))
<div class="chip chip-info white-text">
    {{ Session::get('message') }}
    <i class="material-icons">close</i>
</div>
@endif

@foreach($errors->all() as $message)
<div class="chip chip-error white-text">
    {{ $message }}
    <i class="material-icons">close</i>
</div>
@endforeach

<div class="card-panel">
    <p class="flow-text">{{ $thread->title}}</p>
    投稿者：{{ $thread->user }}
    <div class="right">
        投稿日：{{ date("Y年 m月 d日",strtotime($thread->created_at)) }}
    </div>
    <hr />
    <div class="card-content">
        <p>{{ $thread->description }}</p>
    </div>
</div>

{{--「N+1問題」についてググってみよう --}}
@foreach($thread->comments as $comment)
<div class="card-panel">
    投稿者：{{ $comment->user }}
    <div class="right">
        投稿日：{{ date("Y年 m月 d日",strtotime($comment->created_at)) }}
    </div>
    <hr />
    <div class="card-content">
        <p>{{ $comment->comment }}</p>
    </div>
</div>
@endforeach

{!! Form::open(['url' => 'comments'], array('class' => 'col s12')) !!}

<div class="row">
    <div class="input-field col s6">
        <i class="material-icons prefix">account_circle</i>
        {!! Form::label('user', '投稿者') !!}
        {!! Form::text('user', null, ['class' => 'validate']) !!}
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">mode_edit</i>
        {!! Form::label('comment', '本文') !!}
        {!! Form::text('comment', null, ['class' => 'validate']) !!}
    </div>
</div>

{!! Form::hidden('thread_id', $thread->id) !!}

{!! Form::submit('投稿する', ['class' => 'btn waves-effect waves-light']) !!}

{!! Form::close() !!}

@stop
