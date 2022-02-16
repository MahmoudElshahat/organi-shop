<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// ============ Models ==============
use App\Models\Categorie;
use App\Models\product;
use App\Models\sub_categorie;


// use App\Models\Categorie;
// use App\Models\product;
use App\Models\cart;
// use App\Models\sub_categorie;
use Illuminate\Support\Facades\Redirect;
use Session;
// use Illuminate\Support\Facades\View;

use App\Models\blog;

// use Illuminate\Http\Request;
use Illuminate\Support\Str;



use Illuminate\Support\Facades\View;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $categories = Categorie::select('id', 'name')->get();

        view::share('categories', $categories);


         // $this->middleware('auth');
     }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
         $m_categories = Categorie::select('id', 'name')->paginate(config('contans.paginate_five'));

        $main_categori = Categorie::select('id', 'name')->paginate(config('contans.paginate_count'));

        $sub_categori = sub_categorie::select('id', 'name')->orderBy('id', 'desc')->paginate(config('contans.paginate_count'));

        $products = product::select('*')->inRandomOrder()->paginate(config('contans.paginate_count'));

        $cat_product = product::where('categorie_id', 5)->get();

       $latest_product=product::select('id','name','image','price','sale','descount_Type')->orderBy('id','desc')->paginate(config('contans.paginate_three'));

       $topRate_product = product::select('id','name','image', 'price', 'sale','rate','descount_Type')->orderBy('rate', 'desc')->paginate(config('contans.paginate_three'));

       $topRate_product = product::select('id','rate','name','image', 'price', 'sale','descount_Type')->orderBy('rate', 'desc')->paginate(config('contans.paginate_three'));

       $review_product = product::select('id','name','image', 'price', 'sale','rate','descount_Type')->inRandomOrder()->paginate(config('contans.paginate_three'));

        $blogs=blog::select('*')->paginate(config('contans.paginate_three'));
        foreach($blogs as $blog)
        $coment_count= blog::select('comment')->where('id',$blog->id)->sum('comment');


        return view('front.home',[
                                        'main_categoris' => $main_categori,

                                        'm_categories' => $m_categories,

                                        'sub_categoris' => $sub_categori,

                                        'products' => $products,

                                        'latest_product'=>$latest_product,

                                        'topRate_product'=>$topRate_product,

                                        'review_products'=>$review_product,
                                        'coment_count'=>$coment_count,

                                        'cat_product'=>$cat_product,


                                        'blogs'=>$blogs

        ]);
    }
// ###########################################     ##########################################
    public function select_categori_products($id){


       $select_categori_pro= product::where('categorie_id',$id)->get();

       return view('front.home',['$select_categori_pro'=>$select_categori_pro]);
    }

// ##############################################      ########################################






#################################################       ###########################################

}
