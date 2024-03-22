@extends('layouts.main')

@section('content')
    <form action='{{ route('posts.store') }}' method="POST" class="w-25 mx-auto" enctype="multipart/form-data">
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
        <div class="form-group mb-3 d-flex gap-3">
            <label class="w-50" for="image">Upload Image</label>
            <input type="file" class="form-control-file w-100" id="image" name="image">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
