<?php

use App\Http\Controllers\Belajar;
use App\Http\Controllers\pegawaiController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\teacherController;
use App\Models\teacher;
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

Route::get('/about', function () {
    return view('about');
});

// Route::get('/', function() {
//     return view('home',[
//         'name'=> 'varel',
//         'alamat'=> 'depok',
//         'kelas'=> 'PPLG2',
//         'role' => 'spy',
//         'mapel' => ['ipa','ips','mtk']
//     ]);
// });


Route::get('/asa', function () {
    return view('product');
});


Route::get('/belajar',[Belajar::class,'index']);


Route::get('/belajar-a',[Belajar::class,'store']);


Route::get('/belajar-aa',[Belajar::class,'update']);


Route::get('/teacher',[teacherController::class,'index']);

Route::get('/',[pegawaiController::class,'index']);


Route::get('/insert',[pegawaiController::class,'store']);

Route::get('/update',[pegawaiController::class,'update']);


Route::get('/destroy',[pegawaiController::class,'destroy']);



Route::get('/class',[ClassController::class,'index']);

Route::get('/student',[StudentController::class,'index']);


Route::get('/student/add',[StudentController::class,'create']);
Route::post('/student/adds',[StudentController::class,'store']);
Route::get('/student/edit/{id}',[StudentController::class,'edit']);
Route::put('/student/up/{id}',[StudentController::class,'update']);
Route::get('/student/detail/{id}',[StudentController::class,'show']); 
Route::delete('/student/destroy/{id}',[StudentController::class,'destroy']); 