<title>Task Assign</title>
@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">


<div class="mt-4">
<h1 class="text-center">Task Assign</h1>
    <div class=" col-lg-8 shadow-lg mx-auto">
        <form action="{{route('assigned')}}" class="form-group col-lg-6" method="post">
            {{csrf_field()}}

            <div class="form-floating">
                <label for="floatingInput"><b>Name:</b></label>
                <input type="name" name="name" id="form-floating" value="{{old('name')}}" class="form-control">
                @error('name')
                    <span class="text-danger">{{$message}}</span>
                @enderror

              </div>
              <div class="form-floating">
                <label for="floatingInput"><b>Employee Id:</b></label>

                <input type="eid" name="eid" id="form-floating" value="{{old('eid')}}" class="form-control">
                @error('eid')
                    <span class="text-danger">{{$message}}</span>
                @enderror

              </div>
              <div class="form-floating">
                <label for="floatingInput"><b>Task Id:</b></label>
                <input type="id" name="id" id="form-floating" value="{{old('id')}}" class="form-control">
                @error('id')
                    <span class="text-danger">{{$message}}</span>
                @enderror

              </div>
              <br>
            <button class="w-100 btn btn-lg btn-secondary" type="submit">Sign in</button>

            <br>
            </form>
    <table class="table table-border">
        <tr>
            <th>ID</th>
            <th>Name of the issue</th>
            <th>Dead Line</th>
            <th>Status</th>
            <th>Assigned</th>

        </tr>
        @foreach($tasks as $task)
        <tr>
            <td>{{$task->id}}</td>


            <td>{{$task->name}}</td>

            <td>{{$task->deadline}}</td>

            <td>{{$task->status}}</td>
            <td>{{$task->assignedto}}</td>

        </tr>
        @endforeach

    </table>
    </div>
</div>


@endsection
