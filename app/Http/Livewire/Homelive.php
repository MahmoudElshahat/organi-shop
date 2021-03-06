<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

use App\Models\Categorie;
use App\Models\product;
use App\Models\cart;
use App\Models\sub_categorie;
use Illuminate\Support\Facades\Redirect;
use Session;
use Illuminate\Support\Facades\View;
use Livewire\WithPagination;

use App\Models\blog;

use Illuminate\Support\Facades\App;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class Homelive extends Component
{
    use WithFileUploads;
    use WithPagination;

    public $cat_product =[];
       public  $coment_count,
                $pro,
                $categori_id;

    public  $show_section=true;
// ===================================================================
public function product_detaile($id){

    $product_detailes=product::where('id',$id)->first();

    return redirect()->route('Shop.details')->with($product_detailes);
}

// ===================== shop deatails ==========================
public function shop_details($id)
    {

        // dd($id);
        $product_det = product::select('*')
        ->where([
                ['id', $id],
                ['lang',LaravelLocalization::getCurrentLocale()]
                ])
        ->first();


        // dd($products);

        return Redirect::route('Shop.details')->with(['product_det'=>$product_det]);

    }
    // =====================================================
    public function add($id){
        // dd($id);
        $q = cart::select('product_id')
            ->where([
            ['product_id', '=', $id],
            ['cookie', '=', $_COOKIE['organi']]
        ])->first();
        if (!$q) {
            cart::create([
                'user_id'=>$_COOKIE['organi'],
                'product_id' => $id,
                'qty' => 1,
                'cookie' => $_COOKIE['organi'],
                // 'slug' => Str::slug($request->name)
            ]);
        }
        else {
            cart::where([['product_id', '=', $id], ['cookie', '=', $_COOKIE['organi']]])->increment('qty');
        }

        $this->dispatchBrowserEvent('alert',
        ['type' => 'success',  'message' => 'product Add to cart successfuly']);

        // session()->flash('message','product Add to cart successfuly');
    }
// ============================ select product by categories ============================
public function show(){

   return $this->show_section=true;
}
// ========================
public function s_pro($id)
    {
          return  $this->categori_id = $id;
    }

// ====================================================
    public function render()
    {


        $m_categories = Categorie::select('id', 'name')->where('lang',LaravelLocalization::getCurrentLocale())->paginate(config('contans.paginate_five'));

        $main_categori = Categorie::select('id', 'name')->where('lang',LaravelLocalization::getCurrentLocale())->paginate(config('contans.paginate_count'));

        $sub_categori = sub_categorie::select('id', 'name')->orderBy('id', 'desc')->where('lang',LaravelLocalization::getCurrentLocale())->paginate(config('contans.paginate_count'));
        $products = product::select('*')->inRandomOrder()->where('lang',LaravelLocalization::getCurrentLocale())->paginate(config('contans.paginate_count'));
        // dd($products);
        if ($this->categori_id != null) {
            $this->cat_product = product::where([['categorie_id', $this->categori_id],['lang',LaravelLocalization::getCurrentLocale()]])->get();
        }else{
            $this->cat_product =product::select('*')->OrderBY('id','desc')->where('lang',LaravelLocalization::getCurrentLocale())->limit(config('contans.paginate_count'))->get();
        }

       $latest_product=product::select('id','name','image','price','sale','descount_Type')->orderBy('id','desc')->where('lang',LaravelLocalization::getCurrentLocale())->paginate(config('contans.paginate_three'));

       $topRate_product = product::select('id','name','image', 'price', 'sale','rate','descount_Type')->orderBy('rate', 'desc')->where('lang',LaravelLocalization::getCurrentLocale())->paginate(config('contans.paginate_three'));

       $topRate_product = product::select('id','rate','name','image', 'price', 'sale','descount_Type')->orderBy('rate', 'desc')->where('lang',LaravelLocalization::getCurrentLocale())->paginate(config('contans.paginate_three'));

       $review_product = product::select('id','name','image', 'price', 'sale','rate','descount_Type')->inRandomOrder()->where('lang',LaravelLocalization::getCurrentLocale())->paginate(config('contans.paginate_three'));

        $blogs=blog::select('*')->where('lang',LaravelLocalization::getCurrentLocale())->paginate(config('contans.paginate_three'));
        foreach($blogs as $blog)
        $this->coment_count= blog::select('comment')->where([ ['id',$blog->id], ['lang',LaravelLocalization::getCurrentLocale()] ])->sum('comment');

        // =========================================
        $categories = Categorie::select('id', 'name')->where('lang',LaravelLocalization::getCurrentLocale())->get();

        view::share('categories',$categories);

        // =======================

        return view('livewire.homelive',[
                                        'main_categoris' => $main_categori,

                                        'm_categories' => $m_categories,

                                        'sub_categoris' => $sub_categori,

                                        'products' => $products,

                                        'latest_product'=>$latest_product,

                                        'topRate_product'=>$topRate_product,

                                        'review_products'=>$review_product,

                                        'blogs'=>$blogs

        ])->extends('layouts.site');
    }


}//end class
