@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status</title>
</head>
<body>

<h1 class="text-center">Status</h1>
    <div class=" col-lg-8 shadow-lg mx-auto">
    <table class="table table-border">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Role</th>
            <th>Status</th>

        </tr>
        @foreach($staffs as $task)
        <tr>
            <td>{{$task->id}}</td>

            <td>{{$task->name}}</td>

            <td>{{$task->role}}</td>

            <td>{{$task->status}}</td>

        </tr>
        @endforeach

    </table>
    </div>

</body>
</html>
@endsection
