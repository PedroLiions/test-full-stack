<?php

namespace App\Services;

use App\Product;
use App\CategoryProduct;


class ProductService
{
    private $product;
    private $category;

    public function __construct(
        Product $product,
        CategoryProduct $categoryProduct
    )
    {
        $this->product = $product;
        $this->category = $categoryProduct;
    }

    public function create($inputs)
    {
        $product = $this->product->fill($inputs);
        $product->save();
        $product->categories()->sync($inputs['categories']);

        $product->load('categories');

        return $product;
    }
}