<?php

namespace App\Http\Controllers\Api\Authentication\Client;

use App\Http\Controllers\Controller;
use Responsibles\Authentication\Client\ClientLogoutResponable;
use Illuminate\Http\Request;

class ClientLogoutController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, ClientLogoutResponable $clientLogoutResponable)
    {
        return $clientLogoutResponable->toResponse($request);
    }
}
