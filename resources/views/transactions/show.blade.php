<!--
* jonnyalexbh
* @Description: show transactions
-->

@extends('layouts.app')

@section('title', 'Index')

@section('css')
@endsection

@section('content')
  <h3>Estado de la transacción</h3>
  <p>Estado: {{ $transaction->transactionState }}</p>
  <p>Respuesta: {{ $transaction->responseReasonText }}</p>

@endsection

@section('js')
@endsection
