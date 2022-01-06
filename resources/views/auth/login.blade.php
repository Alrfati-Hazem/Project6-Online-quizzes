@extends("site.layout.master")
@section('head')
    <link rel="stylesheet" href="{{asset("site/css/signup.css")}}" />
@endsection
@section('content')
    <section class="forms-section">
      <div class="forms">
        <div class="form-wrapper is-active">
          <button type="button" class="switcher switcher-login">
            Sign Up
            <span class="underline"></span>
          </button>
          <form class="form form-login" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="logo">
              <a href="{{route("index")}}"><img src="{{asset("site/imgs/logoH.png")}}" alt="image of logo" /></a>
            </div>
            <fieldset>
                <div class="input-name">
                  <label for="first-name">
                    Username
                    <strong id="FirstREQ" class="color-danger"> @error('name') {{"/ " . $message}} @enderror </strong>
                  </label>
                  <input id="first-name" type="text" name="name" value="{{old("name")}}" />
                </div>
              <div class="input-block">
                <label for="signup-email">
                  E-Mail
                  <strong id="emailREQ" class="color-danger"> </strong>
                </label>
                <input id="signup-email" type="email" name="email" value="{{old("email")}}" />
              </div>
              <div class="input-block" style="margin-top: 8px">
                <label for="signup-password">
                  Password
                  <strong id="passwordREQ" class="color-danger">  @error('password') {{"/ " . $message}} @enderror </strong>
                </label>
                <input id="signup-password" type="password" name="password" />
              </div>
            </fieldset>
            <button type="submit" class="btn-login">Sign Up</button>
          </form>
        </div>
        {{-- Login --}}
        <div class="form-wrapper">
          <button type="button" class="switcher switcher-signup">
            Login
            <span class="underline"></span>
          </button>
          <form class="form form-signup" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="logo mt-0">
               <a href="{{route("index")}}"><img src="{{asset("site/imgs/logoH.png")}}" alt="image of logo" /></a>
            </div>
            <fieldset class="fieldset-login">
              <div class="input-block mb-2">
                <label for="login-email">E-mail</label>
                <input id="login-email" type="email" name="email" value="{{old("email")}}" />
              </div>
              <div class="input-block mb-2">
                <label for="login-password">Password</label>
                <input id="login-password" type="password" name="password" />
              </div>
            </fieldset>
            <div class="errMsg">@error("email") {{$message}} @enderror</div>
            <button type="submit" class="btn-signup mb-3 mt-4">Log In</button>
            @if (Route::has('password.request'))
                <a class="btn btn-link d-block text-center mb-3" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
          </form>
        </div>
      </div>
    </section>
@endsection
@section('script')
    <script src="{{asset("site/js/signup.js")}}"></script>
@endsection
