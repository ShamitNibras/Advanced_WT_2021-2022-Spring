<title>Manager Login</title>
@extends('layouts.app1')
@section('content')
<div class="d-flex justify-content-center mt-5">
    <div style="width:50%">
      <form action="{{route('login')}}" method="post">
          <!-- Cross Site Request Forgery-->
      {{csrf_field()}}

        <div class="container" style="boder: radius 2px;">
        <h1 style="color:#117A65;text-align:center"> Manager LoginPage</h1>
        @if ($errors->any())
            <div class="alert alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <br>
        <div class="form-floating">
        <label for="floatingInput"><b>Email address</b></label>
        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        </div>
    <br>
            <div class="form-floating">
        <label for="floatingPassword"><b>Password</b></label>
          <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
        </div>
        <br>
        <label>
          <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
      </div>
      <button class="w-100 btn btn-lg btn-secondary" type="submit">Sign in</button>


      </div>

      </form>
    </div>
    </div>
    <br><br>
@endsection
