<?php

namespace App\Http\Controllers\services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Http\Client;
// use Illuminate\Support\Facades\Http;

// use guzzlehttp;
// use guzzlehttp;


// use GuzzleHttp\Request;

class fatoorahservices 
{
/*
 *@param $data
*/

     private $base_url;
     private $headers;
     private $request_client;

    public function __Construct(Client $request_client){
        $this->request_client=$request_client;

        $this->base_url=env('fatootah_base_url');

        $this->headers=[
            'content_type'=>'application/json',

            'authurization'=>'Bearer'.env('fatoorah_token')
        ];


    }
// ==================================
private function builedRequest($url,$method,$body=[]){
  // $url => fatora given usrl
    // $client = new GuzzleHttp\Client();
    // new GuzzleHttp\Client

    $request = new Request($method , $this->base_url.$url ,$this->headers);

        if(!$body)
            return false;

            $response= $this->request_client->send($request,[
                'json'=>$body
            ]);

        if($response->getStatusCode()!= 200){
            return false;
        }
        $response=json_decode($response->getBody(),true);

        return $response;

}
// ============================

public function sendPayment($data){

    $response=$this->builedRequest('v2/sendPayment','post',$data);
}


// ============================
}//end class
