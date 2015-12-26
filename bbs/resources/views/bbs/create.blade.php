@extends('layouts.app')
@section('content')

<h4>新しいスレッドの投稿</h4>

@foreach($errors->all() as $message)
<div class="chip chip-error white-text">
    {{ $message }}
    <i class="material-icons">close</i>
</div>
@endforeach

{!! Form::open(['url' => 'bbs'], array('class' => 'form')) !!}

<div class="row">
    <div class="input-field col s12">
        {!! Form::label('title', 'タイトル') !!}
        {!! Form::text('title', null, ['class' => 'validate']) !!}
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">account_circle</i>
        {!! Form::label('user', '投稿者') !!}
        {!! Form::text('user', null, ['class' => 'validate']) !!}
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">mode_edit</i>
        {!! Form::label('description', '本文') !!}
        {!! Form::text('description', null, ['class' => 'validate']) !!}
    </div>
</div>

{!! Form::submit('投稿する', ['class' => 'btn waves-effect waves-light']) !!}

{!! Form::close() !!}

@stop
