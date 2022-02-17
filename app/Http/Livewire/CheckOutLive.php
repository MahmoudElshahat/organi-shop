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
            $Order_notes
           ;
        // ===================

    public $product_name,$sub_total,
            $product_price,
            $data_carts=[],
            $total_flate_price,
            $total_percent_price;


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

        $cookie = $_COOKIE['organi'];

        $this->data_carts = DB::table('products')
            ->distinct()
            ->join('carts', 'products.id', '=', 'carts.product_id')
            ->select('products.*', 'carts.*')
            ->where([
                    ['cookie', $cookie],
                    ['lang',LaravelLocalization::getCurrentLocale()]
                ])->get();

                if($this->data_carts != null){
                    foreach($this->data_carts as $data){

                            if( ($data->descount_Type ==0) && ($data->qty != 0)  )
                             $this->total_flate_price =($data->price - $data->sale) * $data->qty;

                             if(($data->descount_Type !=0) && ($data->qty != 0))
                             $this->total_percent_price=($data->price - ($data->price *($data->sale /100))) * $data->qty;

                    $this->sub_total = $this->total_percent_price +  $this->total_flate_price;
                    }
                }


        return view('livewire.check-out-live',[ 'order_detailes'=>$this->data_carts])->extends('layouts.site');


    }
}
