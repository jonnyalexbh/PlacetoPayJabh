<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTransaction extends FormRequest
{
  /**
  * Determine if the user is authorized to make this request.
  *
  * @return bool
  */
  public function authorize()
  {
    return true;
  }

  /**
  * Get the validation rules that apply to the request.
  *
  * @return array
  */
  public function rules()
  {
    return [
      'bankCode' => 'required|numeric',
      'bankInterface' => 'required|in:0,1',
      'documentType' => 'required|string',
      'document' => 'required|numeric',
      'firstName' => 'required|string',
      'lastName' => 'required|string',
      'totalAmount' => 'required|numeric|min:1'
    ];
  }
  /**
  * messages
  *
  */
  public function messages()
  {
    return [
      'document.required' => 'El campo tipo documento es obligatorio',
      'document.numeric' => 'El campo tipo documento debe ser numerico',
      'bankCode.required' => 'El campo tipo documento es obligatorio',
      'bankCode.numeric' => 'El campo tipo documento debe ser numerico'
    ];
  }
}
