@extends('layouts.main')

@section('content')
    <form action='{{route('posts.store')}}' method="POST" class="w-25 mx-auto">
        @csrf
        <div class="mb-3">
            <label for="userName" class="form-label">User Name</label>
            <input type="text" class="form-control" id="userName" name='name'>
        </div>
        <div class="mb-3">
            </input>Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='email'>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
