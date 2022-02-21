@extends('layout')

@section('title')
    {{ $title }}
@endsection

@section('content')
    <ul class="list">
        @foreach ($data as $element)
            <li class="list__item">
                <a href="/practice/{{ $name }}/{{ $element -> id }}" class="list__link">{{ $element -> title }}</a>
            </li>
        @endforeach
    </ul>
@endsection