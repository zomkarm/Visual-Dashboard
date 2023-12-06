<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller
{

    /**
     * Authenticate an User and generate token for further requests
     */
    public function authenticate(Request $request){
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){ 
            $user = Auth::user(); 
            $success['token'] =  $user->createToken('MyApp')->plainTextToken; 
            $success['name'] =  $user->name;
   
            return response()->json([
                'status'=>'true',
                'message'=>'Authorized Successfully',
                'data'=>$success
            ],200);
        } 
        else{
            return response()->json([
                'status'=>'false',
                'message'=>'Unauthorized'
            ],401);
        } 
    }

    /**
     * Api to fetch the data
     */
    public function data(Request $request){
        $data = Posts::select('likelihood')->get();
        $likelihood = array();
        foreach ($data as $s) {
            array_push($likelihood,$s->likelihood);
        }

        return response()->json([
            'status'=>'true',
            'data'=>$likelihood,
        ],200);
    }
}
