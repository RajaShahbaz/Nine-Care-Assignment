<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('orders')->get();
        return response()->json($users);
    }
    public function filterUsers()
    {
        $users = User::age(25)
            ->location('New York')
            ->gender('female')
            ->phone('111-111-1111')
            ->get();

        return $users;
    }
}
