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
                            <a href="{{route("manage-exam.create")}}" class="d-block mb-2 mr-0 ml-auto">
                                <button class="au-btn au-btn-icon au-btn--green au-btn--small"><i class="zmdi zmdi-plus"></i>add exam</button>
                            </a>
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Image</th>
                                                <th>Description</th>
                                                <th>Category Name</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($exams as $exam )
                                                <tr>
                                                    <td>{{$exam->name}}</td>
                                                    <td><img src= {{asset("exam_images/$exam->image")}} alt="user_image" width="80px"></td>
                                                    <td>{{$exam->description}}</td>
                                                    <td>{{$exam->category->name}}</td>
                                                    <td>
                                                        <div class="table-data-feature">
                                                            <form action="{{route("manage-exam.edit",$exam->id)}}" class="mx-2">
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                    <i class="zmdi zmdi-edit"></i>
                                                                </button>
                                                            </form>
                                                            <form action="{{route("manage-exam.destroy",$exam->id)}}" method="POST" >
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
