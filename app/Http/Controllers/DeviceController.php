<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class DeviceController extends Controller
{
    function list(){
        return Device::all();
    }
    function listparms($id=null){
        return $id?Device::find($id):Device::all();
    }
}
