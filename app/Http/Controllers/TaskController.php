<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Laravel\Lumen\Routing\Controller as BaseController;

class TaskController extends BaseController
{
    
    
    public function index(){
        $num=1;
        $data['prime'] = [];
        while($num<100){
            $n = isPrime($num);
            if($n!=null){
                $data['prime'][] = $n ;
                
            }
        $num++;
        }
        
        return response()->json($data);

        

    }

    
}
