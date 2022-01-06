@extends('admin.layout.master')
@section('style')
<style>
    th,td{
        text-align: center;
        vertical-align:middle !important;
    }
    .form-select{
    display: block;
    width: 200px;
    padding: 0.375rem 2.25rem 0.375rem 0.75rem;
    -moz-padding-start: calc(0.75rem - 3px);
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    background-color: #fff;
    background-repeat: no-repeat;
    background-position: right 0.75rem center;
    background-size: 16px 12px;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
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
                            <form action="{{route("userFilter")}}" method="GET" class="d-flex mb-2" style="gap:20px">
                              <select onchange="this.form.submit()" class="form-select" name="role" id="role">
                                    <option value="All Users" selected>All Users</option>
                                    <option value="user">Users</option>
                                    <option value="admin">Admins</option>
                                </select>
                                {{-- <button class="btn btn-primary" type="submit">Filter</button> --}}
                            </form>
                            <a href="{{route("manage-user.create")}}" class="d-block mb-2 mr-0 ml-auto">
                                <button class="au-btn au-btn-icon au-btn--green au-btn--small"><i class="zmdi zmdi-plus"></i>add user</button>
                            </a>
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Image</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Role</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $user )
                                                <tr>
                                                    <td>{{$user->name}}</td>
                                                    <td><img src= {{asset("user_images/$user->image")}} alt="user_image" width="80px"></td>
                                                    <td>{{$user->email}}</td>
                                                    <td>{{$user->phone}}</td>
                                                    <td>{{$user->role_type}}</td>
                                                    <td>
                                                        <div class="table-data-feature">
                                                            {{-- <form action="">
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="View">
                                                                    <i class="zmdi zmdi-eye"></i>
                                                                </button>
                                                            </form> --}}
                                                            <form action="{{route("manage-user.edit",$user->id)}}" class="mx-2">
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                    <i class="zmdi zmdi-edit"></i>
                                                                </button>
                                                            </form>
                                                            <form action="{{route("manage-user.destroy",$user->id)}}" method="POST" >
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
