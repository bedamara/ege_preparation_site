<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Role;
use Hash;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function showSignup() {
        return view('pages.signup');
    }

    public function showSignin() {
        return view('pages.signin');
    }

    public function signup(Request $request) {
        $validated = Validator::make($request -> all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'password_confirmation' => 'required|same:password'
        ]);

        $newUser = new User();
        $newUser -> name = $request -> input('name');
        $newUser -> email = $request -> input('email');
        $newUser -> password = Hash::make($request -> input('password'));
        $newUser -> last_login =Carbon::now();
        $newUser -> save();

        return redirect() -> route('user-signin');
    }

    public function signin(Request $request) {
        $request -> validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request -> only('email', 'password');

        if(Auth::attempt($credentials)) {
            return redirect('/') -> withSucces('Вы успешно вошли');
        }

        return redirect() -> route('user-signin');
    }

    public function signout() {
        Auth::logout();
        return view('pages.main');
    }
}
