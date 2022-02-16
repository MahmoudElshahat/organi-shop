<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
// ========== Models ==========
use App\Models\Categorie;
use App\Models\product;

use Exception;
use App\Http\Requests\admin\categoriesRequest;

class categorieController extends Controller
{
    public function index(){
        try{


        $categorie_data = Categorie::select('id', 'name', 'image','slug')->paginate(config('contans.paginate_count'));
        foreach($categorie_data as $cat_data)
        $product_count=product::where('categorie_id',$cat_data->id)->count();
        }catch (Exception $e) {
            return $e;
        }

            return view('admin.categories.index',['categorie_data'=>$categorie_data ,
                                                    'product_count'=>$product_count]);
    }
    // ==============================================
    public function show($slug){

      return  Categorie::where('slug',$slug)->first();
    }
    // ==================================================================
     public function create(){

        return view('admin.categories.create');
    }
    // ================================================================
    public function store(categoriesRequest $request)
    {

        $new_image_name=time().'-'.$request->name.'-'.$request->image->extension();

        $request->image->move(public_path('images/categorie'), $new_image_name);

        $slug=Str::slug($request->name);
        try{
            Categorie::create([
                'name'=>$request->name,
                'image'=>$new_image_name,
                'slug'=>$slug

                ]);
            return redirect()->route('show.categori');
        }catch(Exception $e){
            return $e;
        }
    }
     // ==================================================================
     public function edite($id){
         try{

            $query = Categorie::find($id);
            if($query)
            $categori_edite = $query->select('id', 'name', 'image')->first();


         }catch (Exception $e) {
            return $e;
        }


            return view('admin.categories.edite',compact('categori_edite'));
    }
     // ==================================================================

     public function update(Request $request,$id){

       try{
                 $query=categorie::find($id);

        if($request->image != null){
         $new_image_name=time().'-'.$request->name.'-'.$request->image->extension();

         $request->image->move(public_path('images/categorie'), $new_image_name);
         $query->update([
                "name" => $request->name,
                'image' => $new_image_name,
            ]);
        }else{
            $query->update([
                "name" => $request->name,
            ]);
        }

       }catch(Exception $e){
            return $e;
        }

            return redirect()->route('edite.categori',$id);
    } // ==================================================================
     public function delete($id){
        try{
            $query = categorie::find($id);

            $query->delete();

            return redirect()->back();


        }catch(Exception $e){
            return $e;
        }


    }
}
