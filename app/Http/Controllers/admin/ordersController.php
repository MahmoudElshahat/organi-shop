<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use App\Models\order;
use Illuminate\Http\Request;

class ordersController extends Controller
{
    public function index(){

        $order_data=order::all();

        return view('admin.orders.index',[
                                        'datas'=>$order_data
                                    ]);
    }
// =================================================
    public function destory($id)
    {

        $del_order= order::find($id);

        $del_order->delete();

        return redirect()->route('index.orders')->with(['message'=>'order deleted successfuly']);
    }

}








