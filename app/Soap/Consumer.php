<?php

namespace App\Soap;

use SoapClient;
use App\Traits\SoapHelper;

class Consumer
{
  use SoapHelper;

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
    $response = $this->client->getBankList(['auth' => $this->Auth()])->getBankListResult;
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
}
