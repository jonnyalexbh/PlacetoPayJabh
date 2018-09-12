<?php

namespace App\Soap;

use SoapClient;
use App\Traits\SoapHelper;
use Illuminate\Support\Facades\Cache;

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
  * getBanks saves in cache 24 hours
  *
  */
  public function getBanks()
  {
    return Cache::remember('pay', $minutes='1440', function()
    {
      $response = $this->client->getBankList(['auth' => $this->Auth()])->getBankListResult;
      return $response;
    });
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
  * transactionInformation
  *
  */
  public function transactionInformation($transaction)
  {
    $response = $this->client->getTransactionInformation(['auth' => $this->Auth(), 'transactionID' => $transaction])->getTransactionInformationResult;
    return $response;
  }
}
