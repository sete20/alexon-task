<?php

namespace Responsibles\Client;

use App\Http\Resources\OrderResource;
use App\Models\Admin;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Support\Facades\Auth;

class ShowClientOrdersResponsable implements Responsable
{

    public function toResponse($request)
    {
        return response()->json(OrderResource::collection($request->user()->orders()->paginate(10)));
    }
}
