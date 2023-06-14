<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use Illuminate\Support\Facades\Validator;

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
function search($name){

     return   Device::where("name","like","%".$name."%")->get();
    
  
}
function Delete($id){
    $done = Device::find($id);
    $done->delete();
    if($done){
        return ["Result" => "its done"];
    }
    else{
        return ["Result" => "sorry its not work"];
    }
    
   
}

function testData(Request $request){
    $rules=array(
        "model" => "required|min:2|max:4"
    );
    $validator = Validator::make($request->all(),$rules);
    if ($validator -> fails()){

        return response()->json($validator->errors(),401);

    }else{
        $device = new Device;
        $device->name = $request->name;
        $device->company = $request->company;
        $device->model = $request->model;
        $result = $device->save();
        return [
            "Result" => "we have successfully saved"
        ];

    }

}

}