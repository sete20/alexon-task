<?php

namespace Responsibles\Admin;

use App\Http\Resources\ProductResource;
use App\Models\Admin;
use App\Models\Product;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Support\Facades\Auth;

class CreateProductResponsable implements Responsable
{

    public function toResponse($request)
    {
        $product = Product::create($request->only(['name', 'price']));
        foreach ($request->images as $image) {
            $product->addMedia($image)->toMediaCollection('images');
        }
        return  response()->json([
            'status' => 'success',
            'message' => 'product created successfully', 'product' =>  new ProductResource($product)
        ], 200);
    }
}
