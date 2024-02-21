<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
    return view('welcome', [
        'heading' => 'Hello From Laravel',
        'listings' =>[ [
            'id' => 1,
            'title' => 'Listing One',
            'description' => 'Description one'
        ],
         [
            'id' => 2,
            'title' => 'Listing Two',
            'description' => 'Description two'
        ],
        ]
    ]);
});

// Route::get("/hello", function () {
//     return response('Hello World',200)
//     ->header('Content-Type','text/plain');
// });

// Route::get('/posts/{id}', function($id){
//     // ddd($id);
//     // dd($id);
//     return response('Post '. $id);
// })->where('id', '[0-9]+');

// Route::get('/search', function (Request $request){
//     // dd($request)
//   return $request->name . ' ' . $request->age ;
// });