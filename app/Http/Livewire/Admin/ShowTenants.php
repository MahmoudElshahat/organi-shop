<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class ShowTenants extends Component
{

    public function delta($id){
        dd($id);
        // delete('delete from linha where id = ?',[$id]);
       $de= DB::connection('landlord')->table('tenants')->where('id',2)->first();



    //    $de->delete();
        return redirect()->back();
    }
// ====================================================
    public function render()
    {
       $all_tenants = DB::connection('landlord')->table('tenants')->select('*')->get();
        return view('livewire.admin.show-tenants',['all_tenants'=>$all_tenants])->extends('layouts.admin');
    }
}
