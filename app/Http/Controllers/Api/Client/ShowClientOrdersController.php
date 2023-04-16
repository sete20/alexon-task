<?php

namespace App\Http\Controllers\Api\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Responsibles\Client\ShowClientOrdersResponsable;

class ShowClientOrdersController extends Controller
{
    public function __invoke(request $request, ShowClientOrdersResponsable $showClientOrdersResponsable)
    {
        return $showClientOrdersResponsable->toResponse($request);;
    }
}
