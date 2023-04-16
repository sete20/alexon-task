<?php

use App\Http\Controllers\Api\Admin\CreateProductController;
use App\Http\Controllers\Api\Admin\ShowOrdersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

route::post('create/product', CreateProductController::class);
route::post('show/orders', ShowOrdersController::class);