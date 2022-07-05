<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Tenant;
use App\Models\Tenants;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\TenantController;
use App\Http\Controllers\ExpenseCategoryController;
use App\Http\Controllers\ExpenseController;



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

    // Area -----
    Route::get('/area_list', [AreaController::class, 'index']);
    Route::get('/area/create', [AreaController::class, 'create'])->name('area_create');
    Route::get('/area/edit/{id}', [AreaController::class, 'edit'])->name('area_edit');
    Route::get('/area/delete/{id}', [AreaController::class, 'delete'])->name('area_delete');


     // Tenant -----
     Route::get('/tenant_list', [TenantController::class, 'index']);
     Route::get('/tenant/create', [TenantController::class, 'create'])->name('tenant_create');
     Route::get('/tenant/edit/{id}', [TenantController::class, 'edit'])->name('tenant_edit');
     Route::get('/tenant/delete/{id}', [TenantController::class, 'delete'])->name('tenant_delete');


     // Expense Category -----
     Route::get('/expense_category_list', [ExpenseCategoryController::class, 'index']);
     Route::get('/expense_category/create', [ExpenseCategoryController::class, 'create'])->name('expense_category_create');
     Route::get('/expense_category/edit/{id}', [ExpenseCategoryController::class, 'edit'])->name('expense_category_edit');
     Route::get('/expense_category/delete/{id}', [ExpenseCategoryController::class, 'delete'])->name('expense_category_delete');

     // Expense -----
     Route::get('/expense_list', [ExpenseController::class, 'index']);
     Route::get('/expense/create', [ExpenseController::class, 'create'])->name('expense_create');
     Route::get('/expense/edit/{id}', [ExpenseController::class, 'edit'])->name('expense_edit');
     Route::get('/expense/delete/{id}', [ExpenseController::class, 'delete'])->name('expense_delete');

      // Users -----
      Route::get('/user_list', [UserController::class, 'user_list']);
      Route::get('/user/create', [UserController::class, 'create'])->name('user_create');
      Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user_edit');
      Route::get('/user/delete/{id}', [UserController::class, 'delete'])->name('user_delete');
    
    
});


// --------- POST ROUTES STARTS --------- //

Route::middleware('userAuthentication')->group(function (){

    Route::post('/authenticate', [UserController::class, 'authenticate'])->withoutmiddleware('userAuthentication');
    Route::post('/area_store', [AreaController::class, 'store']);
    Route::post('/area/update/{id}', [AreaController::class, 'update']);

    Route::post('/tenant_store', [TenantController::class, 'store']);
    Route::post('/tenant/update/{id}', [TenantController::class, 'update']);

    Route::post('/expense_category_store', [ExpenseCategoryController::class, 'store']);
    Route::post('/expense_category/update/{id}', [ExpenseCategoryController::class, 'update']);

    Route::post('/expense_store', [ExpenseController::class, 'store']);
    Route::post('/expense/update/{id}', [ExpenseController::class, 'update']);

    Route::post('/user_store', [UserController::class, 'store']);
    Route::post('/user/update/{id}', [UserController::class, 'update']);


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


