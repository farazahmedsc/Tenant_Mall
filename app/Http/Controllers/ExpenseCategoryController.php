<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Http;
use App\Models\ExpenseCategory;
use RealRashid\SweetAlert\Facades\Alert;

class ExpenseCategoryController extends Controller
{
    public function __construct(){
    
    }

    public function index(Request $request){
        $search = $request['search'] ?? "";
        if($search != ""){
            $expenses = ExpenseCategory::where('name','like',"%$search%")->paginate(10);
        }else{
            $expenses = ExpenseCategory::paginate(10);
        }
        $data = compact('expenses','search');
        return view('adminpanel/expense_category/expense-category-list',$data);
    }

    public function create(){
        $expense = new ExpenseCategory();
        $label = "Add Expense Category";
        $url = url('/expense_category_store');
        $data = compact('expense','label', 'url');
        return view('adminpanel/expense_category/expense-category-add')->with($data);
    }

    public function store(Request $request){
        $request->validate(
            [
                'name' => 'required'
            ]
        );

        $expense = new ExpenseCategory();
        $expense->name = $request['name'];
      
        $result = $expense->save();

        if($result){
            Alert::success('Congrats', 'Expense Category is Successfully Registered');
            return redirect('expense_category_list');
        }else{
            Alert::error('Error', 'Expense Category Failed to Add');
            return redirect('expense_category_create');
        }
        
    }

    public function edit($id){
        $expense = ExpenseCategory::find($id);
        if(!is_null($expense)){
            $label = "Update Expense Category";
            $url = url('/expense_category/update'). "/" . $id;
            $data = compact('expense', 'label', 'url');
            return view('adminpanel/expense_category/expense-category-add')->with($data);
        }else{
            Alert::error('Error', 'Expense Category not found');
            return redirect('expense_category_list');
        }
    }

    public function update($id, Request $request){
        $expense = ExpenseCategory::find($id);
        $expense->name = $request['name'];
        $expense->is_active = $request['is_active'];
        $result = $expense->save();
        
        if($result){
            Alert::success('Congrats', 'Expense Category is Successfully Updated');
            return redirect('expense_category_list');
        }else{
            Alert::error('Error', 'Expense Category Failed to Update');
            return redirect('expense_category_create');
        }
    }

    public function delete($id)
    {
        ExpenseCategory::find($id)->delete();
  
        Alert::success('Deleted', 'Expense Category is Successfully Deleted');
        return redirect('expense_category_list');
    }
}
