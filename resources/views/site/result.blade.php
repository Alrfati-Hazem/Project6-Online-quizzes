@extends('site.layout.master')
@section('head')
        <link rel="stylesheet" href="{{asset("site/css/answers.css")}}">
@endsection
@section('content')
    <h1 class="text-center mt-4">Your Result</h1>
    <div class="container w-50" style="margin-top:-60px">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                </thead>
                <tbody>
                    <tr>
                        <td>Quiz Name</td>
                        <td><strong>{{$exam->name}}</strong></td>
                    </tr>
                    <tr>
                        <td>Total Questions</td>
                        <td><strong>{{$exam->questions->count()}}</strong></td>
                    </tr>
                    <tr>
                        <td>Correct Answers</td>
                        <td><strong style="color: green">{{$result->correct}}</strong></td>
                    </tr>
                    <tr>
                        <td>Wrong Answers</td>
                        <td><strong style="color: red">{{$result->wrong}}</strong></td>
                    </tr>
                    <tr>
                        <td>Score</td>
                        <td><strong style="@if($result->correct >= $result->wrong) color: green @else color:red @endif">{{$result->score}} / {{$result->max}}</strong></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-center"><a href="{{route("review",$exam->id)}}"><button class="btn btn-primary">Review Your Answers</button></a></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-center"><a href="{{route("category")}}"><button class="btn btn-secondary">Give More Quizzes</button></a></td>
                    </tr>
                    <tr>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
