<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
// ========== Models ==========
use App\Models\Categorie;

use App\Models\sub_categorie;
// ========================
use Exception;
// =========== Request ==================
use App\Http\Requests\admin\sub_categorieRequest;

class sub_categorieController extends Controller
{
    public function index(){
        try{
            $sub_categorie = sub_Categorie::select('id','name','desc','image')->paginate(config('contans.paginate_count'));
        }catch (Exception $e) {
            return $e;
        }
            return view('admin.sub_categori.index',compact('sub_categorie'));
    }
    // ==================================================================
     public function create(){
            try{
            $categories = Categorie::select('id', 'name')->get();

            }catch(Exception $e){
                return $e;
            }


        return view('admin.sub_categori.create',compact('categories'));
    }
    // ================================================================
    public function store(sub_categorieRequest $request)
    {
            // dd($request);
        $new_image_name=time().'-'.$request->name.'-'.$request->image->extension();

        $request->image->move(public_path('images/sub-categorie'), $new_image_name);

        $slug=Str::slug($request->name);
        // try{
            sub_Categorie::create([
                'name'=>$request->name,
                'desc'=>$request->desc,
                'image'=>$new_image_name,
                'categorie_id'=>$request->categories,
                'slug'=>$slug,
                ]);
            return redirect()->route('show.sub.categori');
        // }catch(Exception $e){
        //     return $e;
        // }
    }
     // ==================================================================
     public function edite($id){
         try{
            $query = sub_Categorie::find($id);

            $categori_edite = $query->select('*')->first();


            $categories=Categorie::select('id','name')->get();

         }catch (Exception $e) {
            return $e;
        }

            return view('admin.sub_categori.edite',['categori_edite'=>$categori_edite,
                                                    'categories'=>$categories
                                                   ]);
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

            return redirect()->route('edite.sub.categori',$id);
    } // ==================================================================
     public function delete($id){
        try{
            $query = sub_categorie::find($id);

            $query->delete();

            return view('admin.sub_categori.index');

        }catch(Exception $e){
            return "eroor";
        }



    }
}
