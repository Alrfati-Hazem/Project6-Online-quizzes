@extends('admin.layout.master')
@section('style')
<style>
    th,td{
        text-align: center;
        vertical-align:middle !important;
    }
</style>
@endsection
@section('content')
            <!-- MAIN CONTENT-->
            <div class="main-content mt-3">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        @if(session()->has('message'))
										<div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
											{{ session()->get('message') }}
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
                        @endif
                        <div class="row">
                            <a href="{{route("manage-question.create")}}" class="d-block mb-2 mr-0 ml-auto">
                                <button class="au-btn au-btn-icon au-btn--green au-btn--small"><i class="zmdi zmdi-plus"></i>add question</button>
                            </a>
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Content</th>
                                                <th>Option1</th>
                                                <th>Option2</th>
                                                <th>Option3</th>
                                                <th>Option4</th>
                                                <th>Correct Answer</th>
                                                <th>Point</th>
                                                <th>Exam Name</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($questions as $question )
                                                <tr>
                                                    <td>{{$question->content}}</td>
                                                    <td>{{$question->option1}}</td>
                                                    <td>{{$question->option2}}</td>
                                                    <td>{{$question->option3}}</td>
                                                    <td>{{$question->option4}}</td>
                                                    <td>{{$question->correct_answer}}</td>
                                                    <td>{{$question->point}}</td>
                                                    <td>{{$question->exam->name}}</td>
                                                    <td>
                                                        <div class="table-data-feature">
                                                            <form action="{{route("manage-question.edit",$question->id)}}" class="mx-2">
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                    <i class="zmdi zmdi-edit"></i>
                                                                </button>
                                                            </form>
                                                            <form action="{{route("manage-question.destroy",$question->id)}}" method="POST" >
                                                                @csrf
                                                                @method("delete")
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                    <i class="zmdi zmdi-delete"></i>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                            </div>
                        </div>
@endsection
