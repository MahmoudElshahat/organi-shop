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
        $blogs_news = blog::latest()->paginate(config('contans.paginate_three'));

       $gategories= Categorie::all();

        return view('livewire.blog-live',['blogs'=>$blogs,
                                            'blogs_news'=>$blogs_news,
                                            'gategories'=>$gategories

                                        ])->extends('layouts.site');
    }
}
