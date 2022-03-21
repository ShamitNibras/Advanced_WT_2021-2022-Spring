<div class="mt-3">
    @if (Session::get("managerid"))
<a class="btn btn-primary" href="{{route('registration')}}">Add Manager</a>
<a class="btn btn-primary" href="{{route('profile')}}">Profile</a>
<a class="btn btn-primary" href="{{route('updateProfile')}}">Update Profile</a>
<a class="btn btn-primary" href="{{route('seeTask')}}">Task Status</a>
<a class="btn btn-primary" href="{{route('seeStaff')}}">See Staff</a>
<a class="btn btn-danger" href="{{route('logout')}}">Logout</a>
@endif


</div>
