@extends('layouts.backend')

@section('title', 'Create Post')

@section('content')

    <h2>Create Post</h2>
    <hr>

    @include('includes.form-errors')

    {!! Form::open(['action' => ['Admin\PostsController@store'], 'method' => 'post', 'files' => true]) !!}

        <div class="form-group">
            {!! Form::label('title', 'Title') !!}
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('category_id', 'Category') !!}
            {!! Form::select('category_id', ['' => 'Choose Categories...'] + $categories, null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('photo_id', 'Photo') !!}
            {!! Form::file('photo_id') !!}
        </div>

        <div class="form-group">
            {!! Form::label('body', 'Body') !!}
            {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
        </div>

        {!! Form::submit('Create Post', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

@stop