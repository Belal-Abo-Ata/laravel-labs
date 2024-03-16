@extends('layouts.main')

@section('content')
    <form method="POST" action={{ route('posts.update', ['id' => $post->id]) }} class="w-25 mx-auto">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="userName" class="form-label">Title</label>
            <input type="text" class="form-control" id="userName" name='title' value={{ old('title', $post->title) }}>
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <textarea class="form-control" id="body" name='body'>
                {{ old('body', $post->body) }}
            </textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
