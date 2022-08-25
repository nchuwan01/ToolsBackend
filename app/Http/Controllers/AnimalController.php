<?php
namespace App\Http\Controllers;
use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{

    function fetchAnimal(Request $req){
        $sound= $req['sound'];
        $animals=Animal::where("sound","=","$sound")->get();

        return view('animals_home', ['animals'=> $animals]);
    }

    function index()
    {
       // return "Made it to the controller";
        $animals = Animal::all();


        return view('animals',['animals'=>$animals]);
    }
    function create(Request $req){

        $req->validate([
           'name'=>'required',
            'sound'=>'required',
            'count'=>'required|numeric|max:50|min:1'

        ]);

        $animal = new Animal();
        $animal->name=$req['name'];
        $animal->sound=$req['sound'];
        $animal->count=$req['count'];
        $animal->save();
        return redirect('/animals');
    }

  /*  function doPatch(Request $req, $id)
    {
        $name=$req['name'];
        $theAnimal=Animal::find($id);

        $theAnimal->name=$req['name'];
        $theAnimal->sound=$req['sound'];
        $theAnimal->count=$req['count'];
        $theAnimal->save();
        return redirect("animals");


    }*/
  /*  function doPut($id)
    {
        $animal = Animal::find($id);
        return view("animals",
        ['animals'=>$animal]);
    }*/

    function delete($id)
    {
        Animal::find($id)->delete();
        return redirect("/animals2");
    }


    function show($theAnimal){
        return "The Animal is $theAnimal says hi";
    }
    function showSound($theAnimal,$sound){
       // return "The Animal is $theAnimal sound: $sound says hi";
        return view("animals2", ['animal'=> $theAnimal, 'sound'=> $sound]);
    }
    function showAnimalInfo($theAnimal, $sound, $age)
    {
        return view("animals2",['animal'=>$theAnimal, 'sound'=>$sound,'age'=>$age]);
    }

    function showAll(){
        return "ShowAll Works";
    }

}
