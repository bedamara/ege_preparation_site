@extends('layout')

@section('title')
    {{ $title }}
@endsection

@section('content')
    <ul class="list">
        @if ($admin)
            <li class="list__item list__item--add">
                <a href="/practice/{{ $name }}/add" class="list__link">Добавить задание</a>
            </li>
        @endif  
        @foreach ($data as $element)
            <li class="list__item">
                <a href="/practice/{{ $name }}/{{ $element -> id }}" class="list__link">{!! $element -> title !!}</a>
            </li>
        @endforeach              
    </ul>
@endsection