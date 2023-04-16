<?php

namespace App\Http\Controllers\Api\Authentication\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Authentication\Client\ClientLoginRequest;
use Responsibles\Authentication\Client\ClientLoginResponable;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Request;

class ClientLoginController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(ClientLoginRequest $adminLoginRequest, ClientLoginResponable $clientLoginResponable)
    {
        return $clientLoginResponable->toResponse($adminLoginRequest);
    }
}
