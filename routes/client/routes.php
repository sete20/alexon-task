<?php

use App\Http\Controllers\Api\Client\CreateOrderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// route::post('show/orders', ShowClientOrdersController::class);
route::post('create/order', CreateOrderController::class);
route::post('show/orders', ShowClientOrdersController::class);
