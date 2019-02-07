@extends('layouts.backend')

@section('title', 'All Posts')

@section('content')

    <h2>All Posts</h2>
    <hr>

    @include('includes.message-status')

    @if( $posts->isEmpty() )
        <p>There is no posts.</p>
    @else
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Photo</th>
                <th scope="col">User</th>
                <th scope="col">Category</th>
                <th scope="col">Title</th>
                <th scope="col">body</th>
                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td><img height="50" src="{{ $post->photo ? $post->photo->file : 'https://via.placeholder.com/250?text=Post' }}" alt=""></td>
                    <td>{{ $post->user->name }}</td>
                    <td>{{ $post->category_id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->body }}</td>
                    <td>{{ $post->created_at->diffForHumans() }}</td>
                    <td>{{ $post->updated_at->diffForHumans() }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif

@stop
