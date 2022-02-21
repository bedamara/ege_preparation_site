<?php

namespace App\Http\Controllers;
use App\Models\PracticeTask;
use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function showPart($name) {
        $data = PracticeTask::where('section_id', $name)->get();
        $title = 'Практические задания';

        return view('pages.list', ['title' => $title, 'data' => $data, 'name' => $name]);
    }

    public function checkAnswer(Request $request,$name, $id) {
        $request -> validate([
            'answer' => 'required'
        ]);

        $data = PracticeTask::find($id);

        if ($request -> answer === $data -> answer) {
            dd('прально');
        } else {
            dd('непрально');
        }
    }
}
