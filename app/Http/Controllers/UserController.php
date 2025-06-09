<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Logic to retrieve and display user data
        return view('users.index');
    }

    public function show($id)
    {
        // Logic to retrieve and display a specific user
        $kost
    }

    public function create()
    {
        // Logic to show the user creation form
        return view('users.create');
    }

}
