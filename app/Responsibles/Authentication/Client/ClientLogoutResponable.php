<?php


namespace App\Responsibles\Client;

use App\Models\User;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Support\Facades\Auth;

class ClientLogoutResponsable implements Responsable
{

    public function toResponse($request)
    {
    }
}
