@extends('admin.layout.master')
@section('content')
  <!-- MAIN CONTENT-->
            <div class="main-content mt-3">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-header">Edit User</div>
                                    <div class="card-body card-block">
                                        <form action="{{route("manage-user.update",$user->id)}}" method="POST" enctype='multipart/form-data'>
                                            @csrf
                                            @method('put')
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                    <input type="text" id="username" name="name" placeholder="Username" value="{{$user->name}}" class="form-control">
                                                </div>
                                                @error('name')
                                                    <strong class="error">{{$message}}</strong>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-envelope"></i>
                                                    </div>
                                                    <input type="email" id="email" name="email" placeholder="Email" value="{{$user->email}}" class="form-control">
                                                </div>
                                                @error('email')
                                                    <strong class="error">{{$message}}</strong>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-asterisk"></i>
                                                    </div>
                                                    <input type="password" id="password" name="password" placeholder="Password" value="{{$user->password}}" class="form-control">
                                                </div>
                                                @error('password')
                                                    <strong class="error">{{$message}}</strong>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-phone"></i>
                                                    </div>
                                                    <input type="phone" id="phone" name="phone" placeholder="Phone" value="{{$user->phone}}" class="form-control">
                                                </div>
                                                @error('phone')
                                                    <strong class="error">{{$message}}</strong>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                 <div class="input-group">
                                                    <select name="role_type" class="form-control">
                                                        <option disabled>Choose Role</option>
                                                        <option value="user" @if($user->role_type == "user") selected @endif >User</option>
                                                        <option value="admin" @if($user->role_type == "admin") selected @endif>Admin</option>
                                                    </select>
                                                </div>
                                                @error('role_type')
                                                    <strong class="error">{{$message}}</strong>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <label for="file-input" class=" form-control-label">Upload Photo</label>
                                                </div>
                                                <div>
                                                    <input type="file" id="file-input" name="image" class="form-control-file">
                                                </div>
                                                @error('role_type')
                                                    <strong class="error">{{$message}}</strong>
                                                @enderror
                                            </div>
                                            <div class="card-footer" style="background: #FFF;border-top: none;padding-left: 0;">
                                                <button type="submit" class="btn btn-success btn-md">Submit</button>
                                                <button type="submit" name="back" value="back" class="btn btn-danger btn-md">Back</button>
                                           </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
@endsection
