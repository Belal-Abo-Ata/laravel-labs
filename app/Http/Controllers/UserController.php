<?php

namespace App\Http\Controllers;

use App\Models\User;
// use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $users = User::withCount('posts')->paginate();
        // dd($users);
        return view("users.index", ['users' => $users]);
    }
}
