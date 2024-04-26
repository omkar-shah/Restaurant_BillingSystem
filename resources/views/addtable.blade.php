@extends('layout')

@section('title','Add Table')

@section('content')

<div class="container">
    <h3 style=" text-align: center; margin-top: 50px; margin-bottom: 50px;">Add Table Capacity</h3>
    <form action="/addtable" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Seating Capacity Of Table</label>
            <input type="number" class="form-control" id="capacity" name="capacity" placeholder=" Seating Capacity">
        </div>

        <div class="mb-3" style="text-align: center; margin-top: 40px;">
            <button class="btn btn-success" type="submit">Add</button>
        </div>
    </form>
</div>


@endsection