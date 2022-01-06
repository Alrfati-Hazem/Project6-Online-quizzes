@extends('site.layout.master')
@section('head')
    <link rel="stylesheet" href="{{asset("site/css/answers.css")}}">
@endsection
@section('content')
    <h1 class="text-center mt-4">Review</h1>
    <div class="container w-100 mb-4" style="margin-top: -60px">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <th>Question</th>
                    <th>Your Answer</th>
                    <th>Correct Answer</th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($exam->questions as $question)
                    @php
                        $i++;
                    @endphp
                    <tr>
                        <td>
                            {{$question->content}}
                        </td>
                        <td>{{session()->get('answers')[$i]}}</td>
                        <td>{{$question->correct_answer}}</td>
                        <td>
                            @if ($question->correct_answer == session()->get('answers')[$i])
                                <span style="color: green; font-size:18px"><i class="fas fa-check-circle"></i></span>
                                @else
                                <span style="color: red; font-size:18px"><i class="fas fa-times-circle"></i></span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
