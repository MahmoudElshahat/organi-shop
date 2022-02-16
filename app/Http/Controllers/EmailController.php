<?php




namespace App\Http\Controllers;




use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
// use Mail;

use App\Mail\usermail;




class EmailController extends Controller

{

    /**
     * Write code on Method
     *
     * @return response()
     */

    public function index()
    {



        $details = [
            'title' => 'Mail from organi shop',
            'body' => 'This is for testing email using smtp'
        ];

        Mail::to('mahmoud.m.elshaht@gmail.com')->send(new usermail($details));

        dd("Email is Sent.");

    }

}
