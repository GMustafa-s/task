<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ipcontroller;
use App\Http\Controllers\usercontroller;

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

//<<---------CURD  OPRATIONS ---------->>

Route::group(['prefix'=>'/user' , 'middleware'=>'adminguard'],function(){
   
    Route::get('/view',[usercontroller::class,'userview']);
    Route::get('/bin',[usercontroller::class,'recylebin']);
    Route::get('/trash/{id}',[usercontroller::class,'usertrash']);
    Route::get('/delete/{id}',[usercontroller::class,'forcedelete']);
    Route::get('/restore/{id}',[usercontroller::class,'restore'])->name('user.restore');
    Route::get('/edit/{id}',[usercontroller::class,'useredit'])->name('user.edit');
    Route::post('/update/{id}',[usercontroller::class,'update'])->name('user.update');
});

//<<---------ROUTES FOR MIDDLEWARES---------->>
Route::get('/no-access',function(){
    echo"visiters are not allowed on this page you can only register in this page";
});
Route::get('/login',function(){
    session()->put('admin_id',1); 
    return view('admin');
});
Route::get('/logout',function(){
    session()->forget('admin_id');
    return redirect('/');
});

//<<---------ROUTES FOR IP ---------->>
Route::get('/',[ipcontroller::class,'ipaddress']);
Route::get('/country/{ip}',[ipcontroller::class,'manualip']);
Route::get('/user',[ipcontroller::class,'register']);
Route::post('/user',[ipcontroller::class,'save']);
Route::get('/data',[ipcontroller::class,'tabledata']);