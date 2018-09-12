<!--
* jonnyalexbh
* @Description: index transactions
-->

@extends('layouts.app')

@section('title', 'Index')

@section('css')
@endsection

@section('content')

  <div class="row p-1">
    <div class="col-md-12">
      <table class="table">
        <thead>
          <tr>
            <th class="border-0 text-uppercase small font-weight-bold">transactionID</th>
            <th class="border-0 text-uppercase small font-weight-bold">trazabilityCode</th>
            <th class="border-0 text-uppercase small font-weight-bold">responseCode</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($transactions as $transaction)
            <tr>
              <td><a href="{{ route('s.transaction', $transaction->transactionID )}}">{{ $transaction->transactionID }}</a></td>
              <td>{{ $transaction->trazabilityCode }}</td>
              <td>
                @switch($transaction->responseCode)
                  @case(0)
                  FAILED
                  @break
                  @case(1)
                  APPROVED
                  @break
                  @case(2)
                  DECLINED
                  @break
                  @case(3)
                  PENDING
                  @break
                @endswitch
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

@endsection

@section('js')
@endsection
