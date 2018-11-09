<?php

namespace App\Http\Controllers;

use App\Product;
use App\Services\ProductService;
use Illuminate\Http\Request;
use Mockery\Exception;

class ProductController extends Controller
{
    private $productService;

    public function __construct(
        ProductService $productService
    )
    {
        $this->productService = $productService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {

            $product = $this->productService->create($request->all());

            return response([
                'status' => 200,
                'data' => $product,
            ]);

        } catch (\Exception $e) {
            return response([
                'status' => 500,
                'data' => '',
                'message' => $e->getMessage(),
                'trace' => $e->getTrace()
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
