@extends("site.layout.master")
@section("head")
<link rel="stylesheet" href="{{asset("site/css/answers.css")}}">
<style>
    footer{
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    border: none;
    }
    footer .container{
        border-top: 1px solid orange;
        padding-top: 10px;
    }
</style>
@endsection
@section("content")
{{-- <section class="mb-5 mt-4">
    <div class="container">
        <div class="row">
            <!-- Guide Information -->
            <div class="col-4 d-flex flex-column align-items-center">
                <img width="100px" src="{{asset('user_images/'. Auth::user()->image)}}" alt="guide_photo">
                <h2 class="text-center pl-0">{{Auth::user()->name}}</h2>
                <div class="container">
                    <div class="row mt-2">
                    <div class="col-12 text-center mb-2">
                     <span class="me-3"><i class="fas fa-envelope"></i></span>{{Auth::user()->email}}
                    </div>
                    <div class="col-12 text-center">
                        <span class="me-3"><i class="fas fa-mobile-alt"></i></span>{{Auth::user()->phone}}
                    </div>
                    </div>
                    <a class="d-block mt-3 text-center" style="margin-left: 40px;"><button class="btn text-white" style=" background-color: #7C859B;color: white; width:130px">Edit Profile</button></a>
                </div>
            </div>
        </section> --}}
        <div class="container mt-3">
        <div class="table-responsive">
            @if($user->exams->count() == 0)
                <h3 class="text-center mt-2">You have not taken any quiz, <a href="{{route("category")}}">Take a one</a> </h3>
            @endif
            <table class="table table-bordered table-striped">
                <thead>
                    <th>Exam Name</th>
                    <th># Correct</th>
                    <th># Wrong</th>
                    <th>Score</th>
                </thead>
                <tbody>
                    @foreach ($user->exams as $exam )
                        <tr>
                            <td>{{$exam->name}}</td>
                            <td>{{$exam->pivot->correct}}</td>
                            <td>{{$exam->pivot->wrong}}</td>
                            <td>
                                <span style="@if ($exam->pivot->correct >= $exam->pivot->wrong ) color: green @else color:red   @endif">
                                    {{$exam->pivot->score}}/{{$exam->pivot->max}}
                                </span>
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>
@endsection
