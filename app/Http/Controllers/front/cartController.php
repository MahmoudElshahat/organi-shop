<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


use App\Models\cart;

class cartController extends Controller
{
    public function index(){



        return view('front.cart');
    }
    // =================   =============================
public function add(Request $request,$id)
    {
        $q = cart::select('product_id')
            ->where([
            ['product_id', '=', $id],
            ['cookie', '=', $_COOKIE['organi']]
        ])->first();
        if (!$q){
                cart::create([
                // 'user_id'=>$_COOKIE['organi'],
                'product_id' => $id,
                'qty' => 1,
                'cookie' => $_COOKIE['organi'],
                'slug' => Str::slug($request->name)
            ]);
        }else{
            cart::where([['product_id', '=', $id], ['cookie', '=', $_COOKIE['organi']]])->increment('qty');

        }


        return redirect()->route('home');
    }




    // ====================================
    public function edite()
    {

        return view('front.cart');
    }
// =================   =============================
public function update()
    {

        return view('front.cart');
    }
// =================   =============================
public function delete()
    {

        return view('front.cart');
    }
// =================   =============================
}
