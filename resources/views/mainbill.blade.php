@extends('layout')

@section('title', 'Main Bill')

@section('content')

<div class="container ">
    <div class="container">
        <h2 style="text-align: center; margin-top: 40px;">Sukhdev Dhaba</h2>
        <h5 style="text-align: center;">G.T Road Murthal, Sonipat, HARIYANA</h5>
        <h5 style="text-align: center;">Phone No.7889789789, 852963748</h5>
        <h5 style="text-align: center;">GSTIN: 78894561234569874</h5>
    </div>
    <div class="container" style="text-align: center; margin-top:30px; margin-bottom: 30px;">
        <div>
            <div class="row row-col-2">
                <div class="col">Bill No. {{$bill->id}} </div>
                <div class="col"> Date: {{$bill->created_at->format('d-m-y')}}</div>
            </div>
        </div>
        <div>
            <div class="row row-col-2">
                <div class="col">Table No. {{$bill->table->id}} </div>
                <div class="col"> Waiter: {{$bill->waiter->name}}</div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-6 col-md-2"></div>
            <div class="col-6 col-md-4">
                <h5>Dish Name</h5>
            </div>
            <div class="col-6 col-md-2 ">
                <h5>Qty.</h5>
            </div>
            <div class="col-6 col-md-2">
                <h5>Price</h5>
            </div>
            <div class="col-6 col-md-2">
                <h5>Total</h5>
            </div>
        </div>
    </div>
    <hr>
    @foreach ($bill->orderItems as $orderItem)
    <div class="container">
        <div class="row">
            <div class="col-6 col-md-2"></div>
            <div class="col-6 col-md-4">
                <p>{{ $orderItem->dish->name }}</p>
            </div>
            <div class="col-6 col-md-2">
                <p>{{ $orderItem->quantity }}</p>
            </div>
            <div class="col-6 col-md-2">
                <p>{{ $orderItem->price }}</p>
            </div>
            <div class="col-6 col-md-2">
                <p>{{ $orderItem->quantity * $orderItem->price }}/-</p>
            </div>
        </div>
    </div>
    @endforeach
    <hr>

    <div class="container">
        <div class="row">
            <div class="col-6 col-md-2"></div>
            <div class="col-6 col-md-4">
                <h5>Sub Total</h5>
            </div>
            <div class="col-6 col-md-2 "></div>
            <div class="col-6 col-md-2"></div>
            <div class="col-6 col-md-2">
                <h5>{{$subtotal}}/-</h5>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-6 col-md-2"></div>
            <div class="col-6 col-md-4">
                <h5>CGST 2.5%</h5>
            </div>
            <div class="col-6 col-md-2 "></div>
            <div class="col-6 col-md-2"></div>
            <div class="col-6 col-md-2">
                <h5>{{$subtotal*0.025}}/-</h5>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-6 col-md-2"></div>
            <div class="col-6 col-md-4">
                <h5>SGST 2.5%</h5>
            </div>
            <div class="col-6 col-md-2 ">
                <h5></h5>
            </div>
            <div class="col-6 col-md-2">
                <h5></h5>
            </div>
            <div class="col-6 col-md-2">
                <h5>{{$subtotal*0.025}}/-</h5>
            </div>
        </div>
    </div>
    <hr>

    <div class="container">
        <div class="row">
            <div class="col-6 col-md-2"></div>
            <div class="col-6 col-md-4">
                <h5>Amount inclusive Of All Taxs</h5>
            </div>
            <div class="col-6 col-md-2 ">
                <h5></h5>
            </div>
            <div class="col-6 col-md-2">
                <h5></h5>
            </div>
            <div class="col-6 col-md-2">
                <h5>{{$bill->total}}/-</h5>
            </div>
        </div>
    </div>

    <div class="container">
        <h2 style="text-align: center; margin-top: 40px;">Thank You !</h2>
        <h5 style="text-align: center;">Visit Again</h5>
    </div>


</div>

@endsection