<!--// this returns an output when we go here http://127.0.0.1:8000/hello
Route::get('/hello', function () {
return "Hello world";
});
// this returns the json at http://127.0.0.1:8000/people
Route::get('/people', function () {
return [
'Jack' => 'Plumber',
'Jan' => 'Piper',
'Jill' => 'Panhandler'
];
});
Route::get('/yeet', function () {
return "Yeet";
});
/*What this will do is when we go at http://127.0.0.1:8000/bikes we
grab the bikeHome in the views folder under resources*/
Route::get('/bikes', function () {
return view('bikeHome');
});

/*this is php syntax*/
Route::get('/shop/{id}', function ($id) {
$apples = "red";

return "<h2> shopping for bike id: $id $apples </h2>";
});
Route::get('/buy/{id?}', function ($id = null) {
$outMessage = "";
if ($id === null) {
$outMessage .= "Nothing";
} else if ($id === "water") {
$outMessage .= "got water";
} else {
$outMessage .= " Got $id";
}
return $outMessage;
});
// practicing sending data to a view
// so in the view, we set cap to mySize.
// you can string along many withs. sending multiple values
Route::get('/rows', function () {
$rows = 600;
$cols = 50;
$cap = $rows * $cols;
return view('size')->with('mySize', $cap)->with('row', $rows)->with('col', $cols);
});-->
