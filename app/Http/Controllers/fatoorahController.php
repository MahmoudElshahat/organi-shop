<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Http;

use App\Http\Controllers\services\fatoorahservices;

class fatoorahController extends Controller
{
    Private $fatoorahservices;
    public function __Construct(fatoorahservices $fatoorahservices){

        $this->fatoorahservices=$fatoorahservices;



    }

// ================================
    public function payorder(){
        $data=[

            // this value shod get from database

            'NotificationOption' => 'Lnk', //'SMS', 'EML', or 'ALL'
            'InvoiceValue'       => '50',
            'CustomerName'       => 'elshahat',

            'CustomerEmail'=>'melthkeel@gmail.com',
            
            'CallBackUrl'=>env('succsess_url'),
            'ErrorUrl'=>env('error_url'),
            'Language'=>'en',
            'DisplayCurrencyIso'=>'sar',


        ];

        $this->fatoorahservices->sendPayment($data);
    }


}//end class
