<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\User;

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
    
    $products = DB::table('users')->get();
    return view('welcome', compact('products'));
});
Route::get('/add', [UserController::class, 'AddView'])->name('AddView');
Route::post('/AddProduct', [UserController::class, 'AddProduct'])->name('AddProduct');

Route::get('/deleteP/{id}', function($id){
    $products = User::findOrFail($id);
    $products->delete();
    return back()->with('success', 'Termék törölve!');
});

  

