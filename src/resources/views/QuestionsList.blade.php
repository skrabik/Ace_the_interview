@extends('base')

@section('content')

    <div>
        @foreach($questions as $question)
        
        <a href='{{ route('questionslist.question', [$category_name,  $question->id]) }}'>
            <div class='question-block'>
            <p>{{ $question->question }}</p>
            <p>{{ $question->answer }}</p>
            </div>
        </a>

        @endforeach
    </div>

@endsection