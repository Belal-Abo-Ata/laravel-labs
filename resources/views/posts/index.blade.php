@extends('layouts.main')

@section('title', 'Home')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Body</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->title }}</td>
                    <td>{{ substr($post->body, 0, 60) }}...</td>
                    <td>
                        <a class="btn btn-primary"
                            href="{{ route('posts.edit', ['id' => $post->id, 'title' => $post->title, 'body' => $post->body]) }}">Edit</a>
                        <a class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $posts->links() }}

@endsection
