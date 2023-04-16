<?php

namespace Responsibles\Client;

use App\Http\Resources\OrderResource;
use App\Models\Admin;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Support\Facades\Auth;

class CreateOrderResponsable implements Responsable
{

    public function toResponse($request)
    {
        $total_price = Product::whereIn('id', $request->products_id)->sum('price');
        $order = Order::create([
            'user_id' => $request->user()->id,
            'total_price' => $total_price
        ]);
        $order->products()->attach($request->products_id);
        return response()->json([
            'status' => 'success',
            'message' => 'order created successfully',
            'data' => new OrderResource($order)
        ], 200);
    }
}
