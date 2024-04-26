@extends('layout')

@section('title','Order History')
@section('content')




<body>

    <h1 style="text-align: center; margin-top: 50px; margin-bottom: 30px;">Order History</h1>

    <main style="flex-wrap: wrap;">

        <div class="container" style="flex-wrap: wrap;">
            @foreach($orders as $order)
            <div class="order">
                <h4>Bill Id. {{$order->id}}</h2>
                    <p>Date: {{$order->created_at->format('d-m-Y')}}</p>
                    <p>Table No. {{$order->table->id}}</p>
                    <p>Total: {{$order->total}}</p>
                    <a href="/viewbill/{{$order->id}}" class="btn btn-primary">View Bill</a>
            </div>
            @endforeach
        </div>

    </main>
</body>





<style>
    .container {
        max-width: 1200px;

        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        gap: 40px;
    }

    .order {
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 10px;
        text-align: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);

    }
</style>


@endsection