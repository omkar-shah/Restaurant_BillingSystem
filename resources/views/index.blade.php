@extends('layout')

@section('title','Home')

@section('content')


<body>
    <div class="container" style="margin-top: 50px;">
        <div class="menu-item">
            <img src="https://cdn.tasteatlas.com//Images/Dishes/dec410f7acfa475bbf94668ba691d96f.jpg?mw=1300" alt="Dish 1">
            <h3>Amritsari kulcha</h3>
            <p></p>
        </div>
        <div class="menu-item">
            <img src="https://cdn.tasteatlas.com//images/dishes/bb78aadeae4e4a1c87b3843d8120aa9a.jpg?w=905&h=510" alt="Dish 2">
            <h3>Butter Garlic Naan</h3>
            <p></p>
        </div>
        <div class="menu-item">
            <img src="https://cdn.tasteatlas.com//images/dishes/3bd6dfaf53e244dfb7f3ee390447a2f8.jpg?w=905&h=510" alt="Dish 3">
            <h3>Hyderabadi biryani</h3>
            <p></p>
        </div>
        <div class="menu-item">
            <img src="https://cdn.tasteatlas.com//images/dishes/55f00ba4fe8746a68b8ad62b24226e3b.jpg?w=905&h=510" alt="Dish 3">
            <h3>Chicken 65</h3>
            <p></p>
        </div>
        <div class="menu-item">
            <img src="https://cdn.tasteatlas.com//Images/Dishes/a111291d959e40789af1280bba00f5c8.jpg?w=905&h=510" alt="Dish 3">
            <h3>Chole bhature</h3>
            <p></p>
        </div>
    </div>
</body>

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 1200px;
        margin: 20px auto;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
    }

    .menu-item {
        margin: 20px;
        text-align: center;
    }

    .menu-item img {
        width: 300px;
        height: 200px;
        object-fit: cover;
        border-radius: 10px;
    }

    .menu-item h3 {
        margin-top: 10px;
    }

    .menu-item p {
        margin-top: 5px;
        color: #666;
    }
</style>

@endsection