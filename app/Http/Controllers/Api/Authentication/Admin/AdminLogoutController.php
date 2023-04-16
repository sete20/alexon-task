<?php

namespace App\Http\Controllers\Api\Authentication\Admin;

use App\Http\Controllers\Controller;
use App\Responsibles\Admin\AdminLogoutResponsable;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Request;

class AdminLogoutController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, AdminLogoutResponsable $adminLogoutResponsable): Responsable
    {
        return $adminLogoutResponsable->toResponse($request);
    }
}
