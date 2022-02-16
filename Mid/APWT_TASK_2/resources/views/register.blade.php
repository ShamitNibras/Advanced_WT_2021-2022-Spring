<title>Registration</title>
@extends('layout.App')
@section('content')
<div class="d-flex justify-content-center mt-5">
    <div style="width:50%">
        <form action="{{route('registration')}}" method="post">
        {{csrf_field()}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="container" style="boder: radius 2px;">
    <h1 style="color:#117A65;text-align:center"> SignUp</h1>
    <div class="form-floating">
    <label for="floatingInput"><b>First Name</b></label>
      <input type="text" name="first_name" class="form-control" id="floatingInput" placeholder="first_name">
    </div>
    <div class="form-floating">
    <label for="floatingInput"><b>Last Name</b></label>
      <input type="text" name="last_name" class="form-control" id="floatingInput" placeholder="last_name">
    </div>
    
    <div class="form-floating">
    <label for="floatingInput"><b>Gender</b></label>
    <input type="radio" name="gender" value="male"> Male   
     <input type="radio" name="gender" value="female"> Female
     <input type="radio" name="gender" value="Other"> Other
</div>        
    <div class="form-floating">
    <label for="floatingInput"><b>Email address</b></label>
    <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
    </div>
    <div class="form-floating">
    <label for="floatingPassword"><b>Password</b></label>
      <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
    </div>
    <div class="form-floating">
    <label for="floatingPassword"><b>Confirm Password</b></label>
      <input type="password" name="confirm_password" class="form-control" id="floatingPassword" placeholder="confirm_password">
    </div>
               <br>    
            <div class="form-group mb-2">
                <label class="form-check-label"><input type="checkbox" required="required"> I accept the  <a href="#">Privacy Policy requires</a></label>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-sm btn-block">Register Now</button>
            </div>
        </form>
        <div class="text-center">Already have an account? <a href="{{route('login')}}">Sign in</a></div>
    </div>
</div>
</div>
@endsection