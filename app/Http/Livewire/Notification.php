<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Notification extends Component
{

    // // ===================================
    public function alertSuccess()
    {




        $this->emit("swal:confirm", [
            'type'        => 'warning',
            'title'       => 'Are you sure?',
            'text'        => "You won't be able to revert this!",
            'confirmText' => 'Yes, delete!',
            'method'      => 'appointments:delete',
            'params'      => [], // optional, send params to success confirmation
            'callback'    => '', // optional, fire event if no confirmed
        ]);





        // $this->dispatchBrowserEvent('alert',
        //         ['type' => 'success',  'message' => 'User Created Successfully!']);
    }
    // // ===================================
    public function alertError()
    {
        $this->emit('swal:alert', [
            'type'    => 'success',
            'title'   => 'This is a success alert!!',
            'timeout' => 10000
        ]);
    }
    // // ===================================
    public function alertInfo()
    {
      
    }
    // // ===================================
    public function render()
    {
        return view('livewire.notification')->extends('layouts.site');
    }

}
