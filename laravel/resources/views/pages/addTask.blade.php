@extends('layout')

@section('title')
    Добавить вопрос
@endsection

@section('content')
<form action="{{ route('practice-add-task', ['name' => $name]) }}" class="form" method="POST">
    @csrf
    <h1 class="form__heading">Добавление нового вопроса</h1>

    <label class="form__label">
        <input type="text" name="title" class="form__text" value="{{ ($title) ? ($title) : ("") }}">
        <span class="form__description">Название</span>
    </label>

    <label class="form__label">
        <textarea name="text" cols="30" rows="10" class="form__text">{{ ($text) ? ($text) : ("") }}</textarea>
        <span class="form__description">Вопрос</span>
    </label>
    
    <label class="form__label">
        <input type="text" name="answer" class="form__text" value="{{ ($answer) ? $answer : ("") }}">
        <span class="form__description">Ответ</span>
    </label>

    <div class="form__buttons-wrapper">
        <button type="submit" class="form__button form__button--submit">Добавить</button>
        <button type="reset" class="form__button form__button--reset">Сбросить</button>
    </div>
</form>
@endsection