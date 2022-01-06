@extends("admin.layout.master")
@section('style')
<style>
    input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
</style>
@endsection
@section('content')
  <!-- MAIN CONTENT-->
            <div class="main-content mt-3">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-header">Edit Question</div>
                                    <div class="card-body">
                                        <form action="{{route("manage-question.update",$question->id)}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            @method('put')
                                            <div class="form-group">
                                                 <label for="content" class="control-label mb-1">content</label>
                                                <textarea name="content" id="content" cols="30" rows="5" class="form-control">{{$question->content}}</textarea>
                                                @error('content')
                                                    <strong class="error">{{$message}}</strong>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                 <label for="option1" class="control-label mb-1">Option1</label>
                                                <textarea name="option1" id="option1" cols="30" rows="5" class="form-control">{{$question->option1}}</textarea>
                                                @error('option1')
                                                    <strong class="error">{{$message}}</strong>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                 <label for="option2" class="control-label mb-1">Option2</label>
                                                <textarea name="option2" id="option2" cols="30" rows="5" class="form-control">{{$question->option2}}</textarea>
                                                @error('option2')
                                                    <strong class="error">{{$message}}</strong>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                 <label for="option3" class="control-label mb-1">Option3</label>
                                                <textarea name="option3" id="option3" cols="30" rows="5" class="form-control">{{$question->option3}}</textarea>
                                                @error('option3')
                                                    <strong class="error">{{$message}}</strong>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                 <label for="option4" class="control-label mb-1">Option4</label>
                                                <textarea name="option4" id="option4" cols="30" rows="5" class="form-control">{{$question->option4}}</textarea>
                                                @error('option4')
                                                    <strong class="error">{{$message}}</strong>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                 <label for="correct_answer" class="control-label mb-1">Correct Answer</label>
                                                <textarea name="correct_answer" id="correct_answer" cols="30" rows="5" class="form-control">{{$question->correct_answer}}</textarea>
                                                @error('correct_answer')
                                                    <strong class="error">{{$message}}</strong>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="point" class="control-label mb-1">Point</label>
                                                <input id="point" name="point" type="number" class="form-control" value="{{$question->point}}">
                                                @error('point')
                                                    <strong class="error">{{$message}}</strong>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                 <label for="exam_id" class="control-label mb-1">Exam Name</label>
                                                 <div class="input-group">
                                                    <select name="exam_id" id="exam_id" value="{{$question->exam_id}}" class="form-control">
                                                        @foreach ($exams as $exam )
                                                            <option value="{{$exam->id}}">{{$exam->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                @error('exam_id')
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
