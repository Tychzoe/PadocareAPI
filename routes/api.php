<?php

use Illuminate\Http\Request;
use App\Doctor;
use App\Http\Resources\Doctor as DoctorResource;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/doctor', function(){
    return new DoctorResource(Doctor::find(1));
});
