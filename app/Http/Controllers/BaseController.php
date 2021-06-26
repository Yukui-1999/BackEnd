<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BaseController extends Controller
{
    //
    protected function create($data, $msg='',$code=200)
    {
        //
        $result=[
            'code'=>$code,
            'msg'=>$msg,
            'data'=>$data
        ];

        return response($result,$code);
    }
}
