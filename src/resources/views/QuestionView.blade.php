@extends('base')

@section('content')

    <div>
        <p>{{ $question->id }}</p>
        <p>{{ $question->question }}</p>
        <p>{{ $question->answer }}</p>
        <p>{{ $question->author }}</p>
    </div>

@endsection