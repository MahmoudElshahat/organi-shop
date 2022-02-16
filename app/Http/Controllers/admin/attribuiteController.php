<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Http\Requests\admin\attribuiteRequest;

use Str;

use App\Models\attribuite;

class attribuiteController extends Controller
{
    public function index(){

        $atr_data=attribuite::all();
    return view('admin.atribute.index',[
                                    'atr_data'=>$atr_data

    ]);
}
// =====================================
public function create(){

return view('admin.atribute.create');
}
// =====================================
public function store(attribuiteRequest $request){
// dd($request->name);
   if($request != null){
     attribuite::create([
           'name'=>$request->name,
           'slug'=>Str::slug($request->name)
     ]);
    }
    return redirect()->route('index.atribuite');

}
// =====================================
public function edite($id){

    if($id)
        //   attribuite::find($id);
         $attr=attribuite::where('id',$id)->first();


    // return redirect()->route('index.atribuite');


    return view('admin.atribute.edite',['data'=> $attr]);

}
// =====================================
public function update(attribuiteRequest $request,$id){
 if($id){
         $attr=attribuite::find($id);

        $attr->update([
            'name'=>$request->name
        ]);

    }

    return redirect()->route('index.atribuite');

}
// =====================================
public function delete($id){

         if($id){
         $attr=attribuite::find($id);
         $attr->delete();
         }
    return redirect()->route('index.atribuite');

}
}
