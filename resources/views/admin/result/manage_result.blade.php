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
										<div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
											{{ session()->get('message') }}
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
                        @endif
                        <div class="row">
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>User ID</th>
                                                <th>User Name</th>
                                                <th>Exam Name</th>
                                                <th>Score</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($results as $result )
                                                <tr>
                                                    <td>{{$result->user_id}}</td>
                                                    <td>{{$result->user_name}}</td>
                                                    <td>{{$result->name}}</td>
                                                    <td>{{$result->score}}</td>
                                                    <td>
                                                        <div class="table-data-feature">
                                                            {{-- <form action="{{route("manage-result.edit",$result->id)}}" class="mx-2">
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                    <i class="zmdi zmdi-edit"></i>
                                                                </button>
                                                            </form> --}}
                                                            <form action="{{route("result_delete",$result->result_id)}}" method="POST" >
                                                                @csrf
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
