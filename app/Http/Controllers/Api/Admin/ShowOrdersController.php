<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Responsibles\Admin\ShowOrdersResponsable;

class ShowOrdersController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, ShowOrdersResponsable $showOrdersResponsable)
    {
        return $showOrdersResponsable->toResponse($request);
    }
}
