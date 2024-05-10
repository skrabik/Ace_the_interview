@extends('base')

@section('content')

    <h1>Hello!</h1>
    <a href='{{ route('logout') }}'><button class=select-button>Log out</button></a>

@endsection