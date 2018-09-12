<?php

namespace App\Http\Controllers;

use App\Transaction;
use App\Soap\Consumer;
use App\Traits\SoapHelper;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTransaction;

class TransactionController extends Controller
{
  use SoapHelper;

  protected $wsPlace;

  /**
  * __construct
  *
  */
  public function __construct(Consumer $place)
  {
    $this->wsPlace = $place;
  }
  /**
  * index
  *
  */
  public function index()
  {
    $transactions = Transaction::all();
    return view('transactions.index', compact('transactions'));
  }
  /**
  * show
  *
  */
  public function show($transaction)
  {
    $transaction = $this->wsPlace->transactionInformation($transaction);
    return view('transactions.show', compact('transaction'));
  }
  /**
  * store
  *
  */
  public function store(StoreTransaction $request)
  {
    $transaction = [
      'auth' => $this->Auth(),
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

    $response = $this->wsPlace->createTransaction($transaction);

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
}
