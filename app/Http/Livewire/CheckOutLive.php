<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\order;

use App\Models\cart;

use Illuminate\Support\Facades\DB;


use App\Models\User;

use Illuminate\Support\Str;
class CheckOutLive extends Component
{
    public $first_name,
            $last_name,
            $country,
            $adress,
            $Apartment,
            $City,
            $State,
            $Postcode,
            $Phone,
            $email,
            $Create_account,
            $Password,
            $Order_notes;
        // ===================

    public $product_name,$sub_total,
            $product_price;

    // ====================================
    public function store(){



        $data = $this->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'country' => 'required',
            'adress' => 'required',
            'Apartment' => 'nullable',
            'City' => 'required',
            'State' => 'required',
            'Postcode' => 'required',
            'Phone'=>'required',
            'Create_account' => 'nullable',
            'email' => 'required|email|unique:users,email|unique:orders,email',
            'Password' => 'required',
            'Order_notes' => 'nullable',
        ]);
        // dd($data);
    // ==============================================
        order::create([
            'first_name'=>$data['first_name'] ,
            'last_name'=>$data['last_name'],
            'country'=>$data['country'],
            'Address'=>$data['adress'],
            'apartment'=>$data['Apartment'],
            'city' => $data['City'],
            'State'=>$data['State'],
            'Postcode'=>$data['Postcode'],
            'Phone'=>$data['Phone'],
            'Order_notes'=>$data['Order_notes'],
            'slug'=>str::slug($data['first_name']),
            'email'=>$data['email'],
        ]);
    // ============================================
     if($this->Create_account !=''){
        // dd($data);

                User::create([
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'country' => $data['country'],
                'Address' => $data['adress'],
                'apartment' => $data['Apartment'],
                'city' => $data['City'],
                'Postcode' => $data['Postcode'],
                'Phone' => $data['Postcode'],
                'password' => bcrypt($this->Password),
                'email' => $data['email'],
                // 'slug' => str::slug($data['first_name']),
            ]);
            // =======================

            if(isset($_COOKIE['organi'])){
            $user=cart::where('cookie',$_COOKIE['organi'])->first();
            if($user)
            $user->update([
                    'user_id'=>$data['email'],
            ]);
        }

        $this->dispatchBrowserEvent('alert',
        ['type' => 'success',  'message' => 'order sent successfuly']);

            session()->flash('message', 'order sent successfuly.');
     }else{
        $this->dispatchBrowserEvent('alert',
        ['type' => 'success',  'message' => 'order sent successfuly']);
            session()->flash('message', 'order sent successfuly.');
     }


    }
    // =====================================
    public function render()
    {
        // $order_detailes=cart::where('cookie',$_COOKIE['organi'])->get('price','sale','qty');

        $cookie = $_COOKIE['organi'];

        $products = cart::select('product_id')->where('cookie', $cookie)->get();


        $cart_datas = DB::table('products')
            ->distinct()
            ->join('carts', 'products.id', '=', 'carts.product_id')
            ->select('products.*', 'carts.*')->where('cookie', $cookie)
            ->paginate(config('contans.paginate_count'));


        $price = DB::table('products')
            ->distinct()
            ->join('carts', 'products.id', '=', 'carts.product_id')
            ->select('products.price', 'carts.product_id')->where('cookie', $cookie)
            ->sum('price');



        $sale = DB::table('products')
            ->distinct()
            ->join('carts', 'products.id', '=', 'carts.product_id')
            ->select('products.sale', 'carts.product_id')->where(
        [['cookie', $cookie]

        ])
        ->sum('sale');
                $total_qty = cart::where('cookie', $cookie)->sum('qty');
                foreach($products as $product)
                $this->sub_total=($sale!=0 & $product->descount_Type !=0)? ($price - ($price *($sale / 100)))  : ($price - $sale ) ;
        // ===========================
        return view('livewire.check-out-live',[
            'order_detailes'=>$cart_datas])
            ->extends('layouts.site');
    }
}
