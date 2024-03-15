@extends('layouts.main')

@section('content')
    <form method="POST" action={{ route('posts.update', ['id' => $post->id]) }} class="w-25 mx-auto">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="userName" class="form-label">User Name</label>
            <input type="text" class="form-control" id="userName" value={{ $post->name }} name="name">
        </div>
        <div class="mb-3">
            </input>Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                value={{ $post->email }} name="email">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
