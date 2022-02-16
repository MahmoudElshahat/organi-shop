<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class showTenantController extends Controller
{

    public function index(){


        $all_tenants = DB::connection('landlord')->table('tenants')->select('*')->get();

        return view('admin.tenant.tenantss',['all_tenants'=>$all_tenants]);

    }

// =========================== function delete All tenant data ===============================
    public function delete($id){

            // ============ delet DB of tenant =====================
       $DB_name= DB::connection('landlord')->table('tenants')->where('id',$id)->first();

        DB::statement('DROP Database '.$DB_name->database);

        // ============= delete tenant data fromt from main_admins table in landlord database  ============

       $DB_name= DB::connection('landlord')->delete('delete from main_admins where email=?' , [$DB_name->email]);

       // ===== delet tenant from landlord tenant table ============
        DB::connection('landlord')->delete('delete from tenants where id=? ',[$id]);

        return redirect()->back();
    }
// ===============================

}// End class
