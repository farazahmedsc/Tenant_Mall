<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Tenant;
use App\Models\Tenants;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AreaController;



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
// --------- GET ROUTES STARTS --------- //

Route::middleware('userAuthentication')->group(function (){

    Route::get('/', [UserController::class, 'index']);
    Route::get('/dashboard', [UserController::class, 'index']);
    Route::get('/logout', [UserController::class, 'logout']);

    Route::get('/area_list', [AreaController::class, 'index']);
    Route::get('/area/create', [AreaController::class, 'create'])->name('area_create');
    Route::get('/area/edit/{id}', [AreaController::class, 'edit'])->name('area_edit');
    Route::get('/area/delete/{id}', [AreaController::class, 'delete'])->name('area_delete');
    
    
});


// --------- POST ROUTES STARTS --------- //

Route::middleware('userAuthentication')->group(function (){

    Route::post('/authenticate', [UserController::class, 'authenticate'])->withoutmiddleware('userAuthentication');
    Route::post('/area_store', [AreaController::class, 'store']);
    Route::post('/area/update/{id}', [AreaController::class, 'update']);
});


// Route::get('/', function () {
//     return view('adminpanel/index');
// });



// Route::get('/tenants', [Tenant::class, 'index'])->name('tenants');
// Route::get('/tenants/create', [Tenant::class, 'create'])->name('tenant.create');
// Route::post('/tenants', [Tenant::class, 'store']);
// Route::get('/tenants/delete/{id}', [Tenant::class, 'destroy'])->name('tenant.delete');
// Route::get('/tenants/edit/{id}', [Tenant::class, 'edit'])->name('tenant.edit');
// Route::post('/tenants/update/{id}', [Tenant::class, 'update'])->name('tenant.update');


