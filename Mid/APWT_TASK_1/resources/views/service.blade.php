<title>Service</title>
@extends('layout.App')
@section('content')
<br>
        <div class="container">
                <h1 style="font-family:Gill Sans, sans-serif; text-align:center">Service we will provide</h1>
                <br><br><br>
<ul>
    @foreach($service as $s)
    <li>
        {{$s}}
    </li>
    @endforeach
</ul>
<br> <br> <br> <br>      
        @endsection