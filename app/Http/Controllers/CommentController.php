<?php

namespace App\Http\Controllers;

use App\Lib\Gateway;
use App\Rules\AreaCode;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CommentController extends Controller
{
    public function comment(Request $request){
        $this->validate($request,
            [
                'first_name'=>'required',
                'phone'=>['required',new AreaCode],
                'comments'=>'required'
            ]);

       $data =  $request->all();
       Str::startsWith('+254',$data['phone']);
        //send an sms
        $msg = "{$data['first_name']} of {$data["phone"]} has said {$data["comments"]}";
        $results = Gateway::sendSms(env("VIRTUAL_PHONE"),$msg);
        return back()->with('results',$results);



    }
}
