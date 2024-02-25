<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    //
    public function setOrder(Request $request)  {
                // -----VALIDATING INPUT
                $validator = Validator::make($request->all(), [
                    'user_id' => ['required'],
                    'quotedPrice' => ['required'],
                ]);
                #Failure response of Validation
                if ($validator->fails()) {
                    return response()->json([
                        'message' => 'Validation fails',
                        'errors' => $validator->errors()
                    ], 422);
                }
                $code = ['code'=> `code-02` ];
                $data = array_merge($validator->validated(),$code);
                dd($data);
                $newOrder = Order::create($data);
                return response()->json([
                    'message' => 'Successful created',
                    'data' => $newOrder
                ], 200);
    }
}
