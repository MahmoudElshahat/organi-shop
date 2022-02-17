<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class cart extends Model
{
    use HasFactory;

    use Notifiable;

    protected $table = "carts";

    public $timestamps = true;

    protected $fillable = [
        'id',
        'user_id',
        'lang',
        'product_id',
        'qty',
        'cookie',
        'created_at',
        'updated_at'
    ];

// ================================
static function sum_total_price()
    {        //    $carts= cart::select('item_id')->where('user_id',$_COOKIE['ustora'])->get();
        if (isset($_COOKIE['organi'])){

        $cookie=$_COOKIE['organi'];
        $price=DB::table('products')
        ->distinct()
        ->join('carts', 'products.id', '=', 'carts.product_id')
        ->select('products.price', 'carts.product_id')->where('cookie', $cookie)
        ->sum('price');

        $sale=DB::table('products')
        ->distinct()
        ->join('carts', 'products.id', '=', 'carts.product_id')
        ->select('products.sale', 'carts.product_id')->where( [
           ['cookie', $cookie],

            ])
        ->sum('sale');

            return $price - $sale;


    }
}


}//end class
