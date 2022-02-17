<?php

namespace App\Http\Livewire;
use App\Models\blog;

use App\Models\Categorie;

use Livewire\Component;

class BlogLive extends Component
{
    public function render()
    {
        $blogs=blog::all();
        $blogs_news = blog::latest()->where('lang',LaravelLocalization::getCurrentLocale())->paginate(config('contans.paginate_three'));

       $gategories= Categorie::where('lang',LaravelLocalization::getCurrentLocale())->get();

        return view('livewire.blog-live',['blogs'=>$blogs,
                                            'blogs_news'=>$blogs_news,
                                            'gategories'=>$gategories

                                        ])->extends('layouts.site');
    }
}
