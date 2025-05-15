<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::where('user_id', auth()->id())->get();
        return inertia('Order/Index', ['orders' => $orders]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'start_location' => 'required|string',
            'end_location' => 'required|string',
            'car_type' => 'required|string',
            'pickup_time' => 'required|date',
        ]);

        Order::create([
            'user_id' => auth()->id(),
            'start_location' => $request->start_location,
            'end_location' => $request->end_location,
            'car_type' => $request->car_type,
            'pickup_time' => $request->pickup_time,
            'status' => 'pending',
        ]);

        return redirect()->route('orders.index');
    }
}
