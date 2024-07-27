<?php

use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\ListingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

use function PHPUnit\Framework\isEmpty;
use function PHPUnit\Framework\isNull;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/hello',function(){
//     return '<h1>Hello World!</h1>';
// });
// Route::get('/posts/{id}',function($id){
//     dd($id); // die and dump very useful in debugging
//     // ddd($id);
//     return response('Post ' . $id);
// })->where('id','[0-9]+');

// Route::get('/search',function(Request $request){
//     dd($request->name);
//     dd($request->city);
// });

// All Listing
Route::get('/',[ListingController::class,'show'])->name('home');

// Single Listingcls
Route::get('/listings/{id}',[ListingController::class,'index']);

Route::get('/create',function(){
    return view('create');
})->middleware('auth');

Route::post('/create',[ListingController::class,'create']);
Route::get('/manage',function(){
    $listing = Listing::all();
    $data = compact('listing');
    return view('manage')->with($data);
});

Route::get('edit/{id}',[ListingController::class,'edit'])->middleware('auth');
Route::post('edit/submit/{id}',[ListingController::class,'update']);
Route::get('delete/{id}',[ListingController::class,'destroy'])->middleware('auth');


// Routing for the Authentication
Route::get('/register',[LoginRegisterController::class,'registration'])->middleware('guest');
// Route::get('/',[LoginRegisterController::class,'index'])

Route::post('/register',[LoginRegisterController::class,'store']);
Route::post('/login',[LoginRegisterController::class,'authenticate']);

// log out
Route::post('/logout',[LoginRegisterController::class,'logout'])->middleware('auth');

// Login
Route::get('/login',[LoginRegisterController::class,'login'])->name('login')->middleware('guest');
Route::post('/login',[LoginRegisterController::class,'authenticate']);

