<?php

namespace App\Http\Controllers;
use App\Models\PracticeSection;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        $practiceSections = PracticeSection::all();
        return view('pages.main', ['practiceSections' => $practiceSections]);
    }
}
