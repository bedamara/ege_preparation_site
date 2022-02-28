@extends('layout')

@section('title')
    Добавить секцию
@endsection

@section('content')
<form action="{{ route('user-signin') }}" class="form" method="POST">
    @csrf
    <h1 class="form__heading">Добавление новой секции</h1>

    <label class="form__label">
        <input type="text" name="title" class="form__text" value="{{ $name }}">
        <span class="form__description">Название</span>
    </label>

    <label class="form__label">
        <textarea name="description" cols="30" rows="10" class="form__text">{{ $text }}</textarea>
        <span class="form__description">Описание</span>
    </label>

    <div class="form__buttons-wrapper">
        <button type="submit" class="form__button form__button--submit">Добавить</button>
        <button type="reset" class="form__button form__button--reset">Сбросить</button>
    </div>
</form>
@endsection