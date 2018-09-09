<?php

namespace App\Http\Controllers;

use SoapClient;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
  /**
  * index
  *
  */
  public function index () {
    $client = new SoapClient(env('PSE_WSDL'));
    $banks = $client->getBankList(['auth' => $this->getAuth()])->getBankListResult;

    return view('payment.show', compact('banks'));
  }
  /**
  * getAuth
  *
  */
  public function getAuth()
  {
    $seed = date('c');
    $tranKey = sha1($seed.env('PSE_KEY'), false);

    return [
      'login' => env('PSE_ID'),
      'tranKey' => $tranKey,
      'seed' => $seed
    ];
  }
}
