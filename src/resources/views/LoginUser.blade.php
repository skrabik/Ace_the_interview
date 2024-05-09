<!DOCTYPE html>
<html>
    <head>
        <title>Auth</title>
        <link rel="stylesheet" href="{{ asset('/static/css/styles.css') }}">
    </head>
    <body>
        <div class='header'>header</div>
        <div cass='main'>
            <form action='{{ route('login') }}' method='post' class='register-form'>
                @csrf
                <label for='email'>email</label>
                <input name='email' value='{{ old('email') }}' class='input-field'>
                @if ($errors->has('email')) 
                @error('email')
                    {{ $message }}
                @enderror
                @endif
                <label for='password'>password</label>
                <input type='password' name='password' class='input-field'>
                Забыли пароль? <a href='{{ route('forgotpassword') }}'>востановить</a>
                <label for='remember'>Запомнить меня</label>
                <input type='checkbox' name='remember'>
                нет аккаунта? <a href="{{ route('registration') }}">зарегистрироваться</a>
                <button type='submit' class='select-button'>submit</button>
            </form>
        </div> 
        <div class='footer'>footer</div>
    </body>
</html>
