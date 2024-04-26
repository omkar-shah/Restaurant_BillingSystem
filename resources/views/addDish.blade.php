@extends('layout')

@section('title', 'Add Dish')

@section('content')
<div class="container" style="margin-top: 50px;">

    <h2 style="text-align: center; margin-bottom: 30px;">Add New Dish</h2>
    <form action="/add_dish" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Dish Name">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" id="price" name="price" placeholder="Dish Price">
        </div>
        <div class="mb-3" style="margin-top: 50px; text-align: center;">
            <button class="btn btn-success" type="submit">Add Dish</button>
        </div>
    </form>
</div>
@endsection