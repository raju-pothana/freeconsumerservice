<?php namespace MY_App\Libraries\smsUtil;
defined('BASEPATH') OR exit('No direct script access allowed');

class CurlSMSAPI {
    public function curl($mbl, $otp) {
    // $apiKey = urlencode('mFQVxQtfZls-pRKrLajfJ5onZFPYV17Gy94tJrb7UC');
    $numbers = array($mbl);
    $sender = urlencode('TXTLCL');
    $sms = rawurlencode($message .$otp);
    $numbers = implode(',', $numbers);
    $smsdata = array('apikey' => $apiKey, 'numbers' => $numbers, 'sender' => $sender, 'message' => $message);
    $ch = curl_init('https://api.textlocal.in/send/');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $smsdata);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    return $response;
  }
}
