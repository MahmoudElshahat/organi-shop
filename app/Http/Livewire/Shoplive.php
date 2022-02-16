<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Categorie;
use App\Models\product;
use App\Models\cart;
use App\Models\sub_categorie;

use App\Models\attribuite;

use App\Models\attribuite_value;
use App\Models\blog;
use Illuminate\Support\Facades\DB;

class Shoplive extends Component
{
    public $categori_name ;
    public $select;

    public $datas=[];

    public $count;

    public $size=[];

    public $selct_id,$attr_val_id;

    // public $attrs;

// ===========================================
public function select_p($id){

    $this->attr_val_id=$id;
}


// =====================================
    public function render()
    {

         $products=product::select('*')->paginate(config('contans.paginate_three'));

        $attrs=attribuite::all();
        // foreach($attrs as $attr)
        // =============== coloer atribute =========================
        $color=attribuite::where('name','LIKE','%olor%')->first();

            if($color!=null)
         $attr_val=attribuite_value::where('attribuite_id',$color->id)->get();
        // =========== Sizes atribute ==========================
            $size=attribuite::where('name','LIKE','%ize%')->first();
            if($size!=null)
         $attr_val_sizes = attribuite_value::where('attribuite_id',$size->id)->get();

        //  $atreibutes=


        $product_last = product::latest()->paginate(config('contans.paginate_three'));

// ==================== select product By name , price , size ==============================
// dd($this->select);
// ============ select product by defualt =========================
        if ($this->select == null){

            $this->datas = product::all();
            $this->count= $this->datas->count();

        // ========= select product by price ================
        }elseif ($this->select == 1) {

            $this->datas = product::OrderBy('price', 'desc')->get();
            $this->count= $this->datas->count();

        }elseif($this->attr_val_id != null){
            $this->datas = product::where('attr_value_id',$this->attr_val_id)->get();
            $this->count = $this->datas->count();

        }else{

            $this->datas = product::where('attr_name_id', $this->select and 'attr_value_id',$this->attr_val_id)->get();
            $this->count = $this->datas->count();
        }
// ================================================================================
        // $this->size=product::where('attr_value_id',$this->selct_id)->get();

        return view('livewire.shoplive',[
                                        'products'=>$products,
                                        'attr_vals' => $attr_val,
                                        'product_lasts'=>$product_last,
                                        'attr_val_sizes'=>$attr_val_sizes,
                                        'attrs'=>$attrs
                                ])->extends('layouts.site');
    }
}


                                            // ????????
