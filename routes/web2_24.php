<?php
use App\Http\Controllers\AnimalController;
Route::get('/', function(){
    return "Hello there!";
});

Route::get('animals',[AnimalController::class,'index']);
Route::post('animals',[AnimalController::class,'create']);

Route::delete("animals/{id}", [AnimalController::class,'delete']);


Route::get('blah', function()
{
    return "blah working!";
});
Route::get("animals/{animal}", [AnimalController::class, 'show']);
Route::get("animals/{animal}/{sound}", [AnimalController::class, 'showSound']);

/*Route::put("animals/{animal}", [AnimalController::class, 'doPut']);
Route::put("animals", [AnimalController::class, 'doPatch']);*/



Route::get("animals/{animal}/{sound}/{age}", [AnimalController::class, 'showAnimalInfo']);
Route::get( 'all', [AnimalController::class, 'showAll']);





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

