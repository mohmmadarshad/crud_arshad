<?php

use App\userModel;
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
    return view('home');
});



Route::get('viewData', 'mainController@viewData');
Route::get('viewData', 'mainController@viewData')->name('viewData');
Route::redirect('home','/');


Route::post('submit', 'mainController@save');
Route::post('update', 'mainController@update');
// Route::get('delete/{id}','mainController@delete')->name('delete');
Route::get('delete/{id}', function (Request $id) {
    $c=userModel::find($id->id);
    $c->delete();
    $data = userModel::all();
    return redirect()->route('viewData')->with(['data' => $data]);
})->name('delete');


// Route::resources('control','mainController')->except([
//     'create', 'store', 'update', 'destroy'
// ])
