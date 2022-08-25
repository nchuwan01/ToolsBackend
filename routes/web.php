<?php

use App\Models\Customer;
use App\Models\salesData;
use App\Models\Sprocket;

Route::resource('creatures', \App\Http\Controllers\CreatureController::class);
Route::resource('customers', \App\Http\Controllers\CustomerController::class);
Route::resource('sales', \App\Http\Controllers\SalesController::class);
Route::resource('product', \App\Http\Controllers\SprocketController::class);



Route::get('/sprocketData', function(){
    $a= Sprocket::all();
    return $a;
});




/*use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;


Route::resource('/items', \App\Http\Controllers\ItemController::class);

Route::get("/", function(){
    $list=[];
    $list[]=25;
    $list[]=55;
    $list[]=122;
    $list[]=3.14;

    return(View::make('review1')->with('myList',$list));
});
Route::get("/inventory", function(){
    /*  $items=array('hammers'=> 5,'Wrench'=>10,'Saw'=>199, 'Vice'=>3);

      $items['hammers'] += 1;*/
/*    $items=array(4,5,'Joe',10,22,121);
    $items[]=252;
    //$hammerCt=$items['hammers'];
    return (View::make('review2')->with('myList',$items));

});
Route::get('/home', function() {
    return View::make('aurora_home');
});
Route::get('/contact', function(){
   return View::make('aurora_contact');
});
Route::get('/about', function(){
    return View::make('aurora_about');
});
Route::get('/animals', function(){
    return View::make('animals_home');
});
Route::get('/animalsFetch',  [AnimalController:: class, 'fetchAnimal' ]);*/

    //return "made it fetch!";



/*use Illuminate\Support\Facades\Route;
use App\Models\Blog;
use App\models\User;
use App\Models\P2st;

Route::get('/posts', function () {
    $posts = P2st::all();
    return view('postss',[
        'posts' => $posts
    ]);
    return $posts;
});
Route::get("post/{id}", function($id){
    $post = P2st::find($id);
    if ( $post == null ){
        return [
            'id' => $id,
            'error' => true,
            'msg' => "Error Id:$id Not Found"
        ];
    }
    return view('blog', [
        'post' => $post
    ]);
});
Route::get('/users', function () {
    $user = User::all();

    return $user;
});
Route::get("/users/{id}",function($id){
    $user = User::find($id);
    if ( $user == null ){
        return [
            'id' => $id,
            'error' => true,
            'msg' => "Error Id:$id Not Found"
        ];
    }
    return $user;
});
Route::get('/', function () {
    //Route::get("/", function(){
        //return view('posts');
    //})
    //When url is the main url without any changes, a function executes that will return view("posts")
    //This then goes to view folder and look for posts.blade.php to execute.
    return view('posts');
});
Route::get('/post/{post}', function ($tok) {
    $post = BLOG::find($tok);
    return $post;
});
/*Route::get('/post/{post}', function ($tok) {
    $path= __DIR__ . "/../resources/blogData/{$tok}.html";
    if(!file_exists($path)) {
//        dd("File Not Exist ptth: $path")
        return redirect("/");
    }
    cache()-> remember("post2.{$tok}",5,function() use($path) {
        var_dump("Not Cacheing path: $path");
        $post = file_get_contents($path);
        return $post;
    });
    return view('post',[
        'post' => $post

        ]);
    //return view('posts');
});*/






//route Constraint
/*Route::get('/bike/{id}', function($id) {
    return "ID: $id";
})->whereNumber("id");*/


/*})->where('id','[0-9]|[0-9][0-9]');*/

