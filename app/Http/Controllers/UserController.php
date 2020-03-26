<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Laravel\Lumen\Routing\Controller as BaseController;

class UserController extends BaseController
{
    public function index(){
        $result = User::all();
        return response()->json($result);
    }

    public function changePassword(Request $request,$id){
        $result = User::find($id);
        $result->password = Hash::make($request->newPassword);
        $result->save();

        return response()->json($result);
    }


    public function update(Request $request, $id){

        $result = User::find($id);
        // return response()->json($request);

        $result->no_hp = $request->no_hp;
        $result->sma = $request->sma;
        $result->save();
        if($result){
            $data['code'] = 200;
            $data['result'] = $result;
        }else{
            $data['code'] = 500;
            $data['result'] = 'error';
        }

        return response($data);

    }
}
