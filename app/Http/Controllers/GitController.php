<?php

namespace App\Http\Controllers;

use App\Git;
use App\User;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class GitController extends BaseController
{
    public function index(){
        $result = Git::all();
        return response()->json($result);
    }
    public function store(Request $request){
        $git = new Git();
        $git->git = $request->git;


        $user = User::findOrFail(12);
        $user->git()->save($git);

        $data['user'] = $user;
        $data['git'] = $git;
        return response()->json($data);


        
    }
}
