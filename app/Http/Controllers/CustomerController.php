<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index($customer_id = null)
    {
        $customer = [];
        
        if (!empty($customer_id)) {
         $customer = \App\Customer::select()->where('id', $customer_id)->first();   
        }
        return response()->json($customer);
    }
}
