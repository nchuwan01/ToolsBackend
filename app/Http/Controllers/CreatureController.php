<?php
namespace App\Http\Controllers;
use App\Models\Animal;
use App\Models\Category;

use Illuminate\Http\Request;

class CreatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animals = Animal::all();
        //return $animals;
      $categories = Category::all();
        return view('creaturesAll',
            ['animals' => $animals,
                'categories' => $categories ] );
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "inside Create!";

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


        $req->validate([
            'name' => 'required',
            'sound' => 'required',
            'count' => 'required|numeric'
        ]);
        $animal = new Animal();
        $animal->name = $req['name'];
        $animal->sound = $req['sound'];
        $animal->count = $req['count'];
        $animal->category_id = $req['category'];
        $animal->save();
        return redirect('/creatures');

        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "inside show!";

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
        $animal = Animal::find($id);
        $categories = Category::all();
        //return ( $animal );
        //return ( $categories );
        return view('creaturesUpdate',
            ['animal' => $animal,
                'categories' => $categories]);
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
            'name' => 'required',
            'sound' => 'required',
            'count' => 'required|numeric'
        ]);
      //  $name = $req['name'];
        $theAnimal = Animal::find($id);
        $theAnimal->name = $req['name'];
        $theAnimal->sound = $req['sound'];
        $theAnimal->count = $req['count'];
        $theAnimal->category_id = $req['category'];
        $theAnimal->save();
        return redirect( 'creatures');
        //return "inside update!";

        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Animal::find($id)->delete();
        return redirect('/creatures');
        //return "inside destroy!";

        //
    }
}
