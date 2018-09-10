<?php

namespace App\Http\Controllers;

use SoapClient;
use App\Transaction;
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
  * initTransaction
  *
  */
  public function initTransaction (Request $request) {

    $transaction = [
      'auth' => $this->getAuth(),
      'transaction' => [
        'bankCode' => $request->bankCode,
        'bankInterface' => $request->bankInterface,
        'returnURL' => 'http://placetopay.test/transaction',
        'reference' => '123456789',
        'description' => 'Payment',
        'language' => 'ES',
        'currency' => 'COP',
        'totalAmount' => $request->totalAmount,
        'taxAmount' => 0,
        'devolutionBase' => 0,
        'tipAmount' => $request->tipAmount,
        'payer' =>
        [
          'document' => $request->document,
          'documentType' => $request->documentType,
          'firstName' => $request->firstName,
          'lastName' => $request->lastName,
          'company' => $request->company,
          'emailAddress' => $request->emailAddress,
          'address' => $request->address,
          'city' => $request->city,
          'province' => $request->province,
          'country' => $request->country,
          'phone' => $request->phone,
          'mobile' => $request->mobile
        ],
        'ipAddress' => $request->ip(),
        'userAgent' => '',
      ]
    ];

    $client = new SoapClient(env('PSE_WSDL'));
    $response = $client->createTransaction($transaction)->createTransactionResult;

    if ($response->returnCode == 'SUCCESS') {

      Transaction::create([
        'transactionID' => $response->transactionID,
        'responseCode' => $response->responseCode,
        'trazabilityCode' => $response->trazabilityCode
      ]);

      return redirect()->away($response->bankURL);
    }

    return view('payment.error', ['response' => $response]);
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
