<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Code-Bunker is a website for online quizzes">
    <title>Code Bunker | Online Quizzes</title>
    <link rel="stylesheet" href="{{asset("site/css/bootstrap.css")}}" />
    <link rel="stylesheet" href="{{asset("site/css/all.min.css")}}" />
    <link rel="stylesheet" href="{{asset("site/css/home.css")}}" />
    {{-- Favicon --}}
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset("images/icon/apple-touch-icon.png")}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset("images/icon/favicon-32x32.png")}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset("images/icon/favicon-16x16.png")}}">
    <link rel="manifest" href="{{asset("images/icon/site.webmanifest")}}">
    @yield("head")
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container border-bottom border-warning border-1">
        <a href="{{route("index")}}"><img class="navbar-brand" src="{{asset("site/imgs/logoH.svg")}}" style="width: 80px;" alt="logo" /></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse flex-grow-0" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="{{route("index")}}">
               Home
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="{{route("contact")}}">
                Contact Us
              </a>
            </li>
            @guest
                @if(request()->segment(1) != 'login')
                @if (Route::has('login'))
                <li class="nav-item home-btn-login">
                <a class="nav-link login-link" href="{{ route('login') }}">Login / Register</a>
                </li>
                @endif
                @endif
            @else
                <li class=" dropdown">
                    <a style="color: #000 ; font-weight:bold" id="navbarDropdown" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a href="{{route("showAllExam")}}" class="dropdown-item">
                            Profile
                        </a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
          </ul>
        </div>
      </div>
    </nav>
