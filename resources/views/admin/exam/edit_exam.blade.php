@extends("admin.layout.master")
@section('style')

@endsection
@section('content')
  <!-- MAIN CONTENT-->
            <div class="main-content mt-3">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-header">Edit Exam</div>
                                    <div class="card-body">
                                        <form action="{{route("manage-exam.update",$exam->id)}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            @method("put")
                                            <div class="form-group">
                                                <label for="name" class="control-label mb-1">Exam Name</label>
                                                <input id="name" name="name" type="text" class="form-control" value="{{$exam->name}}">
                                                @error('name')
                                                    <strong class="error">{{$message}}</strong>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                 <label for="name" class="control-label mb-1">Exam Description</label>
                                                <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{$exam->description}}</textarea>
                                                @error('description')
                                                    <strong class="error">{{$message}}</strong>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                 <div class="input-group">
                                                    <select name="category_id" value="{{$exam->category_id}}" class="form-control">
                                                        @foreach ($categories as $category )
                                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                @error('role_type')
                                                    <strong class="error">{{$message}}</strong>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                    <label for="file-input" class="control-label">Upload Photo</label>
                                                    <input type="file" id="file-input" name="image" class="form-control-file">
                                                @error('image')
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
