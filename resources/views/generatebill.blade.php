@extends('layout')

@section('title', 'Generate Bill')

@section('content')

<div class="container">
    <h1 style="text-align: center; margin-top: 30px; margin-bottom: 50px;">Generate Bill</h1>

    <form action="/generate_bill" method="POST" id="billForm">
        @csrf

        <div class="mb-3">
            <label for="table_number" class="form-label">Table Number</label>
            <select class="form-select" id="table_id" name="table_id" required>
                <option value="">Select a Table</option>
                @foreach($tables as $table)
                <option value="{{ $table->id }}">Table No.{{ $table->id }} - Table Capacity:{{ $table->capacity }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="waiter_id" class="form-label">Waiter Name</label>
            <select class="form-select" id="waiter_id" name="waiter_id" required>
                <option value="">Select a Waiter</option>
                @foreach($waiters as $waiter)
                <option value="{{ $waiter->id }}"> waiter Name:{{ $waiter->name }}</option>
                @endforeach
            </select>
        </div>

        <div id="dishContainer">
            <div class="mb-3 dish-select">
                <label class="form-label">Select Dish</label>
                <select class="form-select" name="dish_id[]" required>
                    <option value="">Select a dish</option>
                    @foreach($dishes as $dishOption)
                    <option value="{{ $dishOption->id }}">{{ $dishOption->name }} - {{ $dishOption->price }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex items-center space-x-2 mb-6" style="margin-bottom: 10px; margin-top: 10px;">
                <span class="text-gray-700">Quantity:</span>
                <input type="number" name="quantity[]" value="1" class="border border-gray-300 rounded-md px-2 py-1 w-16 text-center">
            </div>
        </div>
        <div style="margin-top: 10px; text-align: center;">
            <button type="button" class="btn btn-primary" id="addDishBtn">Add Dish</button>
            <button type="submit" class="btn btn-success">Generate Bill</button>
        </div>
    </form>
</div>

@endsection





<script>
    document.addEventListener('DOMContentLoaded', function() {
        const addDishBtn = document.getElementById('addDishBtn');
        const dishContainer = document.getElementById('dishContainer');

        addDishBtn.addEventListener('click', function() {
            const newDishSelect = document.createElement('div');
            newDishSelect.classList.add('mb-3', 'dish-select');
            newDishSelect.innerHTML = `
            <label class="form-label">Select Dish</label>
            <select class="form-select" name="dish_id[]" required>
                <option value="">Select a dish</option>
                @foreach($dishes as $dishOption)
                <option value="{{ $dishOption->id }}">{{ $dishOption->name }} - {{ $dishOption->price }}</option>
                @endforeach
            </select>
            <div class="flex items-center space-x-2 mb-1" style="margin-bottom: 10px; margin-top: 10px;">
                <span class="text-gray-700">Quantity:</span>
                <input type="number" name="quantity[]" value="1" class="border border-gray-300 rounded-md px-2 py-1 w-16 text-center">
            </div>
        `;
            dishContainer.appendChild(newDishSelect);
        });
    });
</script>