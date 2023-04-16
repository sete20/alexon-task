<?php


namespace App\Responsibles\Admin;

use App\Models\Admin;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Support\Facades\Auth;

class AdminLoginResponsable implements Responsable
{

    public function toResponse($request)
    {
        if (!Auth::attempt($request->only(['email', 'password']))) {
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
