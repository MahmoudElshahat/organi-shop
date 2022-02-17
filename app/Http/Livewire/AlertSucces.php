<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AlertSucces extends Component
{

    public function save()
    {
        $this->emit('alert_remove');

        return;
    }
    public function render()
    {

        return view('livewire.alert-succes');
    }
}
