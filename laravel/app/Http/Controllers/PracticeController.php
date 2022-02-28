<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\PracticeTask;
use App\Models\PracticeSection;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PracticeController extends Controller
{
    public function showPart($name) {
        $data = PracticeTask::where('section_id', $name)->get();
        $title = 'Практические задания';

        if (Auth::check()) {
            if (Auth::user() -> id === 1) {
                return view('pages.list', ['title' => $title, 'data' => $data, 'name' => $name, 'admin' => true]);
            }
        }

        return view('pages.list', ['title' => $title, 'data' => $data, 'name' => $name]);
    }

    public function showTask($name, $id) {
        $data = PracticeTask::find($id);
        $title = $data -> title;

        return view('pages.task', ['title' => $title, 'element' => $data, 'name' => $name, 'admin' => false]);
    }

    public function showAddTask($name) {
        if (Auth::check()) {
            $user_id = Auth::user() -> id;
            $user_role = User::find($user_id) -> user_role_id;

            if ($user_role === 1) {
                return view('pages.addTask', ['title' => '', 'text' => '', 'answer' => '', 'name' => $name]);
            }
        }

        return redirect() -> route('index');
    }

    public function showEditTask($name, $id) {
        $data = PracticeTask::find($id);
        $title = $data -> title;

        if (Auth::check()) {
            $user_id = Auth::user() -> id;
            $user_role = User::find($user_id) -> user_role_id;

            if ($user_role === 1) {
                return view('pages.addTask', []);
            }
        }
    }

    public function showAddSection($name, $id) {
        if (Auth::check()) {
            $user_id = Auth::user() -> id;
            $user_role = User::find($user_id) -> user_role_id;

            if ($user_role === 1) {
                return view('pages.addSection', []);
            }
        }
    }

    public function showEditSection($name, $id) {
        $data = PracticeSection::find($id);
        $title = $data -> title;

        if (Auth::check()) {
            $user_id = Auth::user() -> id;
            $user_role = User::find($user_id) -> user_role_id;

            if ($user_role === 1) {
                return view('pages.addSection', []);
            }
        }
    }

    public function addTask(Request $request, $name) {
        $request -> validate([
            'title' => 'required',
            'text' => 'required',
            'answer' => 'required'
        ]);

        $newQuestion = new PracticeTask();
        $newQuestion -> title = $request -> input('title');
        $newQuestion -> text = $request -> input('text');
        $newQuestion -> answer = $request -> input('answer');
        $newQuestion -> section_id = intval($name);
        $newQuestion -> creation_date = Carbon::now();
        $newQuestion -> save();

        return redirect() -> route('practice-part', ['name' => $name]);
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
