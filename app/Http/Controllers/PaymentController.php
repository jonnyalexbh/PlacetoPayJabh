<?php

namespace App\Http\Controllers;

use SoapClient;
use App\Soap\Consumer;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
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
  public function index () {
    $banks = $this->wsPlace->getBanks();
    return view('payment.show', compact('banks'));
  }
}
