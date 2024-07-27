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

// Route to show the all job listings
Route::get('/',[ListingController::class,'show']);

// Route to show the single job listing
// Single Listingcls
Route::get('/listings/{id}',[ListingController::class,'index']);

// Route to show job gig create form
Route::get('/create',function(){
    return view('create');
});

// Route to submit create job form
Route::post('/create',[ListingController::class,'create']);

// Route to show the manage job listing
Route::get('/manage',function(){
    $listing = Listing::all();
    $data = compact('listing');
    return view('manage')->with($data);
});

// Route to show the form to edit the job listing
Route::get('edit/{id}',[ListingController::class,'edit']);
// Route to submit edit listing form
Route::post('edit/submit/{id}',[ListingController::class,'update']);
// Route to destroy a job listing
Route::get('delete/{id}',[ListingController::class,'destroy']);


// Route to show the registration form job listing
Route::get('/register',[LoginRegisterController::class,'registration']);

// Route to submit the user registration details of the form
Route::post('/register',[LoginRegisterController::class,'store']);
// Route::post('/login',[LoginRegisterController::class,'authenticate']);

// Route to logout user from the system
Route::post('/logout',[LoginRegisterController::class,'logout']);

// Route to show the login form to the user
Route::get('/login',[LoginRegisterController::class,'login']);
// Route to submit the user details
Route::post('/login',[LoginRegisterController::class,'authenticate']);

