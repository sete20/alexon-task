<?php

namespace App\Http\Controllers\Api\Authentication\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Authentication\Admin\AdminLoginRequest;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Request;
use Responsibles\Authentication\Admin\AdminLoginResponable;

class AdminLoginController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(AdminLoginRequest $adminLoginRequest, AdminLoginResponable $adminLoginResponable)
    {
        return $adminLoginResponable->toResponse($adminLoginRequest);
    }
}
