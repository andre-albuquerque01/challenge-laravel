<?php

namespace App\Service;

use App\Exceptions\GeneralExceptionCatch;
use App\Exceptions\ProductException;
use App\Http\Resources\GeneralResource;
use App\Http\Resources\ProductResource;
use App\Models\Product;

class ProductService
{
    public function index()
    {
        try {
            return ProductResource::collection(Product::get());
        } catch (\Exception $e) {
            throw new GeneralExceptionCatch($e->getMessage());
        }
    }

    public function store(array $data)
    {
        try {
            Product::create($data);
            return new GeneralResource(['message' => 'success']);
        } catch (\Exception $e) {
            throw new GeneralExceptionCatch($e->getMessage());
        }
    }
    public function show(int $id)
    {
        try {
            $product = Product::where('idProduct', $id)->first();
            if (!$product) {
                throw new ProductException('Product not found');
            }
            return new ProductResource($product);
        } catch (\Exception $e) {
            throw new GeneralExceptionCatch($e->getMessage());
        }
    }

    public function update(array $data, int $id)
    {
        try {
            $product = Product::where('idProduct', $id)->first();
            if (!$product) {
                throw new ProductException('Product not found');
            }
            $product->update($data);
            return new GeneralResource(['message' => 'success']);
        } catch (\Exception $e) {
            throw new GeneralExceptionCatch($e->getMessage());
        }
    }
    public function destroy(int $id)
    {
        try {
            Product::where('idProduct', $id)->delete();
            return new GeneralResource(['message' => 'success']);
        } catch (\Exception $e) {
            throw new GeneralExceptionCatch($e->getMessage());
        }
    }
}
