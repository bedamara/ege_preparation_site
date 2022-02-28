<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\PracticeSection;


class MainController extends Controller
{
    public function index() {
        $practiceSections = PracticeSection::all();

        if (Auth::check()) {
            $user_id = Auth::user() -> id;
            $user_role = User::find($user_id) -> user_role_id;

            if ($user_role === 1) {
                return view('pages.main', ['practiceSections' => $practiceSections, 'admin' => true]);
            }
        }

        return view('pages.main', ['practiceSections' => $practiceSections, 'admin' => false]);
    }
}
