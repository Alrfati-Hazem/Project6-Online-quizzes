@extends("site.layout.master")
@section("head")
<link rel="stylesheet" href="{{asset("site/css/category.css")}}" />
<style>
    .colMy{
        border: 1px solid #F99821;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px 40px;
        margin-right: 30px;
        position: relative;
        min-height: 510px;
    }
    .myLink {
        position: absolute;
        bottom: 20px;
    }

    .myBtn {
        background-color:#F99821;
        color:rgb(248, 248, 248);
        transition: all 0.3s;
    }

    .myBtn.model:hover {
        transform: none;
        background-color: #e98f22
    }

    .myBtn:hover {
        transform: scale(1.1);
        color:rgb(248, 248, 248);
    }
</style>
@endsection
@section("content")
    <!--Welcoming Seaction-->
    <section class="welcome" id="welcome">
      <h1 class="heading">
         <span style="color: #404d68;">Welcome @auth @php
            $name = explode(' ' , Auth::user()->name);
              @endphp <span style="color: #F99821">{{$name[0]}}</span> @endauth</span>
      </h1>
      <p class="sub-heading font-weight-bold">
        Choose your quiz to strengthen your knowledge.
        <br />
        <br />
      </p>
      <div class="container">
        <div class="row justify-content-center">
            @foreach ($exams as $exam)
                <div class="col-lg-3 colMy">
                    <div class="image m-3">
                        <img src="{{asset("exam_images/".$exam->image)}}" style="max-width:300px; ">
                    </div>
                    <h3>{{$exam->name}}</h3>
                    <p class="text-justify my-3">{{$exam->description}}</p>
                    <a class="myLink">
                        <button class="btn myBtn" data-bs-toggle="modal" data-bs-target="#exampleModal{{$exam->id}}"> Start Quiz!</button>
                    </a>
               </div>
        {{-- Model --}}
        <div class="modal fade" id="exampleModal{{$exam->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{$exam->name}} : Quiz Rules </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <ul>
                   <li>The Quiz has {{$exam->questions->count()}} questions</li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                @auth
                <a href="{{route("quiz",$exam->id)}}"><button  type="submit" class="btn myBtn model">Start Quiz</button></a>
                @else
                <a href="{{route("login")}}"><button  type="submit" class="btn myBtn model">Start Quiz</button></a>
                @endauth
            </div>
            </div>
        </div>
        </div>
        {{-- End-Model --}}
            @endforeach
        </div>
      </div>
    </section>
@endsection
