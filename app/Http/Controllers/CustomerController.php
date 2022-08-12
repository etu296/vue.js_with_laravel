<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index() {
        $customers = Customer::all()->toArray();
        return array_reverse($customers);
    }
    public function store(Request $request) {
        $customers = new Customer([
            'name' => $request->input('name'), 
            'email' => $request->input('email'), 
            'image' => $request->input('image') ,
            'gender' => $request->input('gender') ,
            'skill' => $request->input('skill') 
        ]);
        $customers->save();
        return response()->json('customer created!');
    }

    public function update($id, Request $request) {
        $customers = Customer::find($id);
        $customers->update($request->all());
        return response()->json('customers updated!');
    }

    public function destroy($id) {
        $customers = Customer::find($id);
        $customers->delete();
        return response()->json('customers deleted!');
    }
}
