@extends('layout')
@section('title','Dishes')

@section('content')
<div class="container" style="margin-top: 40px;">
    <h3 style="text-align: center;"> Available Dish</h3>

    <table class="table" style="margin-top: 50px; ">
        <thead>
            <tr>
                <th scope="col">Dish Name</th>
                <th scope="col">Dish Price</th>
                <th scope="col" style="text-align: center;">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dish as $dish)
            <tr>
                <td>{{ $dish->name }}</td>
                <td>{{ $dish->price }}</td>
                <td style="text-align: center;">
                    <a class="btn btn-success" href="/editdish/{{$dish->id}}">Edit</a>
                    <a class="btn btn-danger" href="/deletedish/{{$dish->id}}">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="container" style="margin-top: 40px; text-align: center;"> <a class="btn btn-danger" href="/add_dish">
            Add Dish
        </a>
    </div>
</div>
@endsection