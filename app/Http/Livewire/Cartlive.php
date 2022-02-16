<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\cart;
use Illuminate\Support\Facades\DB;

use Livewire\WithFileUploads;


use App\Models\product;

class Cartlive extends Component
{
use WithFileUploads;
    public $quntity;

    public $total_cart_price;

    public $count;
// ============================== icrement ===============================
public function increment($id)
    {
        $cookie = $_COOKIE['organi'];
        if (isset($cookie)) {
            try {
                $carts = cart::where([
                    ['cookie', $cookie],
                    ['id', $id]
                ])
                    ->first();

                    // dd($carts);

                $this->quntity = $carts->qty+1;

                $carts->update([
                    'qty' => $this->quntity
                ]);

            }
            catch (Exception $e) {
                return $e;
            }

        }
        session()->flash('message', 'Cart updated Seuccfily');

    }


    // ======================= decrement ==================================
public function decrement($id)
    {
        $cookie = $_COOKIE['organi'];
        if (isset($cookie)) {
            try {
                $carts = cart::where([
                    ['cookie', $cookie],
                    ['id', $id]
                ])
                    ->first();

                $this->quntity = $carts->qty - 1;

                $carts->update([
                    'qty' => $this->quntity
                ]);

            }
            catch (Exception $e) {
                return $e;
            }

        }
        session()->flash('message', 'Cart updated Seuccfily');

    }

// ========================= Delete ===============================
public function removeCart($id)
    {
        $item_id = cart::find($id);

        $item_id->delete($id);

        session()->flash('message', 'Product Removed Successfully');
    }
// =========================== Render ====================
    public function render()
    {
        $cookie = $_COOKIE['organi'];

        // $products=cart::select('product_id')->where('cookie',$cookie)->get();


          $cart_datas =DB::table('products')
                            -> distinct()
                            ->join('carts', 'products.id', '=', 'carts.product_id')
                            ->select('products.*','carts.*')->where('cookie',$cookie)
                            ->paginate(config('contans.paginate_count'));


        //     $price=DB::table('products')
        //             ->distinct()
        //             ->join('carts', 'products.id', '=', 'carts.product_id')
        //             ->select('products.price', 'carts.product_id')->where('cookie', $cookie)
        //             ->sum('price');

        //     $sale=DB::table('products')
        //             ->distinct()
        //             ->join('carts', 'products.id', '=', 'carts.product_id')
        //             ->select('products.sale', 'carts.product_id')->where( [
        //                ['cookie', $cookie],

        //                 ])
        //             ->sum('sale');

        //     $normal_sale=DB::table('products')
        //             ->distinct()
        //             ->join('carts', 'products.id', '=', 'carts.product_id')
        //             ->select('products.sale', 'carts.product_id')->where( [
        //                ['cookie', $cookie],
        //                ['descount_Type',0]
        //                 ])
        //             ->sum('sale');

        //     $percent_sale=DB::table('products')
        //     ->distinct()
        //     ->join('carts', 'products.id', '=', 'carts.product_id')
        //     ->select('products.sale', 'carts.product_id')->where( [
        //         ['cookie', $cookie],
        //         ['descount_Type','!=',0]
        //         ])
        //     ->sum('sale');


            // $total_qty= cart::where('cookie',$cookie)->sum('qty');
        // dd($sale, $price, $total_qty);

        // $t_price=$price * $total_qty;

        if($cart_datas)
        foreach($cart_datas as $data){


            $total_percent_price=($data->descount_Type != 0 && $data->sale !=0)?($data->price - ($data->price *($data->sale /100))) * $data->qty: 0 ;

            $total_flate_price=($data->descount_Type !== 0 )?($data->price - $data->sale) * $data->qty:1000;
        }
        $this->total_cart_price=$total_percent_price + $total_flate_price;

        return view('livewire.cartlive',['data_carts'=>$cart_datas,
                                        ])->extends('layouts.site');
    }
}
