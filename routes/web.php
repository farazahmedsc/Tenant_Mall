<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tenant;
use App\Models\Tenants;


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
    return view('adminpanel/index');
});



Route::get('/tenants', [Tenant::class, 'index'])->name('tenants');
Route::get('/tenants/create', [Tenant::class, 'create'])->name('tenant.create');
Route::post('/tenants', [Tenant::class, 'store']);
Route::get('/tenants/delete/{id}', [Tenant::class, 'destroy'])->name('tenant.delete');
Route::get('/tenants/edit/{id}', [Tenant::class, 'edit'])->name('tenant.edit');
Route::post('/tenants/update/{id}', [Tenant::class, 'update'])->name('tenant.update');


