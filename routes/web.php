<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('listings', [
        'heading' => 'Hello From Laravel',
        'listings' => Listing::all()
    ]);
});
Route::get('/listings/{id}', function ($id) {
    return view('listing', [
        'listing' => Listing::find($id)
    ]);
});

// Route::get("/hello", function () {
//     return response('Hello World',200)
//     ->header('Content-Type','text/plain');
// });

// Route::get('/posts/{id}', function($id){
     // ddd($id);
    // dd($id);
//     return response('Post '. $id);
// })->where('id', '[0-9]+');

// Route::get('/search', function (Request $request){
     // dd($request)
//   return $request->name . ' ' . $request->age ;
// });