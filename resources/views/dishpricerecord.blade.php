@extends('layout')
@section('title','Dishes Price Record')

@section('content')
<div class="container" style="margin-top: 40px;">

    <h3 style="text-align: center; margin-top: 50px;">Dish Price Change Record</h3>
    <table class="table" style="margin-top: 50px; ">
        <thead>
            <tr>
                <th scope="col">Dish Name</th>
                <th scope="col">Dish Price</th>
                <th scope="col" style="text-align: center;">Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dish as $dish)
            <tr>
                <td>{{ $dish->name }}</td>
                <td>{{ $dish->price }}</td>
                <td style="text-align: center;">
                    {{$dish->created_at->format('d-m-y')}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>


</div>
@endsection