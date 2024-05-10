@extends('base')

@section('banner')

    @guest
        <a href='{{ route('login')}}'><button class='select-button'>Войти</button></a>
        <a href='{{ route('registration')}}'><button class='select-button'>Зарегистрироваться</button></a>
    @endguest
    @auth
        <a href='{{ route('dashboard')}}'><button class='select-button'>dashboard</button></a>
    @endauth

@endsection

@section('content')

    <div class=test>
    @foreach($categories as $category)
        <a href='{{ route('questionslist', $category->name) }}'><button class='select-button'>{{ $category->name }}</button></a>
    @endforeach
    <div>

@endsection
  
