<?php

namespace App\Http\Livewire;

use App\Models\blog;

use App\Models\Categorie;


use Livewire\Component;

class BlogDetailsLive extends Component
{
    public $search='';



    public function render()
    {



       $blogs= blog::where('lang',LaravelLocalization::getCurrentLocale())->get();

       $blogs_random= blog::inRandomOrder()->where('lang',LaravelLocalization::getCurrentLocale())->paginate(config('contans.paginate_three'));


       $new_blogs= blog::latest()->where('lang',LaravelLocalization::getCurrentLocale())->paginate(config('contans.paginate_three'));


            $trem = '%' . $this->search . '%';
            $data = Categorie::where('name', 'LIKE', $trem)->paginate(config('contans.paginate_count'));

            $categories=Categorie::inRandomOrder()->where('lang',LaravelLocalization::getCurrentLocale())->paginate(config('contans.paginate_five'));



        return view('livewire.blog-details-live',[

                                            'blogs'=>$blogs,

                                            'blogs_random'=>$blogs_random,

                                            'new_blogs'=>$new_blogs,

                                            'datas'=>$data,

                                            'categories'=>$categories

                                      ])->extends('layouts.site');
    }
}
