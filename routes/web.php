<?php

use Illuminate\Support\Facades\Route;
use App\Models\Listing;
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

Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => Listing::all()
    ]);
});

Route::get('/listings/{id}', function ($id) {
    return view('listing', [
        'heading' => 'Single Listing',
        'listing' => Listing::find($id)
    ]);
});



// Route::get('/hello', function () {
//     return response('<h1>Hello Wold</h1>', 200)
//         ->header('content-type', 'text/json');
// });

// Route::get('/posts{id}', function ($id) {
//     return response('post ' . $id);
// })->where('id', '[0-9]+');
