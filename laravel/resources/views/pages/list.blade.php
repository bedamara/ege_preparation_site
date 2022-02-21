@extends('layout')

@section('title')
    {{ $title }}
@endsection

@section('content')
    <ul class="list">
        @foreach ($data as $element)
            <li class="list__item">
                <a href="" class="list__link">{{ $element -> title }}</a>
                <p class="list__description">{{ $element -> text }}</p>
                <form action="/practice/{{ $name }}/{{ $element -> id }}/done" class="form" method="post">
                    @csrf
                    <label class="form__label">
                        <input type="text" name="answer" class="form__text">
                        <span class="form__description">Ваш ответ</span>
                    </label>
                    <div class="form__buttons-wrapper">
                        <button type="submit" class="form__button">Ответить</button>
                    </div>
                </form>
            </li>
        @endforeach
    </ul>
@endsection