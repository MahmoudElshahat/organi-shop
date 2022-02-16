<?php
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cookie;

 if(!isset($_COOKIE['organi'])){

    setcookie('organi',uniqid(),0,'/',);

 }
