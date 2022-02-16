<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\front\user_signupRequest;
use App\Http\Requests\front\user_loginRequest;

use App\Models\User;
use phpDocumentor\Reflection\Types\This;

class user_lognController extends Controller
{
    public function signup_page(){


        return view('front.sign.signup');
    }
// ===============================================================
    public function signup(user_signupRequest $request){

       $user= User::find($request->email);
       if(!$user){
            $admin = new User();
            $admin->name = $request->name;
            $admin->email = $request->email;
            $admin->password = bcrypt($request->password);
            $admin->save();
       }else{
            return redirect()->route('user.login.page')->with(['error'=>'this wmail already exites']);
       }


        return redirect()->route('home');

    }
// =======================================================
    public function login_page(){


        return view('front.sign.login');
    }

    // =================================================

    public function login(user_loginRequest $request){

        // $user=User::where('email',$request->email)->first();
        // dd($user);
        if(auth()->guard('user')->attempt([
            'email'=>$request->email,
            'password'=>$request->password,
        ])){
            return redirect()->route('home');
        }else{
            return redirect()->route('user.login.page');
        }

    }
// ============================================================
}//end class
