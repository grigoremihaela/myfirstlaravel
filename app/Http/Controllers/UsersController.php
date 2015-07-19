<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;

class UsersController extends Controller
{

    public function index()
    {
    	$name = 'All users:';
        $users = User::get();
        return view('users.index', compact('users','name'));
    }

    public function show($id)
    {
    	$user = User::whereId($id)->first();
    	return view('users.show', compact('user'));
    }

    public function edit($id)
    {
        $user = User::whereId($id)->first();
        return view('users.edit', compact('user'));
    }
    
}