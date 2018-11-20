<?php

namespace App\Services;

use App\CategoryProduct;

class CategoryService
{
    private $categoryProduct;

    public function __construct(
        CategoryProduct $categoryProduct
    )
    {
        $this->categoryProduct = $categoryProduct;
    }

    public function getProductsCategories()
    {
        $categories = $this->categoryProduct->all();

        return $categories;
    }
}