@extends('admin.layout.master')
@section('style')
<style>
    th,td{
        text-align: center;
        vertical-align:middle !important;
    }
        .footer{
            position: fixed;
    bottom: 0;
    left: 0;
    margin-left: 160px;
    width: 100%;
        }
</style>
@endsection
@section('content')
            <!-- MAIN CONTENT-->
            <div class="main-content mt-3">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        @endif
                        <div class="row">
                            <a href="{{route("manage-category.create")}}" class="d-block mb-2 mr-0 ml-auto">
                                <button class="au-btn au-btn-icon au-btn--green au-btn--small"><i class="zmdi zmdi-plus"></i>add category</button>
                            </a>
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Image</th>
                                                <th>Description</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($categories as $category )
                                                <tr>
                                                    <td>{{$category->name}}</td>
                                                    <td><img src= {{asset("category_images/$category->image")}} alt="user_image" width="80px"></td>
                                                    <td>{{$category->description}}</td>
                                                    <td>
                                                        <div class="table-data-feature">
                                                            <form action="{{route("manage-category.edit",$category->id)}}" class="mx-2">
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                    <i class="zmdi zmdi-edit"></i>
                                                                </button>
                                                            </form>
                                                            <form action="{{route("manage-category.destroy",$category->id)}}" method="POST" >
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
