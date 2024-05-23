<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        return 'Hello from User Controller';
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
