<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function show() {
        $data = Customer::with('product')->get();
        
        return response()->json([
            'success' => true,
            'data' => $data
        ]);
    }

    public function destroy($id) {
        Customer::destroy($id);

        return response()->json([
            'success' => true,
            'message' => 'Customer deleted successfully'
        ]);
    }
}
