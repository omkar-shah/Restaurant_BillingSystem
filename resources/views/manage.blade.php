@extends('layout')

@section('title','Manage')
@section('content')


<body>
    <h3 style="text-align: center; margin-top: 50px; margin-bottom: 50px;"> Manage</h3>
    <div class="container">
        <div class="card">
            <h2>Add Table</h2>
            <p>Add a new table to the restaurant's seating area.</p>
            <a href="/addtable">Add Table</a>
        </div>
        <div class="card">
            <h2>Add Waiter</h2>
            <p>Add a new waiter/waitress to the restaurant's staff.</p>
            <a href="/addwaiter">Add Waiter</a>
        </div>
        <div class="card">
            <h2>See Dish Price Record</h2>
            <p>View the record of dish prices for the restaurant.</p>
            <a href="/dishpricerecord">View Record</a>
        </div>




    </div>
</body>



<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: white;
    }

    .container {
        max-width: 1200px;
        margin: 20px auto;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 40px;
        flex-wrap: wrap;

    }

    .card {
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    .card h2 {
        margin-bottom: 10px;
    }

    .card p {
        margin-bottom: 20px;
    }

    .card a {
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
        text-decoration: none;
    }

    .card button:hover {
        background-color: #0056b3;
    }
</style>
@endsection