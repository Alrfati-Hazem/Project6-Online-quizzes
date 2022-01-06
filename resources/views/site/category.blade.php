@extends("site.layout.master")
@section("head")
<link rel="stylesheet" href="{{asset("site/css/category.css")}}" />
<style>
    * {
        box-sizing: border-box;
    }
    .colMy{
        border: 1px solid #F99821;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px 10px;
        margin-right: 30px;
        position: relative;
        min-height: 550px;
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
        Choose your category to strengthen your knowledge.
        <br />
        <br />
      </p>
      <div class="container">
        <div class="row justify-content-center">
            @foreach ($categories as $category)
                <div class="col-lg-3 colMy">
                    <div class="image m-3 w-100">
                        <img src="{{asset("category_images/".$category->image)}}" style="min-width:200px; max-width: 100%; ">
                    </div>
                    <h3>{{$category->name}}</h3>
                    <p class="text-justify my-3 px-1">{{$category->description}}</p>
                    <a class="myLink" href="{{route("exam",$category->id)}}">
                        <button class="btn myBtn">Choose</button>
                    </a>
               </div>
            @endforeach
        </div>
      </div>
    </section>
@endsection
