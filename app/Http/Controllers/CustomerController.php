<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

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
        return [
            "data" => $customers
        ];
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
    public function store(Request $request)
    {
        $request->validate([
            'userName',
            'password',
            'name',
            'gender',
            'phoneNumber',
            'email',
            'status',
            'address',
        ]);

        $userName = $request->json("userName");
        if (Customer::where("userName", "=",$userName )->count() >0) {
            return [
                "status" => 0,
                "mess" => "Username đã tồn tại!"
            ];
        }
        $customer = Customer::create($request->json()->all());
        return [
            "status" => 1,
            "data" => $customer,
            "mess" => "Tạo account thành công!"
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = Customer::find($id);

        return [
            "data" =>  $customer
        ];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name',
            'gender',
            'phoneNumber',
            'email',
            'status',
            'address',
        ]);

        $customer = Customer::find($id);
        
        $customer->name = $request->json("name");
        $customer->gender = $request->json("gender");
        $customer->phoneNumber = $request->json("phoneNumber");
        $customer->email = $request->json("email");
        $customer->status = $request->json("status");
        $customer->address = $request->json("address");

        $customer->save();

        return [
            "data" => $customer
        ];

    }

     /**
     * Soft Delete the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $customer = Customer::find($id)->delete();

        return [
            "status" => 1,
            "data" =>  $customer,
            "msg" => "Phone soft delete successfully"
        ];
    }

     /**
     * Restore one the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        Customer::withTrashed()->find($id)->restore();

        return [
            "status" => 1,
            "msg" => "Restore one successfully"
        ];
    }

     /**
     * Restore one the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restoreAll()
    {
        Customer::onlyTrashed()->restore();

        return [
            "status" => 1,
            "msg" => "Restore all successfully"
        ];
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
