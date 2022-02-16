<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;


use App\Models\messages;
use Illuminate\Http\Request;

use Illuminate\Http\Requests\messagesRequest;


class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response;
     */
    public function index()
    {
        $messages = messages::all();

        return view('admin.messages.index',['datas'=>$messages]);
    }

    public function show(messages $messages)
    {
        //
    }

    public function update(Request $request, messages $messages)
    {
        //
    }


    public function destroy($id)
    {
        $delete=messages::find($id);

        $delete->delete();

        return redirect()->route('index.messages')->with(['message'=>'Message  deleted successfuly']);
    }
}
