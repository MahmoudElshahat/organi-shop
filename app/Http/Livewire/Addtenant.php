<?php

namespace App\Http\Livewire;

use GuzzleHttp\Promise\Create;
use Livewire\Component;
use Spatie\Multitenancy\Models\Tenant;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Stancl\Tenancy\Jobs\CreateDatabase;


use Illuminate\Support\Facades\Artisan;
use Spatie\Multitenancy\Actions\MakeTenantCurrentAction;

// use  Illuminate\Http\Request;

// use App\Models\Tenant;

class Addtenant extends Component
{

    public $name,$domain,$email,$password;
// ================================ Add tenants to landlord tenant ====================
public function add(){

    // dd(rand(0,1));
    // $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
       $data= $this->validate([
            'name'=>"required|unique:landlord.tenants,name",
            'domain'=>'required||unique:landlord.tenants,domain',
            'email'=>'required|email|unique:landlord.tenants,email|unique:landlord.main_admins,email',
            // 'email'=>'required|unique:landlord.main_admins,email',
            'password'=>'required'
        ]);
        // =========== insert data into landlord tenant tabel ==========
        DB::connection('landlord')->table('tenants')
        ->insert(['name'=>$data['name'],
                        'domain'=>$data['domain'],
                        'database'=>'organi_'.$data["name"],
                        'email'=>$data['email'],
                        'password'=>$data['password']
                        // 'password'=>bcrypt($data['password'])
//
                            ]);
        // =========== insert data into landlord main_admins tabel ==========

    //    DB::connection('landlord')->table('main_admins')
    //                     ->insert(['name'=>$data['name'],
    //                     'email'=>$data['email'],
    //                     'password'=>bcrypt($data['password'])
    //                         ]);

        // ============= creat new database ========================

        DB::statement('Create Database '.'organi_'.$data["name"]);

            // ================= run migration to new database ======================

        Artisan::call('tenants:artisan migrate');

            // ================= run seed on new tanant database =======================
        $tanant= DB::connection('landlord')->table('tenants')->where('email',$data['email'])->first();

        Artisan::call('tenants:artisan db:seed --tenant='.$tanant->id);

        // ==========================================================================

        return session()->flash('message','Data Add seccessfuly');


}//end function add
// ============================================================================
    public function render()
    {

        return view('livewire.addtenant')->extends('layouts.site');
    }
}
