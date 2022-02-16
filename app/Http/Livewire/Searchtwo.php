<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Categorie;

class Searchtwo extends Component
{   public $search='';
    public function render()
    {
        $trem = '%' . $this->search . '%';
        // if($this->search != "")
        $data = Categorie::where('name', 'LIKE', $trem)->paginate(config('contans.paginate_count'));


        return view('livewire.searchtwo',['data'=>$data]);
    }
}
