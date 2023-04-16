<?php

namespace App\Http\Controllers\Api\Authentication\Admin;

use App\Http\Controllers\Controller;
use Responsibles\Authentication\Admin\AdminLogoutResponable;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Request;

class AdminLogoutController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, AdminLogoutResponable $adminLogoutResponable)
    {
        return $adminLogoutResponable->toResponse($request);
    }
}
