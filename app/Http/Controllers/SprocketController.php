<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\salesData;
use App\Models\Sprocket;
use Illuminate\Http\Request;

class SprocketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales = salesData::all();
        $customer = Customer::all();

        //return ( $animal );
        //return ( $categories );
        return view('viewSalesReport',
            ['sales' => $sales, 'customers' => $customer]);
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $req)
    {
        $sales = salesData::all();
        $customers = Customer::all();


        $s= $req['customer_item'];

        //        $s = $sales->item;

        return view('showData',
            ['s'=> $s,'customers'=>$customers, 'sales'=>$sales]);
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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Sprocket::find($id);
        $product->delete();
    }
}
