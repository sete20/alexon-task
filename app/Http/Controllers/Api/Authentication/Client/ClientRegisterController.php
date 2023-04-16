<?php

namespace App\Http\Controllers\Api\Authentication\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Authentication\Client\ClientRegisterRequest;
use Responsibles\Authentication\Client\ClientRegisterResponable;
use Illuminate\Contracts\Support\Responsable;

class ClientRegisterController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(ClientRegisterRequest $clientRegisterRequest, ClientRegisterResponable $clientRegisterResponable)
    {
        return $clientRegisterResponable->toResponse($clientRegisterRequest);
    }
}
