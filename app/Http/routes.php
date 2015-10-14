<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::resource('queries', 'QueryController');

Route::get('/', function () {
    return view::make('index');
});
Route::post('/', function () {
    $keyword =input::get('keyword');
});
//querry zip_code
$city=city::where('title', 'LIKE', '%' . $query . '%')->get();
  var_dump('search result');

  foreach ($city as $city) {
  	var_dump($city->title)
  	
  



//Route::get('/test', function () {
   // return "This is my test string";
//});

//Route::get('/about', function () {
    //return "This is the about page";
//});
//Route::controller('/movies','MoviesController');
//Route::get('add_movie', function () {
   // return view('add_movie');
//});
//Route::get('/add_movie','MoviesController@getCreate');
//return view('add_movie');


//Route::get('/movies', function () {
	//movies=\App\Movie::where('title','=','summertime')->get();
	//$movies=\App\Movie::where('rating','>',2)->get(); //select * from movies where rating > 2
	//return $movies;
	//$movie=new \App\Movie();
	//$movie->title='Akirachix';
	//$movie->genre='awesome';
	//$movie->rating=5;
	//$movie->save();
	//$movie= \App\Movie::find(5);
	//$movie->genre="superb";
	//$movie->save();
	//return $movie;
	//$movies=\App\Movie::all();
	//return view('movies',['movies'=>$movies]);
    //return \App\Movie::all();
    //return \App\add_movie::all();
;