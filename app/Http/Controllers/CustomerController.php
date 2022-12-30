<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'product_id'    => 'required',
            'name'          => 'required',
            'address'       => 'required',
            'payment_proof' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Error pengisian form'
            ]);
        }
        
        Customer::create([
            'product_id'    => $request->product_id,
            'name'          => $request->name,
            'address'       => $request->address,
            'payment_proof' => $request->payment_proof,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Pesanan sedang diproses'
        ]);
    }

    public function update(Request $request, $id) {
        $data = Customer::find($id);
        $data->update($request->all());

        return response()->json([
            'data' => $data
        ]);
    }
}
