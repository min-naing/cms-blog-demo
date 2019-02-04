@extends('layouts.backend')

@section('title', 'Edit User')

@section('content')

    <h1>Edit User</h1>
    <hr>

    <div class="row">

        <div class="col-sm-3">
            <img src="{{ $user->photo ? $user->photo->file : 'https://via.placeholder.com/250?text=user' }}" alt="" class="img-responsive img-circle">
        </div>

        <div class="col-sm-9">

            @include('includes.form-errors')

            {!! Form::model($user, ['route' => ['admin.users.update', $user->id], 'method' => 'patch', 'files' => true]) !!}

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
                            {!! Form::select('is_active', ['1' => 'Active', '0' => 'Not Active'], null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('photo_id', 'Photo') !!}
                            {!! Form::file('photo_id') !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('password', 'Password') !!}
                            {!! Form::password('password', ['class' => 'form-control']) !!}
                        </div>

                        {!! Form::submit('Update User', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}

        </div>
    </div>

@stop