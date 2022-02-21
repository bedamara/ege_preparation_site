<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showSignup() {
        return view('pages.signup');
    }

    public function showSignin() {
        return view('pages.signin');
    }
}
