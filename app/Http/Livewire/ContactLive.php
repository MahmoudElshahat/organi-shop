<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\message;
use Illuminate\Http\Request;

use App\Events\admin_message;

use Illuminate\Http\Requests\admin\messagesRequest;

class ContactLive extends Component
{

    public $name,$email,$message;

    public function store()
    {
            $data=$this->validate([
                 'name'=>'required',
                'email' => 'required|email',
                'message' => 'required'

            ]);


        message::create([
            'name'=> $data['name'],

            'email'=>$data['email'] ,

            'massage'=>$data['message'] ,
        ]);


        $pusher_data=[
            'name'=> $data['name'],

            'email'=>$data['email'] ,

            'massage'=>$data['message'] ,
        ];
        event(new admin_message($pusher_data));


        session()->flash('message', 'Message sent successfuly.');

    }




// ============================     ============================================
    public function render()
    {
        return view('livewire.contact-live')->extends('layouts.site');
    }
}
