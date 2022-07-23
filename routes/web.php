<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Tenant;
use App\Models\Tenants;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\TenantController;
use App\Http\Controllers\ExpenseCategoryController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\RentController;

use App\Models\Rent;
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

Route::middleware(['userAuthentication','adminAuthentication'])->group(function (){

    Route::get('/', [UserController::class, 'index'])->withoutmiddleware('adminAuthentication');
    Route::get('/dashboard', [UserController::class, 'index'])->withoutmiddleware('adminAuthentication');
    Route::get('/logout', [UserController::class, 'logout'])->withoutmiddleware('adminAuthentication');

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
     Route::get('/expense_category_list', [ExpenseCategoryController::class, 'index'])->withoutmiddleware('adminAuthentication');
     Route::get('/expense_category/create', [ExpenseCategoryController::class, 'create'])->name('expense_category_create')->withoutmiddleware('adminAuthentication');
     Route::get('/expense_category/edit/{id}', [ExpenseCategoryController::class, 'edit'])->name('expense_category_edit')->withoutmiddleware('adminAuthentication');
     Route::get('/expense_category/delete/{id}', [ExpenseCategoryController::class, 'delete'])->name('expense_category_delete')->withoutmiddleware('adminAuthentication');

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
    
      Route::get('/setting', [CompanyController::class, 'index']);

      Route::get('/my_account', [UserController::class, 'my_account'])->withoutmiddleware('adminAuthentication');

      Route::get('/shops', [UserController::class, 'shops']);

      Route::get('/rent_history', [RentController::class, 'index'])->withoutmiddleware('adminAuthentication');

      Route::get('/invoice_list', [RentController::class, 'invoice_list'])->withoutmiddleware('adminAuthentication');
      Route::get('/generate_pdf/{id}', [RentController::class, 'generate_pdf'])->name('generate_pdf')->withoutmiddleware('adminAuthentication');
      Route::get('/send_invoice/{id}', [RentController::class, 'send_invoice'])->name('send_invoice')->withoutmiddleware('adminAuthentication');
      Route::get('/invoice/{id}', [RentController::class, 'invoice'])->withoutmiddleware('adminAuthentication');
});


// --------- POST ROUTES STARTS --------- //

Route::middleware(['userAuthentication','adminAuthentication'])->group(function (){

    Route::post('/authenticate', [UserController::class, 'authenticate'])->withoutmiddleware(['userAuthentication', 'adminAuthentication']);
    Route::post('/area_store', [AreaController::class, 'store']);
    Route::post('/area/update/{id}', [AreaController::class, 'update']);

    Route::post('/tenant_store', [TenantController::class, 'store']);
    Route::post('/tenant/update/{id}', [TenantController::class, 'update']);

    Route::post('/expense_category_store', [ExpenseCategoryController::class, 'store'])->withoutmiddleware('adminAuthentication');
    Route::post('/expense_category_store_from_expense', [ExpenseCategoryController::class, 'store_from_expense'])->withoutmiddleware('adminAuthentication');
    
    Route::post('/expense_category/update/{id}', [ExpenseCategoryController::class, 'update'])->withoutmiddleware('adminAuthentication');

    Route::post('/expense_store', [ExpenseController::class, 'store'])->withoutmiddleware('adminAuthentication');
    Route::post('/expense/update/{id}', [ExpenseController::class, 'update'])->withoutmiddleware('adminAuthentication');

    Route::post('/user_store', [UserController::class, 'store']);
    Route::post('/user/update/{id}', [UserController::class, 'update']);

    Route::post('/setting_update', [CompanyController::class, 'setting_update']);

    Route::post('/my_account_update', [UserController::class, 'my_account_update'])->withoutmiddleware('adminAuthentication');

    Route::post('/pay_rent', [RentController::class, 'pay_rent'])->withoutmiddleware('adminAuthentication');

    Route::post('/pay_rent2', [RentController::class, 'pay_rent2'])->withoutmiddleware('adminAuthentication');
    Route::post('/store_new_rent', [RentController::class, 'store_new_rent'])->withoutmiddleware('adminAuthentication');

    
    
});

Route::get('send-mail', function () {
   
    $details = [
        'title' => 'Mail from ItSolutionStuff.com',
        'body' => 'This is for testing email using smtp'
    ];
   
    \Mail::to('farazahmed34296@gmail.com')->send(new \App\Mail\MyTestMail($details));
   
    dd("Email is Sent.");
});

Route::get('/test', function(){

// echo "<pre>";
// print_r(session('user'));
// echo "<br><br>";
// print_r(session('user')->type);
    // $rents = Rent::select('rent.*')->join('tenants','rent.t_id','=','tenants.id')->where('rent.next_generation_date', date('Y-m-d'))->where('rent.generated', '0')->where('tenants.is_active','1')->get();

    //     foreach($rents as $rent){
    //         $last_rent = Rent::orderBy('created_at', 'desc')->first();

    //         $new_rent = new Rent();
    //         $new_rent->invoice_no = $last_rent->invoice_no +1;
    //         $new_rent->t_id = $rent->t_id;
    //         $new_rent->a_id = $rent->a_id;
    //         $new_rent->rent = $rent->rent;
    //         $new_rent->maintenance = $rent->maintenance;
    //         $new_rent->total_amount = $rent->total_amount;
    //         $new_rent->generation_date = $rent->next_generation_date;
    //         $new_rent->next_generation_date = date('Y-m-d', strtotime('+1 month', strtotime($rent->next_generation_date)));;
    //         $new_rent->generated = '0';
    //         $new_rent->status = 'unpaid';
    //         $new_rent->save();

    //         $temp_rent = Rent::find($rent->id);
    //         $temp_rent->generated = '1';
    //         $temp_rent->save();
    //     }

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


