@extends('layout')

@section('title')
    Войти в систему
@endsection

@section('content')
<form action="{{ route('user-signin') }}" class="form" method="POST">
    @csrf
    <h1 class="form__heading">Вход</h1>

    <label class="form__label">
        <input type="email" name="email" class="form__text">
        <span class="form__description">Ваша почта</span>
    </label>
    
    <label class="form__label">
        <input type="password" name="password" class="form__text">
        <span class="form__description">Ваш пароль</span>
    </label>

    <div class="form__buttons-wrapper">
        <button type="submit" class="form__button form__button--submit">Войти</button>
        <button type="reset" class="form__button form__button--reset">Сбросить</button>
    </div>
</form>
@endsection