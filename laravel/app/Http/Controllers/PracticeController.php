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

    public function showTask($name, $id) {
        $data = PracticeTask::find($id);
        $title = $data -> title;

        return view('pages.task', ['title' => $title, 'element' => $data, 'name' => $name]);
    }

    public function checkAnswer(Request $request,$name, $id) {
        $request -> validate([
            'answer' => 'required'
        ]);

        $data = PracticeTask::find($id);

        if ($request -> answer === $data -> answer) {
            return redirect() -> back() -> with('success', 'Задание решено верно!');
        } else {
            return redirect() -> back() -> with('error', 'Задание решено ошибочно =C');
        }
    }
}
