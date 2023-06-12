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
    function add(Request $request){
        $device = new Device;
        $device->name = $request->name;
        $device->company = $request->company;
        $device->model = $request->model;
        $result = $device->save();
        if($result){
            return ["Result"=>"result successfully added"];
        }else{
             return ["Result"=>"this is else error"];
    }   
}
function update(Request $request){
    $device = Device::find($request->id);
    $device -> name = $request->name;
    $device -> company = $request->company;
    $device -> model = $request->model;
    $result = $device->save();
    if($result){
        return ["Result"=>"successfully updated"];
    }else{
        return ["Result"=>"am sorry its not work"];
    }
    
}
}