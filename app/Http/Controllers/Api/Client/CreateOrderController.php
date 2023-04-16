<?php

namespace App\Http\Controllers\Api\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Client\CreateOrderRequest;
use Illuminate\Http\Request;
use Responsibles\Client\CreateOrderResponsable;

class CreateOrderController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(CreateOrderRequest $request, CreateOrderResponsable $createOrderResponsable)
    {
        return $createOrderResponsable->toResponse($request);;
    }
}