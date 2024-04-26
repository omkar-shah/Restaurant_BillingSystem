<?php

namespace App\Http\Controllers;

use App\Models\bills;
use App\Models\Dish;
use App\Models\dishPriceRecord;
use App\Models\orderItem;
use App\Models\tables;
use App\Models\waiter;
use Illuminate\Http\Request;

class Billing extends Controller
{
    public function dish()
    {
        $dish = Dish::get();
        return view('dish', ['dish' => $dish]);
    }

    public function adddish()
    {

        return view('addDish');
    }

    public function manage()
    {

        return view('manage');
    }

    public function addwaiter()
    {
        return view('addwaiter');
    }

    public function add_waiter(Request $req)
    {

        $waiter = new waiter([
            'name' => $req->name,
        ]);
        $waiter->save();

        return redirect('/');
    }

    public function addtable()
    {
        return view('addtable');
    }

    public function add_table(Request $req)
    {

        $table = new tables([
            'capacity' => $req->capacity,
        ]);
        $table->save();

        return redirect('/manage');
    }

    public function newDish(Request $req)
    {

        $dish = new Dish([
            'name' => $req->name,
            'price' => $req->price
        ]);
        $dish->save();

        return redirect('/dishes');
    }

    public function generateBill()
    {
        $dish = Dish::get();
        $table = tables::get();
        $waiter = waiter::get();
        return view('generatebill', ['dishes' => $dish, 'tables' => $table, 'waiters' => $waiter]);
    }


    public function generate_Bill(Request $request)
    {
        // Validation
        $validatedData = $request->validate([
            'table_id' => 'required|exists:tables,id',
            'waiter_id' => 'required|exists:waiters,id',
            'dish_id.*' => 'required|exists:dishes,id',
            'quantity.*' => 'required|integer|min:1',
        ]);

        // Calculate total amount without GST
        $total = 0;
        foreach ($validatedData['dish_id'] as $key => $dishId) {
            $dish = Dish::find($dishId);
            $quantity = $validatedData['quantity'][$key];
            $total += $dish->price * $quantity;
        }

        // Calculate GST (5% of the total)
        $gst = $total * 0.05;

        // Add GST to the total amount
        $totalWithGst = $total + $gst;

        // Create a new bill record
        $bill = bills::create([
            'table_id' => $validatedData['table_id'],
            'waiter_id' => $validatedData['waiter_id'],
            'total' => $totalWithGst, // total amount including GST
        ]);

        // Create order items for the bill
        foreach ($validatedData['dish_id'] as $key => $dishId) {
            $dish = Dish::find($dishId);
            $quantity = $validatedData['quantity'][$key];
            $price = $dish->price;
            OrderItem::create([
                'bill_id' => $bill->id,
                'dish_id' => $dishId,
                'quantity' => $quantity,
                'price' => $price,
            ]);
        }

        // Load the bill with relationships
        $bl = bills::with('table', 'waiter', 'orderItems.dish')->find($bill->id);

        $subtotal = 0;

        foreach ($bl->orderItems as $orderItem) {
            $subtotal += $orderItem->quantity * $orderItem->price;
        }
        $billss = bills::with('table', 'waiter', 'orderItems.dish')->find($bill->id);
        $billss->total = $subtotal + ($subtotal * 0.05);
        $billss->save();

        return view('mainbill', ['bill' => $billss, 'subtotal' => $subtotal]);
    }


    public function editdish($id)
    {
        $dish = Dish::find($id);

        return view('editdish', ['dish' => $dish]);
    }

    public function edit_dish($id, Request $req)
    {
        $req->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
        ]);

        // Find the dish by its ID
        $dish = Dish::findOrFail($id);

        // Update dish details
        $dish->name = $req->name;
        $dish->price = $req->price;
        $dish->save();

        $record = new dishPriceRecord([
            'name' => $req->name,
            'price' => $req->price,
        ]);
        $record->save();

        return redirect('/dishes');
    }

    public function deleteDish($id)
    {
        Dish::destroy($id);
        return redirect('/dishes');
    }

    public function dishpricerecord()
    {
        $dish = dishPriceRecord::get();
        return view('dishpricerecord', ['dish' => $dish]);
    }

    public function orderhistory()
    {
        $orders = bills::with('table', 'waiter', 'orderItems.dish')->get();

        return view('orders', ['orders' => $orders]);
    }

    public function viewbill($id)
    {
        $bl = bills::with('table', 'waiter', 'orderItems.dish')->find($id);

        $subtotal = 0;

        foreach ($bl->orderItems as $orderItem) {
            $subtotal += $orderItem->quantity * $orderItem->price;
        }
        return view('mainbill', ['bill' => $bl, 'subtotal' => $subtotal]);
    }
}
