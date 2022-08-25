<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Category;
use App\Models\Customer;
use App\Models\salesData;
use App\Models\Sprocket;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $sales = salesData::all();
        //return $animals;
        $customer = Customer::all();

        return view('salesAll',
            ['sales' => $sales,
                'customers' => $customer] );
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
    public function store(Request $req)
    {

        //$sprocket = Sprocket::find($req['item']);

/*        $sprocket->count = $sprocket-> count - $sales->sold;*/

        $req->validate([
            'id' => 'required|numeric',
            'date' => 'required|date',
            'time' => 'required',
            'sold' => 'required|numeric',
            'customer_id' => 'required|numeric',
            'item' => 'required|string',
            'price' => 'required'

        ]);
        $data = new salesData();
        $data->date = $req['date'];
        $data->time = $req['time'];
        $data->customer_id = $req['customer_id'];
        $data->sold = $req['sold'];
        $data->item = $req['item'];
        $data->price = $req['price'];
        $data->save();


        return redirect('/sales');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sales = salesData::find($id);
        $customer = Customer::all();
        //return ( $animal );
        //return ( $categories );
        return view('salesUpdate',
            ['sales' => $sales,
                'customers' => $customer]);
        //  return "inside edit!";
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $req->validate([
            'id' => 'required',
            'date' => 'required',
            'time' => 'required',
            'customer_id' => 'required',
            'item' => 'required',
            'sold' => 'required',
            'price' => 'required',

        ]);
        //  $name = $req['name'];
        $data = salesData::find($id);
        $data->date = $req['date'];
        $data->time = $req['time'];
        $data->customer_id = $req['customer_id'];
        $data->sold = $req['sold'];
        $data->item = $req['item'];
        $data->price = $req['price'];
        $data->save();
        return redirect('/sales');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        salesData::find($id)->delete();
        return redirect('/sales');
        //
    }
}
