<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use Illuminate\Support\Str;
// ========== Models ==========
use Illuminate\Support\Facades\DB;

use App\Models\Categorie;
use App\Models\product;
use App\Models\attribuite;
use App\Models\attribuite_value;


use Exception;
use App\Http\Requests\admin\productRequest;

class Poductlive extends Component
{



    public $attrName;

    public $artval=[];

    public function mount()
    {
        $this->artval = attribuite_value::all();
    }


    public function render()
    {

        $categorie_data = Categorie::select('id', 'name')->get();

        $atributes= attribuite::select('id', 'name')->get();


        // $this->artval = attribuite_value::where('attribuite_id',$this->attrName)->get();

            dd($this->attrName);
        return view('livewire.admin.poductlive',['categorie_data' => $categorie_data,

                                                 'atributes' => $atributes,


                                            ]);
    }
}
