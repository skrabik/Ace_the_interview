@extends('base')

@section('content')

    <form action='{{ route('password.update') }}' method='post' class='register-form'>
        @csrf
        
        <input type='hidden' name='token' value='{{ request('token') }}'>
        <input type='hidden' name='email' value='{{ request('email') }}'>

        @if ($errors->has('email'))
            @error('email')
                <p>{{ $message }}</p>
            @enderror    
        @endif

        @if ($errors->has('password'))
            @error('password')
                <p>{{ $message }}</p>
            @enderror    
        @endif
    
        <label for='password'>Введите новый пароль</label>
        <input type='password' name='password'>

        <label for='password_confirmation'>Повторите</label>
        <input type='password' name='password_confirmation'>

        <button class='select-button'>Обновить пароль</button> 
    </form>
    
@endsection