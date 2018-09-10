<?php

namespace App\Soap;

use SoapClient;

class Consumer
{
  protected $client;
  /**
  * __construct
  *
  */
  public function __construct()
  {
    $this->client = new SoapClient(env('PSE_WSDL'));
  }
  /**
  * getBanks
  *
  */
  public function getBanks()
  {
    $response = $this->client->getBankList(['auth' => $this->getAuth()])->getBankListResult;
    return $response;
  }
  /**
  * createTransaction
  *
  */
  public function createTransaction($transaction)
  {
    $response = $this->client->createTransaction($transaction)->createTransactionResult;
    return $response;
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
