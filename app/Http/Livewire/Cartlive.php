<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\cart;
use Illuminate\Support\Facades\DB;

use Livewire\WithFileUploads;


use App\Models\product;
use PgSql\Result;

class Cartlive extends Component
{
use WithFileUploads;
    public $quntity;

    public $total_cart_price,
             $total_percent_price,
                 $total_flate_price;

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



        $this->dispatchBrowserEvent('alert',
                ['type' => 'success',  'message' => 'Cart Updated successfuly']);

        // session()->flash('message', 'Cart updated Seuccfily');

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

        $this->dispatchBrowserEvent('alert',
        ['type' => 'success',  'message' => 'Cart Updated successfuly']);

    }

// ========================= Delete ===============================
public function removeCart($id)
    {
              $item_id = cart::find($id);

              $item_id->delete($id);


              $this->dispatchBrowserEvent('alert',
              ['type' => 'error',  'message' => 'Product Deleted Successfully']);
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

        if($cart_datas != null){
        foreach($cart_datas as $data){




                if($data->descount_Type ==0 &&  $data->qty != 0 &&  $data->sale != 0 )
                 $this->total_flate_price =($data->price - $data->sale) * $data->qty;

                 if($data->descount_Type !=0 && $data->qty != 0 &&  $data->sale != 0)
                 $this->total_percent_price=($data->price - ($data->price *($data->sale /100))) * $data->qty;

            // $sum=$total_percent_price +  $total_flate_price;



        }
        $this->total_cart_price= $this->total_percent_price +  $this->total_flate_price;

      }
        return view('livewire.cartlive',['data_carts'=>$cart_datas,
                                        ])->extends('layouts.site');
    }
}
