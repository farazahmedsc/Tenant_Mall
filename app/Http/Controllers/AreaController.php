<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Http;
use App\Models\Area;
use RealRashid\SweetAlert\Facades\Alert;

class AreaController extends Controller
{
    public function __construct(){
    
    }

    public function index(Request $request){
        $search = $request['search'] ?? "";
        if($search != ""){
            $areas = Area::where('name','like',"%$search%")->orwhere('dimension', 'like', "%$search%")->paginate(10);
        }else{
            $areas = Area::paginate(10);
        }
        $data = compact('areas','search');
        return view('adminpanel/area/area-list',$data);
    }

    public function create(){
        $area = new Area();
        $label = "Add Area";
        $url = url('/area_store');
        $data = compact('area','label', 'url');
        return view('adminpanel/area/area-add')->with($data);
    }

    public function store(Request $request){
        $request->validate(
            [
                'name' => 'required',
                'type' => 'required'
            ]
        );

        $area = new Area();
        $area->name = $request['name'];
        $area->dimension = $request['dimension'];
        $area->type = $request['type'];
        $area->type_detail = $request['type_detail'];
        $result = $area->save();

        if($result){
            Alert::success('Congrats', 'Area is Successfully Registered');
            return redirect('area_list');
        }else{
            Alert::error('Error', 'Area Failed to Add');
            return redirect('area_create');
        }
        
    }

    public function edit($id){
        $area = Area::find($id);
        if(!is_null($area)){
            $label = "Update Area";
            $url = url('/area/update'). "/" . $id;
            $data = compact('area', 'label', 'url');
            return view('adminpanel/area/area-add')->with($data);
        }else{
            Alert::error('Error', 'Area not found');
            return redirect('area_list');
        }
    }

    public function update($id, Request $request){
        $area = Area::find($id);
        $area->name = $request['name'];
        $area->dimension = $request['dimension'];
        $area->type = $request['type'];
        $area->type_detail = $request['type_detail'];
        $area->is_active = $request['is_active'];
        $result = $area->save();
        
        if($result){
            Alert::success('Congrats', 'Area is Successfully Updated');
            return redirect('area_list');
        }else{
            Alert::error('Error', 'Area Failed to Update');
            return redirect('area_create');
        }
    }

    public function delete($id)
    {
        Area::find($id)->delete();
  
        Alert::success('Deleted', 'Area is Successfully Deleted');
        return redirect('area_list');
    }

    
}
