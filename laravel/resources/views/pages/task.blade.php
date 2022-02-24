@extends('layout')

@section('title')
    {{ $title }}
@endsection

@section('content')
    <div class="task">
        <p class="task__description">{!! $element -> text !!}</p>
        <form action="/practice/{{ $name }}/{{ $element -> id }}/done" class="task__form form" method="post">
            @csrf
            <label class="form__label">
                <input type="text" name="answer" class="form__text">
                <span class="form__description">Ваш ответ</span>
            </label>
            <div class="form__buttons-wrapper">
                <button type="submit" class="form__button">Ответить</button>
            </div>
        </form>
    </div>

    @if (Session::has('success'))
        <div class="status status--good">
            <p class="status__text">
                {{ session() -> pull('success') }}
            </p>
        </div>        
    @endif

    @if (Session::has('error'))
        <div class="status status--bad">
            <p class="status__text">
                {{ session() -> pull('error') }}
            </p>
        </div>        
    @endif
@endsection