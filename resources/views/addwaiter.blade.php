@extends('layout')

@section('title','Add Waiter')

@section('content')

<div class="container">
    <h3 style=" text-align: center; margin-top: 50px; margin-bottom: 50px;">Add Waiter</h3>

    <form action="/addwaiter" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder=" Name">
        </div>

        <div class="mb-3" style="text-align: center; margin-top: 40px;">
            <button class="btn btn-success" type="submit">Add</button>
        </div>
    </form>
</div>


@endsection