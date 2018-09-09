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
@endsection

@section('js')
@endsection
