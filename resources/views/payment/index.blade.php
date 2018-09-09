<!--
* jonnyalexbh
* @Description: index payment
-->

@extends('layouts.app')

@section('title', 'Index')

@section('css')
@endsection

@section('content')
  <div class="row pb-5 p-1">
    <div class="col-md-6">
      <p class="font-weight-bold mb-4">Informacion del cliente</p>
      <p class="mb-1">Jonny Alexander BH</p>
      <p>JABH Inc</p>
      <p class="mb-1">Medellin, Colombia</p>
      <p class="mb-1">Cra 67A Cl 64 Sur-45</p>
    </div>

    <div class="col-md-6 text-right">
      <p class="font-weight-bold mb-4">&nbsp;</p>
      <p class="mb-1"><span class="text-muted">&nbsp; </span> &nbsp;</p>
      <p class="mb-1"><span class="text-muted">&nbsp; </span> &nbsp;</p>
      <p class="mb-1"><span class="text-muted">&nbsp; </span> &nbsp;</p>
      <p class="mb-1"><span class="text-muted">&nbsp; </span> &nbsp;</p>
    </div>
  </div>

  <div class="row p-1">
    <div class="col-md-12">
      <table class="table">
        <thead>
          <tr>
            <th class="border-0 text-uppercase small font-weight-bold">ID</th>
            <th class="border-0 text-uppercase small font-weight-bold">Item</th>
            <th class="border-0 text-uppercase small font-weight-bold">Descripcion</th>
            <th class="border-0 text-uppercase small font-weight-bold">Cantidad</th>
            <th class="border-0 text-uppercase small font-weight-bold">Costo Unidad</th>
            <th class="border-0 text-uppercase small font-weight-bold">Total</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Software</td>
            <td>LTS Versions</td>
            <td>3</td>
            <td>$12000</td>
            <td>$36000</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Software</td>
            <td>Support</td>
            <td>5</td>
            <td>$25000</td>
            <td>$125000</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Software</td>
            <td>Sofware Collection</td>
            <td>6</td>
            <td>$228000</td>
            <td>$1368000</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <a class="btn btn-primary btn-lg btn-block" href="{{ route('pay') }}">Pagar con PSE</a>
@endsection

@section('js')
@endsection
