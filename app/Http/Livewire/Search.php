<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Livewire\WithPagination;


use App\Models\Categorie;


class Search extends Component
{
    use WithPagination;

    public $search='';
    public function render()
    {
            $trem = '%' . $this->search . '%';
        // if($this->search != "")
            $search = Categorie::where('name', 'LIKE', $trem)->paginate(config('contans.paginate_count'));
            // return view('livewire.search', ['data' => $sear]);
        // }else{

        // return view('livewire.search');
        // }



        return view('livewire.search', ['data' => $search]);

    }
}
