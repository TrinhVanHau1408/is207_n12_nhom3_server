<?php

namespace App\Http\Controllers;
use App\Models\Phone;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phones = Phone::all();
        return response()->json( $phones);
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
            'name',
            'categoryId',
            'imgUrl',
            'quantity',
            'priceSale',
            'description',
            'ramId',
            'romId',
            'colorId',
            'sim',
            'screen',
            'camera',
        ]);

        $phone = Phone::create($request->all());

        return [
            "status" => 1,
            "data" => $phone,

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
        $phone = Phone::find($id);
        return response()->json($phone);
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
            'categoryId',
            'imgUrl',
            'quantity',
            'priceSale',
            'description',
            'ramId',
            'romId',
            'colorId',
            'sim',
            'screen',
            'camera',
        ]);

        $phone = Phone::find($id);

        if (!$phone) return [
            "status" => 0,
            "msg" => "Blog update failure"
        ];

        $phone->name = $request->name;
        $phone->categoryId = $request->categoryId;
        $phone->imgUrl = $request->imgUrl;
        $phone->quantity = $request->quantity;
        $phone->priceSale = $request->priceSale;
        $phone->description = $request->description;
        $phone->ramId = $request->ramId;
        $phone->romId = $request->romId;
        $phone->colorId = $request->colorId;
        $phone->sim = $request->sim;
        $phone->screen = $request->screen;
        $phone->camera = $request->camera;

        $phone->save();

        return [
            "status" => 1,
            "data" => $phone,
            "msg" => "Blog updated successfully"
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
        $phone = Phone::find($id);
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
