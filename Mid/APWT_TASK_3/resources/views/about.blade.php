@extends('layouts.app')
@section('content')


<br>
        <div class="container mt-3">
            <h1 style="color:Tomato;text-align:center">Welcome to S&N Solution</h1><br>
            <p style="color:#625F80;text-align:center">S&N Solution will provide different service in different Sector.We are concerns to our
                strengths of abilities  that is we are responsible to our work,
                a  capable of functioning under pressure. we also have impressive
                communication skills and interpersonal abilities</p>


            <br><br>
            @if(Session::get('user')) {{Session::get('user')}}
            <a class="btn btn-danger" href="{{route('logout')}}">Log out </a>
        @endif
            <div>
                <p> Thank for Visiting my website </p>
            </div>
        </div>



@endsection
