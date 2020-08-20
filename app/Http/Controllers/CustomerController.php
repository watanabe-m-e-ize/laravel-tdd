<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customer = ['id' => '1', 'name' => '太郎'];
        return $customer;
    }
}
