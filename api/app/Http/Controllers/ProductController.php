<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index()  {
        $products = ProductResource::collection(Product::all());
        return response()->json([
            'message' => 'Shop Products',
            'data'=> $products
        ]);
    }
    public function createProduct(Request $request)  {
        // ++++++++++++++++++++++++ VALIDATING INPUT
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'min:3', 'max:255'],
        ]);
        #Failure response of Validation
        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation fails',
                'errors' => $validator->errors()
            ], 422);
        }
        $data = $validator->validated();
        $newProduct = Product::create($data);
        return response()->json([
            'message' => 'Product Created Successful',
            'data' => $newProduct
        ], 200);
    }
    public function retriveProduct(Request $request)  {
            // return response()->json(['respond'=> 'Message']);
        $product = Product::where('id', $request['productId'])->first();
        return response()->json([
            'message' => 'Shop Product',
            'data'=> $product
        ]);
    }
    public function updateProduct()  {
        $products = ProductResource::collection(Product::all());
        return response()->json([
            'message' => 'Shop Products',
            'data'=> $products
        ]);
    }
    public function delete()  {
        $products = ProductResource::collection(Product::all());
        return response()->json([
            'message' => 'Shop Products',
            'data'=> $products
        ]);
    }
    public function searchProduct(Request $request)  {
        $query = $request->input('query');
        $products = ProductResource::collection(Product::where('name', 'like', "%$query%")->get());
        return response()->json([
            'message' => 'Shop Products',
            'data'=> $products
        ]);
    }
}
