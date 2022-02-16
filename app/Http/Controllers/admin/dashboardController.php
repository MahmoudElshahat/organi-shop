<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\admin\signupRequest;
use App\Http\Requests\admin\loginRequest;
use App\Models\User;
use App\Models\admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class dashboardController extends Controller
{

    // ================ get sign up ======================
    public function index(){

            return view('admin.dashboard');
    }
    // =============================
    public function signup_page(){

        return view('admin.Auth.signup');
    }
    // =============================================
     public function signup(signupRequest $request){

        $admin = new admin();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = bcrypt($request->password);
        $admin->save();

        return view('admin.Auth.login');
    }
    // ==================================================
     public function login_page(){

        return view('admin.Auth.login');
    }
    // ==========================================================
     public function login(loginRequest $request){

    if ($request!=null) {
        $query=DB::connection('landlord')->table('tenants')->where('email', $request->email)->first();

        $owner=DB::connection('landlord')->table('main_admins')->where('email', $request->email)->first();

        $conection_database=config('database.connections.tenant.database');

        // dd(  $conection_database);
        //=============  check of email for guard admin ==============
        if (auth()->guard('admin')->attempt([
                        'email'=>$request->email,
                        'password' => $request->password,])) {
            return redirect()->route('admin.dashboard');

        //=======  check if admin is tenant admin (DB organi_landlord/tenant table)=====================
        } elseif (($query != null) && ($query->database == $conection_database) &&($query->email==$request->email) && ($query->password == $request->password)) {

            return redirect()->route('admin.dashboard');

            //============ check if email is onwer admin (DB organi_landlord /main_admins table)=====================
        } elseif (($owner != null) && ($owner->email==$request->email) && ($owner->password == $request->password)) {
                // dd('thies owner');
            session(['owner_admin'=>$owner->email]);

            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('admin.login.page')->with(['error'=>'E-mail or password is un correct ']);
        }


    }//main if
    }//end func
// ================== show all user in dashboard ==================================
public function show_users(){
    $users=User::all();
    return view('admin.users.index',['datas'=>$users]);

}
public function logout(){

    session::flush();
    session_unset();
    Auth::logout();

     return redirect()->route('admin.login.page');

}

// =====================================
}//end class
