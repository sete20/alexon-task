<?php

namespace App\Http\Controllers\Api\Authentication\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Authentication\Admin\AdminLoginRequest;
use App\Responsibles\Admin\AdminLoginResponsable;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(AdminLoginRequest $adminLoginRequest, AdminLoginResponsable $adminLoginResponsable): Responsable
    {
        return $adminLoginResponsable->toResponse($adminLoginRequest);
    }
}
