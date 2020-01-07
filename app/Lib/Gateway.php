<?php
/**
 * Created by PhpStorm.
 * User: garage
 * Date: 2020-01-07
 * Time: 18:06
 */

namespace App\Lib;


use AfricasTalking\SDK\AfricasTalking;

class Gateway
{
    public static function sendSms($phone,$message){


        $username = env('USERNAME');
        $apiKey = env('APIKEY');

        $AT = new AfricasTalking($username,$apiKey);
        $sms = $AT->sms();
        $response = $sms->send([
            'to'=>$phone,
            'message'=>$message
        ]);

        return $response;

}

}