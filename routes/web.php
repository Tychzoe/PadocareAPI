<?php
use Illuminate\Http\Request;
use App\Doctor;
use App\Http\Resources\Doctor as DoctorResource;

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
    return view('welcome');
});

Route::get('/doctor', function(){
    return new DoctorResource(Doctor::find(1));
});
