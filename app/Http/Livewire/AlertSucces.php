<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AlertSucces extends Component
{

    public function save()
    {
        session()->flash('message', 'Errorrrrr');
        $this->emit('alert_remove');
        return;
    }
    public function render()
    {




        return view('livewire.alert-succes');
    }
}
