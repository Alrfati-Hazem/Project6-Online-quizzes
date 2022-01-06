@extends('site.layout.master')
@section('head')
    <link rel="stylesheet" href="{{asset("site/css/quiz.css")}}">
@endsection
@section('content')
    <h1 class="text-center mt-4 mb-4">{{$exam->name}} Exam</h1>
    <div class="container">
    <form action="{{route("storeResult",$exam->id)}}" method="POST">
            @foreach ($questions as $question)
            @csrf
                @php
                $i = $i+1;
                @endphp
                <div class="box mb-4">
                    <div class="question mb-2">{{$i}} &rpar; {{$question->content}} <span class="ms-2" style="color:rgb(3, 174, 3)">[{{$question->point}} points]</span></div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="question.{{$i}}" id="question1.{{$i}}" value="{{$question->option1}}" required>
                    <label class="form-check-label" for="question1.{{$i}}">
                    {{$question->option1}}
                    </label>
                    </div>

                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="question.{{$i}}" id="question2.{{$i}}" value="{{$question->option2}}">
                    <label class="form-check-label" for="question2.{{$i}}">
                    {{$question->option2}}
                    </label>
                    </div>

                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="question.{{$i}}" id="question3.{{$i}}" value="{{$question->option3}}">
                    <label class="form-check-label" for="question3.{{$i}}">
                    {{$question->option3}}
                    </label>
                    </div>

                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="question.{{$i}}" id="question4.{{$i}}" value="{{$question->option4}}">
                    <label class="form-check-label" for="question4.{{$i}}">
                    {{$question->option4}}
                    </label>
                    </div>
                </div>
                    @endforeach
            <button class="btn btn-success mb-5" id="submitExam">Submit</button>
        </form>
@endsection
