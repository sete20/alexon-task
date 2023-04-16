<?php


namespace Responsibles\Authentication\Admin;

use App\Models\Admin;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Support\Facades\Auth;

class AdminLogoutResponable implements Responsable
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
