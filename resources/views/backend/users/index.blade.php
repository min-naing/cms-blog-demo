@extends('layouts.backend')

@section('title', 'All Users')

@section('content')

    <h2>All Users</h2>
    <hr>

    @include('includes.message-status')

    @if($users->isEmpty())
        <p>There is no users.</p>
    @else
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Photo</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Status</th>
                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>
                        <img style="height: 50px; border-radius: 100%;" src="{{ $user->photo ? $user->photo->file : 'https://via.placeholder.com/250?text=user' }}" alt="">
                    </td>
                    <td><a href="{{ route('admin.users.edit', $user->id) }}">{{ $user->name }}</a></td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role->name }}</td>
                    <td>{{ $user->is_active == 1 ? 'Active' : 'Not Active' }}</td>
                    <td>{{ $user->created_at->diffForHumans() }}</td>
                    <td>{{ $user->updated_at->diffForHumans() }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif

@stop
