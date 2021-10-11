<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return response()
            ->json([
                'status' => 'ok',
                'total' => count($products),
                'message' => 'Show all products.',
                'items' => $products
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $this->doValidation($request);
        if ($validation->errors()->count()){
            return $this->responseError(
                'invalid field(s) provided!',
                $validation->errors(),
            );
        }
        try {
            $newProduct = Product::create($validation->valid());
            return $this->responseSuccess('Successfully created product.', $newProduct);
        } catch (\Throwable $th) {
            return $this->responseError(
                'Internal Server Error',
                $th->getMessage(),
                500
            );
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return $this->responseSuccess('Show single product.', $product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $validation = $this->doValidation($request);
        if ($validation->errors()->count()) {
            return $this->responseError(
                'invalid field(s) provided!',
                $validation->errors(),
            );
        }
        try {
            $product->update($validation->valid());
            $product->refresh();
            return $this->responseSuccess('Successfully updated product.', $product);
        } catch (\Throwable $th) {
            return $this->responseError(
                'Internal Server Error',
                $th->getMessage(),
                500
            );
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return $this->responseSuccess('Successfully deleted product.');
    }

    private function doValidation(Request $request)
    {
        return validator($request->all(), [
            'name' => 'required|string|max:191',
            'price' => 'required|integer|min:0',
            'description' => 'required|string|max:255'
        ]);
    }

    private function responseSuccess($message = null, $data = null)
    {
        $content = [
            'status' => 'ok',
            'message' => $message
        ];
        if ($data) $content['data'] = $data;
        return response()
            ->json($content);
    }

    private function responseError($message, $errors = null, $code = 422)
    {
        return response()
            ->json([
                'status' => 'error',
                'message' => @$message ?? 'Internal server error!',
                'errors' => $errors
            ], $code);
    }
}
