<?php

use App\Http\Controllers\ListingController;
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

Route::get('/', [ListingController::class, 'index']);

// Route::get('/listings/{id}', function ($id) {
//     return view('listing', [
//         'heading' => 'Single Listing',
//         'listing' => Listing::find($id)
//     ]);
// });
Route::get('/listings/create', [ListingController::class, 'create']);

//store listing data
Route::post('/listings', [ListingController::class, 'store']);

Route::get('/listings/{listing}', [ListingController::class, 'show']);




// Route::get('/listings/{id}', function ($id) {
//     $Listing = Listing::find($id);

//     if ($Listing) {
//         return view('listing', [
//             'heading' => 'Single Listing',
//             'listing' => $Listing
//         ]);
//     } else {
//         abort(404);
//     }
// });



// Route::get('/hello', function () {
//     return response('<h1>Hello Wold</h1>', 200)
//         ->header('content-type', 'text/json');
// });

// Route::get('/posts{id}', function ($id) {
//     return response('post ' . $id);
// })->where('id', '[0-9]+');
