<?php

namespace App\Http\Controllers\Api\Authentication\Client;

use App\Http\Controllers\Controller;
use App\Responsibles\Client\ClientLogoutResponsable;
use Illuminate\Http\Request;

class ClientLogoutController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, ClientLogoutResponsable $clientLogoutResponsable): Responsable
    {
        return $clientLogoutResponsable->toResponse($request);
    }
}
