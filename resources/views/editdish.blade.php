@extends('layout')
@section('title','Edit Dish')

@section('content')

<div class="container" style="margin-top: 50px;">
    <h3 style="text-align: center;"> Edit Dish</h3>
    <form action="/editdish/{{$dish->id}}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$dish->name}}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" id="price" name="price" value="{{$dish->price}}">
        </div>
        <div class="mb-3" style="margin-top: 50px; text-align: center;">
            <button class="btn btn-success" type="submit">Save Changes</button>
            <a href="/dishes" class="btn btn-danger">Cancle</a>
        </div>
    </form>
</div>
@endsection