<?php

namespace App\Http\Controllers\Api;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerPostRequest;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $customers = Customer::all();
        return response()->json([
            'status' => 'success',
            'customers'=> $customers,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CustomerPostRequest $request)
    {
        $customer = Customer::create($request->all());

        return response()->json([
            'status' => 'success',
            'message'=> 'Customer created successfully',
            'customer' => $customer,
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        $customer->update($request->all());

        return response()->json([
            'status' => 'success',
            'message'=> 'Customer updated successfully',
            'customer' => $customer,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }


    public function search(Request $request)
    {
        $customers = Customer::where('name', 'like', '%'.$request->name.'%')->get();

        return response()->json([
            'status' => 'success',
            'customers'=> $customers,
        ]);
    }

    public function add(Request $request)
    {

        // Check email
        $hasCustomer = Customer::where('email', $request->email)->first();
        if($hasCustomer){
            return response()->json([
                'status' => false,
                'message'=> 'This customer already exists',
            ], 404);    
        }else{
            $customer = Customer::create($request->all());
        }
        

        return response()->json([
            'status' => true,
            'message'=> 'Customer created successfully',
            'customer' => $customer,
        ], 200);
    }

    public function login(Request $request)
    {
        $customer = Customer::where('key', $request->key)->where('email', $request->email)->where('password', $request->password)->where('active', true)->first();

        if ($customer) {
            return response()->json([
                'status' => true,
                'message'=> 'Customer logged in successfully',
                'customer' => $customer,
            ], 200);
        } else {
            return response()->json([
                'status' => false,
                'message'=> 'Customer not found',
            ], 404);
        }
    }

    public function auth_by_key(Request $request)
    {
        $customer = Customer::where('key', $request->key)->first();

        if ($customer) {
            return response()->json([
                'status' => true,
                'message'=> 'Customer logged in successfully',
                'customer' => $customer,
            ], 200);
        } else {
            return response()->json([
                'status' => false,
                'message'=> 'Customer not found',
            ], 404);
        }
    }

    public function activate_customer(Request $request){
        // dd($request->all());
        $customer = Customer::where('email', $request->email)->first();

        if($customer){
            $customer->update(['active' => $request->active]);
        }

      
        if ($customer) {
            return response()->json([
                'status' => true,
                'message'=> 'Customer activation changed successfully',
                'customer' => $customer,
            ], 200);
        } else {
            return response()->json([
                'status' => false,
                'message'=> 'Customer activation changed failed',
            ], 404);
        }
    }

    // Get all customer
    public function get_all_customer(){
        $customers = Customer::all();

        return response()->json([
            'status' => true,
            'message'=> 'Customer get successfully',
            'customers' => $customers,
        ], 200);
    }

    // Delete Customer 
    public function delete_customer(Request $request){
        $customer = Customer::where('id', $request->id)->first();

        if($customer){
            $customer->delete();
        }

        if ($customer) {
            return response()->json([
                'status' => true,
                'message'=> 'Customer deleted successfully',
                'customer' => $customer,
            ], 200);
        } else {
            return response()->json([
                'status' => false,
                'message'=> 'Customer deleted failed',
            ], 404);
        }
    }
}