<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
 
        
  <div class="container mt-3">

<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <a class=" navbar-brand" href="{{route('home')}}">S&N Solution</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
  <span class="text-muted">Toggleable via the navbar brand.</span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class=" navbar-nav">
    
      
    </div>
  </div>
  
    <a class="nav-item nav-link" href="{{route('home')}}"><h5 style="color:	rgb(24, 97, 91)">Home</h5></a>
    <a class="nav-item nav-link" href="{{route('profile')}}"><h5 style="color:	rgb(24, 97, 91)">Profile</h5></a>
        <a class="nav-item nav-link" href="{{route('studentList')}}"><h5 style="color:	rgb(73, 67, 67)">Student List</h5></a>
        <a class="nav-item nav-link " href="{{route('studentCreate')}}"><h5 style="color:	rgb(73, 67, 67)">Create Student</h5></a>
        <a class="nav-item nav-link " href="{{route('teacherCreate')}}"><h5 style="color:	rgb(73, 67, 67)">Create Teacher</h5></a>
        <a class="nav-item nav-link " href="{{route('teacherList')}}"><h5 style="color:	rgb(73, 67, 67)">Teacher List</h5></a>
          <a class="nav-item nav-link " href=" "><h5 style="color:	red"><b>LogIn</b></h5></a>
  </div>

  </div>
</nav> 
        
    </div>  
    @yield('content')
            <footer>
            <div class="container">   
            <p>©2022
                    Created by Shamit Nibras | All rights reserved</p>
</div>
</footer>
        


  </body>
</html>