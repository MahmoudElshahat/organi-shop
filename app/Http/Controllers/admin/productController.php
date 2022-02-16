<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Pagination\CursorPaginator;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
// ========== Models ==========
use Illuminate\Support\Facades\DB;

use App\Models\Categorie;
use App\Models\product;
use App\Models\attribuite;
use App\Models\attribuite_value;


use Exception;
use App\Http\Requests\admin\productRequest;

class productController extends Controller
{
    public function index(){
        try{

            $products_data=DB::table('products')

                            ->Join('categories', 'products.categorie_id', '=', 'categories.id')

                            ->Join('Attribuites', 'products.attr_name_id', '=', 'Attribuites.id')

                            ->Join('attribuite_values', 'products.attr_value_id', '=', 'attribuite_values.id')

                            ->select('products.*',
                                                 'categories.name as cName','categories.id as cId',

                                                 'Attribuites.name as attName','Attribuites.id as attId',

                                                 'attribuite_values.name as attvName','attribuite_values.id as attvId')

                                  ->paginate(config('contans.paginate_count')); // re->where('')

                        //     foreach($products_data as $pro)
                        //    dd($products_data);

            // $q =new product();
            // $products_data=$q->cat();
            // foreach($products_data as $product){

                // $categories=Categorie::where('id',5)->get()->toarray();

            // }





            return view('admin.products.index',[
                                                'products_datas'=>$products_data,
                                                // 'categori'=>$categories
                                                ]);

        }catch(Exception $e){
            return $e;
        }
    }
    // ==================================================================
     public function create(){
         $categorie_data = Categorie::select('id', 'name')->get();

        $attr_names=attribuite::select('id','name')->get();
            // foreach($attr_names as $attr_name)
        $attr_val=attribuite_value::select('id','name')->get();


        return view('admin.products.create',['categorie_data'=>$categorie_data,
                                            'attr_vals'=>$attr_val ,
                                            'attr_names'=>$attr_names
                                            ]);
    }
    // ================================================================
    public function store(productRequest $request)
    {


        $new_image_name=time().'-'.$request->name.'.'.$request->image->extension();

        $request->image->move(public_path('images/products'), $new_image_name);

        $slug=Str::slug($request->name);
        try{
            product::create([
                'name'=>$request->name,
                'image'=>$new_image_name,
                'slug'=>$slug,
                'price'=>$request->price,
                'sale' => $request->sale,
                'desc'=>$request->desc,
                'attr_name_id'=>$request->attr_name,
                'attr_value_id'=>$request->attr_value,
                'categorie_id'=>$request->category,
                'quntity' => $request->qty,
                'descount_Type' => $request->descountType,


            ]);
            return redirect()->route('show.product');
        }catch(Exception $e){
            return $e;
        }
    }
     // ==================================================================
     public function edite($id){
         try{
            $query = product::find($id);

            $product_edite = $query->select('*')->first();

            $categorie_data = Categorie::select('id', 'name')->get();

         }catch (Exception $e) {
            return $e;
        }


            return view('admin.products.edite',['product_edite'=>$product_edite,

                                                'categoroi_data'=>$categorie_data

        ]);
    }
     // ==================================================================

     public function update(productRequest $request,$id){

       try{
            $query=product::find($id);

            $query->update([
                    'name' => $request->name,
                    'price' => $request->price,
                    'quntity' => $request->qty,
                    'descount_Type'=>$request->descountType,
                    'sale' => $request->sale,
                    'desc' => $request->desc,
                    'categorie_id' => $request->category
            ]);
// =================== update image ========================================
            if ($request->image != null) {
                $new_image_name = time() . '-' . $request->name . '-' . $request->image->extension();

                $request->image->move(public_path('images/products'), $new_image_name);
                $query->update([
                    'image' => $new_image_name,
                ]);
            }


       }catch(Exception $e){
            return $e;
        }

            return redirect()->route('edite.product',$id);
    } // ==================================================================
     public function delete($id){
        try{
            $query = product::find($id);

            $query->delete();

            return redirect()->route('show.product');

        }catch(Exception $e){
            return $e;
        }


    }
}
