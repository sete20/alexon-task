<?php

namespace App\Http\Controllers\Api\Authentication\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Authentication\Client\ClientRegisterRequest;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Request;

class ClientRegisterController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(ClientRegisterRequest $request, ClientRegisterRequest $clientRegisterRequest): Responsable
    {
        return $clientRegisterRequest->toResponse($request);
    }
}
