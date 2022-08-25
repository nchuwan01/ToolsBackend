<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Category;
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

        $customer = Customer::all();
        //return $animals;
        return view('customerAll',
            ['customer' => $customer]);
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
            'id' => 'required|numeric|min:5',
            'name' => 'min:5|alpha',
            'address' => 'min:5',
            'company' => 'min:5|alpha'
        ]);
        $customer = new Customer();
        $customer->id = $request['id'];
        $customer->name = $request['name'];
        $customer->address = $request['address'];
        $customer->company = $request['company'];

        $customer->save();
        return redirect('/customers');

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
        $customer = Customer::find($id);
        //return ( $animal );
        //return ( $categories );
        return view('customerUpdate',
            ['customer' => $customer]);

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
            'id' => 'required|numeric|min:5',
            'name' => 'required|alpha|min:5',
            'address' => 'required',
            'company'=> 'required|min:5|alpha'
        ]);
        //  $name = $req['name'];
        $customer = Customer::find($id);
        $customer->id = $req['id'];
        $customer->name = $req['name'];
        $customer->address = $req['address'];
        $customer->company = $req['company'];
        $customer->save();
        return redirect( '/customers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Customer::find($id)->delete();
        return redirect('/customers');
        //
    }
}
