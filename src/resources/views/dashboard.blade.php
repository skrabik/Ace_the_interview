<!DOCTYPE html>
<html>
    <head>
        <title>Auth</title>
        <link rel="stylesheet" href="{{ asset('/static/css/styles.css') }}">
    </head>
    <body>
        <div class='header'>header</div>
        <div cass='main'>
            <h1>Hello!</h1>
            <a href='{{ route('logout') }}'><button class=select-button>Log out</button></a>
        </div> 
        <div class='footer'>footer</div>
    </body>
</html>
