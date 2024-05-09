<!DOCTYPE html>
<html>
    <head>
        <title>Auth</title>
        <link rel="stylesheet" href="{{ asset('/static/css/styles.css') }}">
    </head>
    <body>
        <div class='header'>
            <h1>Hello!</h1>
        </div>
        <div cass='main'>
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
        </div> 
        <div class='footer'>footer</div>
    </body>
</html>
