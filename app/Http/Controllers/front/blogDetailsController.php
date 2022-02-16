<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\blog;

class blogDetailsController extends Controller
{
    public function index(){

       $blogs= blog::select('*')->get();
    //    dd($blogs);

       $blogRandoms= blog::latest()->paginate(config('contans.paginate_three'));

        return view('front.blogd',[
            'blogs'=>$blogs,
            'blogRandoms'=>$blogRandoms
        ]);
    }
}
