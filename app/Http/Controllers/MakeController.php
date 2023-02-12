<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Make;
use Symfony\Contracts\Service\Attribute\Required;

class MakeController extends Controller
{
    public function create(){
        return view('create');
    }
    public function store(request $request){
        $this->validate($request,[
         'name'=>'required'
        ]);
        $data=new Make();
        $data->name=$request->name;
        $data->save();
        return redirect()->route('category.table')->with('msg','data inserted successfully');

    }
    public function table(){
        $data= Make ::all();
        return view('table',compact ('data'));
    }
    public function edit($id){
        $data=Make::find($id);
        return view('edit',compact ('data'));
    }
    public function update(Request $request,$id){
        $this->validate($request,[
            'name'=>'required'
           ]);
        $data=Make::find($id);
        $data->name=$request->name;
        $data->save();
        return redirect()->route('category.table')->with('msg','data update successfully');
    }
    public function delete($id){
        $data=Make::find($id);
        $data->delete();
        return redirect()->route('category.table')->with('msg','data delete successfully');

    }

}
