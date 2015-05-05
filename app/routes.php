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


      
Route::get('/results', function(){
$keyword = Input::get('words');
$models = Word::where('word', '=', $keyword)->orderby('word')->take(10)->skip(0)->get();
$count = count($models);
        
        return View::make('/results')->with("contents", $models)->with("counts", $count);
});




Route::any('/dictionary/index', function(){

$keyword = Input::get('auto');        
 $models = Word::where('word', '=', $keyword)->orderby('word')->take(10)->skip(0)->get();
 $count = count($models);
return View::make('/Dictionary/index')->with("contents", $models)->with("counts", $count);

});





Route::any('index', function(){
 
 $keyword = Input::get('auto');        
 $models = Word::where('word', '=', $keyword)->orderby('word')->take(10)->skip(0)->get();
 $count = count($models);
 return View::make('Dictionary.index')->with("contents", $models)->with("counts", $count);

});




Route::POST('words/means/', function(){
 
 $keyword = Str::lower(Input::get('auto'));        
 $models = Word::where('word', '=', $keyword)->orderby('word')->take(10)->skip(0)->get();
 $count = count($models);
 return View::make('Dictionary.definition.means')->with("contents", $models)->with("counts", $count); 

});



// 3: create this route to process the user input (Input::get('term')) in the database query.

Route::any('getdata', function(){

 $term = Str::lower(Input::get('term'));
 
 // 4: check if any matches found in the database table 

 $data = DB::table("words")->distinct()->select('word')->where('word', 'LIKE', $term.'%')->groupBy('word')->take(10)->get();
 foreach ($data as $v) {
 $return_array[] = array('value' => $v->word);
  }
  // if matches found it first create the array of the result and then convert it to json format so that 
  // it can be processed in the autocomplete script
 return Response::json($return_array);

 });





Route::any('/thesaurus', function(){
 
 $keyword = Str::lower(Input::get('auto'));        
 $models = Word::where('word', '=', $keyword)->orderby('word')->take(10)->skip(0)->get();
 $count = count($models);
 return View::make('Dictionary.synonymns.synonyms')->with("contents", $models)->with("counts", $count);

});








