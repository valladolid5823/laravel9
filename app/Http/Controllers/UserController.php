<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        return 'Hello from User Controller';
    }

    public function login() {

        if (View::exists('user.login')) {
            return view('user.login');
        } else {
            return abort(404);
        }

    }

    public function register() {
        return view('user.register');
    }

    // Passing data to user.blade.php
    public function show($id) {

        $data = [
            'id' => $id,
            'name' => 'Juan',
            'age' => '22',
            'email' => 'email@email.com'
        ];

        return view('user', $data);
    }
}
