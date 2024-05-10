@extends('base')

@section('content')

    <form action='{{ route('registration') }}' method='post' class='register-form'>
        @csrf
        <label for='name'>name</label>
        <input name='name' value='{{ old('name') }}' class='input-field'>
        @if ($errors->has('name'))
            @error('name')
            {{ $message }}
            @enderror
        @endif
        <label for='email'>email</label>
        <input name='email' value='{{ old('email') }}' class='input-field'>
        @if ($errors->has('email'))
            @error('email')
            {{ $message }}
            @enderror
        @endif
        <label for='password'>password</label>
        <input type='password' name='password' class='input-field'>
        @if ($errors->has('password'))
            @error('password')
            {{ $message }}
            @enderror
        @endif
        <label for='password_confirmation'>password</label>
        <label for='remember'>Запомнить меня</label>
        <input type='checkbox' name='remember'>
        <input type='password' name='password_confirmation' class='input-field'>
        уже есть аккаунт? <a href='{{ route('login') }}'>войти</a>
        <button type='submit' class='select-button'>Submit</button>
    </form>

@endsection
