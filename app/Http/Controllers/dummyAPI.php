<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dummyAPI extends Controller
{
    function getData(){
        return [
            "Name"=>"ahmed",
            "Email"=>"fox.vivo2@gmail.com",
            "Address"=>"Perm"
        ];
    }
}
