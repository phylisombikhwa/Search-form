<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MoviesController extends Controller
{
    function index()
    {//$movies=\App\Movie::where('title','=','summertime')->get();
    //$movies=\App\Movie::where('rating','>',2)->get(); //select * from movies where rating > 2
    //return $movies;
    //$movie=new \App\Movie();
    //$movie->title='Akirachix';
    //$movie->genre='awesome';
    //$movie->rating=5;
    //$movie->save();
    
    //return $movie;
    $movies=\App\Movie::all();
    return view('movies',['movies'=>$movies]);
}
function getCreate()
{return view('add_movie');
}
 function postCreate()
 {
    
    $movie= new\App\Movie();
    $movie->title='Akirachix';
    $movie->genre='awesome';
    $movie->rating='5';
    $movie->save();
    return "Recordupdates";
 }
 //function find(){
    //$movie=\App\Movie::find(2);
   // return $movie;

 //}
 //unction update(){
 //   $movie= \App\Movie::find(5);
   // $movie->genre="superb";
    //$movie->save();
   // return null;
 //}
 //function delete(){
   // $movie= \App\Movie::find(2);
   // $movie->delete();
    //return null;

 //}
}
        
    
    

