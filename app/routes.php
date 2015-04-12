<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{

	return View::make('hello');
});




Route::get('/results', 'SearchController@autocomplete');


      
Route::get('/results', function(){
    $keyword = Input::get('words');        
       $models = Word::where('word', '=', $keyword)->get();
        $count = count($models);
        
        return View::make('/results')->with("contents", $models)->with("counts", $count);
});







Route::any('/Dictionary/index', function(){

return View::make('/Dictionary/index');


});


Route::any('autocomplete', function()
{
 
 $keyword = Input::get('auto');        
       $models = Word::where('word', '=', $keyword)->get();
        $count = count($models);
 
return View::make('simple_search_autocomplete.autocomplete')->with("contents", $models)->with("counts", $count);
});

Route::any('getdata', function()
{
$term = Input::get('term');
$data = DB::table("words")->where('word', 'LIKE', $term.'%')->get();
$return_array = array();
foreach ($data as $v) {




return Response::json(array('value' => $v->word ));
}
});