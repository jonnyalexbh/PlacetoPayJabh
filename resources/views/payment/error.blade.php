<!--
* jonnyalexbh
* @Description: error
-->

@extends('layouts.app')

@section('title', 'Index')

@section('css')
@endsection

@section('content')
  <p>{{ $response->responseReasonText }}</p>
@endsection

@endsection

@section('js')
@endsection
