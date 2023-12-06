<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Posts;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * Api to fetch the data
     */
    public function data(Request $request){
        $data = Posts::all();

        return response()->json([
            'status'=>'true',
            'data'=>$data,
        ],200);
    }
}
