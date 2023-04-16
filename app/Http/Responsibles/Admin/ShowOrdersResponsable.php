<?php

namespace Responsibles\Admin;

use App\Http\Resources\OrderResource;
use App\Models\Admin;
use App\Models\Order;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Support\Facades\Auth;

class ShowOrdersResponsable implements Responsable
{

    public function toResponse($request)
    {
        return response()->json(OrderResource::collection(Order::paginate(10)));
    }
}
