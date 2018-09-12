<!--
* jonnyalexbh
* @Description: index
-->

@extends('layouts.app')

@section('title', 'Index')

@section('css')
@endsection

@section('content')
  <a class="btn btn-success btn-lg btn-block" href="{{ route('invoice') }}">Pagar factura</a>
  <a class="btn btn-info btn-lg btn-block" href="{{ route('transactions') }}">Ver transacciones</a>
@endsection

@section('js')
@endsection
