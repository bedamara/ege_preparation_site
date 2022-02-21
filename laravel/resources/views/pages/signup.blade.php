@extends('layout')

@section('title')
    Зарегистрироваться
@endsection

@section('content')
<form action="" class="form">
    @csrf
    <h1 class="form__heading">Регистрация</h1>

    <label class="form__label">
        <input type="name" class="form__text">
        <span class="form__description">Ваше имя</span>
    </label>

    <label class="form__label">
        <input type="email" class="form__text">
        <span class="form__description">Ваша почта</span>
    </label>
    
    <label class="form__label">
        <input type="password" name="passowrd" class="form__text">
        <span class="form__description">Ваш пароль</span>
    </label>

    <label class="form__label">
        <input type="password" name="password_confirmation" class="form__text">
        <span class="form__description">Повторите пароль</span>
    </label>

    <div class="form__buttons-wrapper">
        <button type="submit" class="form__button form__button--submit">Зарегистрироваться</button>
    </div>
</form>
@endsection