<!DOCTYPE html>
<html>
    <head>
        <title>{{ $title }}</title>
        <link rel="stylesheet" href="{{ asset('/static/css/styles.css') }}">
    </head>
    <body>
        <header class='banner'>
            @guest
                <a href='{{ route('login')}}'><button class='select-button'>Войти</button></a>
                <a href='{{ route('registration')}}'><button class='select-button'>Зарегистрироваться</button></a>
            @endguest
            @auth
                <a href='{{ route('dashboard')}}'><button class='select-button'>dashboard</button></a>
            @endauth
        </header>
        <main role='main'>
            @yield('content')
        </main> 
        <footer role='contentinfo'>footer</footer>
    </body>
</html>
