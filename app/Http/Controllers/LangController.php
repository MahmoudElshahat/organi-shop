<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class LangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function index()
    {

        return view('layouts.site');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function change(Request $request)
    {
        dd($request->lang);
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);



        return redirect()->back();
    }
}
