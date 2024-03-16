@extends('layouts.main')

@section('content')
    <form action='{{ route('posts.store') }}' method="POST" class="w-25 mx-auto">
        @csrf
        <div class="mb-3">
            <label for="userName" class="form-label">Title</label>
            <input type="text" class="form-control" id="userName" name='title'>
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <textarea class="form-control" id="body" name='body'>
            </textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
