@extends('base')

@section('content')

    <form action='{{ route('forgotpassword.email') }}' method='post' class='register-form'>
        @csrf
        @if (session('status'))
            <p>Ссылка на сброс пароля успешно отправлена </p>
        @endif
        <label for='email'>Введите почту</label>
        <input name='email'>
        @if ($errors->has('email'))
            @error('email')
                {{ $message }}
            @enderror
        @endif
        <button class='select-button'>Сбросить пароль</button>
    </form>

@endsection
