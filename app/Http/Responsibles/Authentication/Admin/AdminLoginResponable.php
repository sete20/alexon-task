<?php

namespace Responsibles\Authentication\Admin;

use App\Models\Admin;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Support\Facades\Auth;

class AdminLoginResponable implements Responsable
{

    public function toResponse($request)
    {
        if (!Auth::guard('admin')->attempt($request->only(['email', 'password']))) {
            return response()->json([
                'status' => false,
                'message' => 'Email & Password does not match with our record.',
            ], 401);
        }

        $user = Admin::where('email', $request->email)->first();

        return response()->json([
            'status' => true,
            'message' => 'User Logged In Successfully',
            'token' => $user->createToken("API TOKEN")->plainTextToken
        ], 200);
    }
}
