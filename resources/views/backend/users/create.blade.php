@extends('layouts.backend')

@section('title', 'Create User')

@section('content')

    <h1>Create User</h1>
    <hr>

    <div class="row">
        <div class="col-8 m-auto">

            @include('includes.form-errors')

            {!! Form::open(['action' => ['Admin\UsersController@store'], 'method' => 'post', 'files' => true]) !!}

                        <div class="form-group">
                            {!! Form::label('name', 'Name') !!}
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('email', 'Email') !!}
                            {!! Form::email('email', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('role_id', 'Role') !!}
                            {!! Form::select('role_id', ['' => 'Choose Options'] + $roles, null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('is_active', 'Status') !!}
                            {!! Form::select('is_active', ['1' => 'Active', '0' => 'Not Active'], '0', ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('file', 'Photo') !!}
                            {!! Form::file('file') !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('password', 'Password') !!}
                            {!! Form::password('password', ['class' => 'form-control']) !!}
                        </div>

                        {!! Form::submit('Create User', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}

        </div>
    </div>

@stop