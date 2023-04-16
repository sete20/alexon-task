<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Admin\CreateProductRequest;
use Illuminate\Http\Request;
use Responsibles\Admin\CreateProductResponsable;

class CreateProductController extends Controller
{
    public function __invoke(CreateProductRequest $request, CreateProductResponsable $createProductResponsable)
    {
        return $createProductResponsable->toResponse($request);
    }
}