<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Http;
use App\Models\Expense;
use App\Models\ExpenseCategory;
use RealRashid\SweetAlert\Facades\Alert;

class ExpenseController extends Controller
{
    public function __construct(){
    
    }

    public function index(Request $request){
        $search = $request['search'] ?? "";
        if($search != ""){
            $expenses = Expense::where('amount','like',"%$search%")->orwhere('expense_category.name', 'like', "%$search%")->select('expense.*' , 'expense_category.id as expense_category_id', 'expense_category.name as expense_category_name')->join('expense_category', 'expense.ec_id' , '=', 'expense_category.id')->paginate(10);
        }else{
          
            $expenses = Expense::select('expense.*' , 'expense_category.id as expense_category_id', 'expense_category.name as expense_category_name')->join('expense_category', 'expense.ec_id' , '=', 'expense_category.id')->paginate(10);
            
        }
        $data = compact('expenses','search');
        return view('adminpanel/expense/expense-list',$data);
    }

    public function create(){
        $expense = new Expense();
        $ec = ExpenseCategory::where('is_active', '=', '1')->get();
        $label = "Add Expense";
        $url = url('/expense_store');
        $data = compact('expense','label', 'url', 'ec');
        return view('adminpanel/expense/expense-add')->with($data);
    }

    public function store(Request $request){
        $request->validate(
            [
                'amount' => 'required'
                        
            ]
        );

        $expense = new Expense();
        $expense->ec_id = $request['ec_id'];
        $expense->amount = $request['amount'];
        $expense->expense_date = $request['expense_date'];
        $expense->description = $request['description'];
       
        $result = $expense->save();

        if($result){
            Alert::success('Congrats', 'Expense is Successfully Registered');
            return redirect('expense_list');
        }else{
            Alert::error('Error', 'Expense Failed to Add');
            return redirect('expense_create');
        }
        
    }

    public function edit($id){
        $expense = Expense::find($id);
        $ec = ExpenseCategory::where('is_active', '=', '1')->get();

        if(!is_null($expense)){
            $label = "Update Expense";
            $url = url('/expense/update'). "/" . $id;
            $data = compact('expense', 'label', 'url', 'ec');
            return view('adminpanel/expense/expense-add')->with($data);
        }else{
            Alert::error('Error', 'Expense not found');
            return redirect('expense_list');
        }
    }

    public function update($id, Request $request){

        $request->validate(
            [
                'amount' => 'required'             
            ]
        );

        $expense = Expense::find($id);
        $expense->ec_id = $request['ec_id'];
        $expense->amount = $request['amount'];
        $expense->expense_date = $request['expense_date'];
        $expense->description = $request['description'];
        $expense->is_active = $request['is_active'];
        $result = $expense->save();

        
        if($result){
            Alert::success('Congrats', 'Expense is Successfully Updated');
            return redirect('expense_list');
        }else{
            Alert::error('Error', 'Expense Failed to Update');
            return redirect('expense_create');
        }
    }

    public function delete($id)
    {
        Expense::find($id)->delete();
  
        Alert::success('Deleted', 'Expense is Successfully Deleted');
        return redirect('expense_list');
    }
}
