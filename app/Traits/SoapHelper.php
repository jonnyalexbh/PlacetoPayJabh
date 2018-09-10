<?php

namespace App\Traits;

trait SoapHelper
{
  /**
  * Auth
  *
  */
  private function Auth()
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
