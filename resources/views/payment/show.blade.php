<!--
* jonnyalexbh
* @Description: show
-->

@extends('layouts.app')

@section('title', 'Index')

@section('css')
@endsection

@section('content')
  <form action="/action_page.php">
    <div class="form-group row">
      <label for="example-text-input" class="col-2 col-form-label">Tipo de cliente</label>
      <div class="col-10">
        <select name="interfaz" class="form-control" required>
          <option value="0">Persona</option>
          <option value="1">Empresa</option>
        </select>
      </div>
    </div>
    <div class="form-group row">
      <label for="example-search-input" class="col-2 col-form-label">Banco</label>
      <div class="col-10">
        <select class="" name="">
          @foreach ($banks->item as $bank)
            <option value="">{{ $bank->bankName }}</option>
          @endforeach
        </select>
      </div>
    </div>
  </form>
@endsection

@section('js')
@endsection
