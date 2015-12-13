@extends('layouts.app')
@section('content')

<div class="col-xs-8 col-xs-offset-2">
    <h1>新しいスレッドの投稿</h1>
    @if(Session::has('message'))
    <div class="bg-info">
        <p>{{ Session::get('message') }}</p>
    </div>
    @endif

    @foreach($errors->all() as $message)
    <p class="bg-danger">{{ $message }}</p>
    @endforeach

    {!! Form::open(['url' => 'bbs'], array('class' => 'form')) !!}

    <div class="form-group">
        {!! Form::label('title', 'タイトル') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('user', '投稿者') !!}
      {!! Form::text('user', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('description', '本文') !!}
      {!! Form::text('description', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::submit('投稿する', ['class' => 'btn btn-primary form-control']) !!}
    </div>

    {!! Form::close() !!}
</div>

@stop
