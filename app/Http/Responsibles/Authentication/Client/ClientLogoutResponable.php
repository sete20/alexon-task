<?php


namespace Responsibles\Authentication\Client;

use App\Models\User;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Support\Facades\Auth;

class ClientLogoutResponable implements Responsable
{

    public function toResponse($request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json([
            'status' => true,
            'success' => 'Logged Out Successfully',
        ], 200);
    }
}
