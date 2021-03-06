<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\product;
use Livewire\WithPagination;

use App\Models\cart;
use LaravelLocalization;
use Illuminate\Support\Str;

class ShopDetailsLive extends Component
{
use WithPagination;

public $rand_product,
        $product_id,
        $quntity=1;
// public $pro_details;
// ================== increment quntity ============================
public function increment($id)
    {

                $this->quntity ++;

                $product_details=product::where('id',$id)->first();

                $this->product_id=$id;

                return redirect()->with(['product_det'=>$product_details]);


    }




// =============== decrement quntity ==========================
public function decrement($id)
    {
        $this->quntity --;

        $this->product_id=$id;

                $product_details=product::where([
                                                ['id',$id],
                                                ['lang',LaravelLocalization::getCurrentLocale()]
                                        ])->first();

                return redirect()->with(['product_det'=>$product_details]);
    }
    // ================= add to cart =====================
    public function add($id){
        // dd($id);
        $query = cart::
            where([
            ['product_id', '=', $id],
            ['cookie', '=', $_COOKIE['organi']]
        ])->first();
        if (!$query) {
            cart::create([
                // 'user_id'=>$_COOKIE['organi'],
                'product_id' => $id,
                'qty' =>  $this->quntity,
                'cookie' => $_COOKIE['organi'],

            ]);
        }
        else {
            $query->update(['qty' => $this->quntity]);

        }
        // ================ Alerts =======================
        $this->dispatchBrowserEvent('alert',
        ['type' => 'success',  'message' => 'product Add to cart successfuly']);

        session()->flash('message','product Add to cart successfuly');
        // ========================================
        $this->product_id=$id;

        $product_details=product::where([
                                ['id',$id],
                                ['lang',LaravelLocalization::getCurrentLocale()]
                                ])->first();

        return redirect()->with(['product_det'=>$product_details]);

    }    // return

    // =============================
    public function render()
    {
        $products=product::where('lang',LaravelLocalization::getCurrentLocale())->paginate(4);

        $pro_details=product::inRandomOrder()->where('lang',LaravelLocalization::getCurrentLocale())->first();

        // $this->product_id=$id;

        // $product_details=product::where('id',$this->product_id)->first();


        return view('livewire.shop-details-live',[
                                                    'products'=>$products,
                                                    'pro_details'=>$pro_details
                                                ])->extends('layouts.site');
    }
}
