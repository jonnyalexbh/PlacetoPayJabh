<!--
* jonnyalexbh
* @Description: show
-->

@extends('layouts.app')

@section('title', 'Index')

@section('css')
@endsection

@section('content')
  <form action="{{ route('init') }}" method="post">
    @csrf
    <div class="form-group row">
      <label for="example-text-input" class="col-3 col-form-label">Tipo de cliente</label>
      <div class="col-9">
        <select name="bankInterface" class="form-control" required>
          <option value="0">Persona</option>
          <option value="1">Empresa</option>
        </select>
      </div>
    </div>
    <div class="form-group row">
      <label for="example-search-input" class="col-3 col-form-label">Banco</label>
      <div class="col-9">
        <select name="bankCode" class="form-control">
          @foreach ($banks->item as $bank)
            <option value="{{ $bank->bankCode }}">{{ $bank->bankName }}</option>
          @endforeach
        </select>
      </div>
    </div>
    <div class="form-group row">
      <label for="example-text-input" class="col-3 col-form-label">Total</label>
      <div class="col-9">
        <input name="totalAmount" class="form-control" type="number" value="200000" readonly>
      </div>
    </div>
    <div class="form-group row">
      <label for="example-text-input" class="col-3 col-form-label">Tipo documento</label>
      <div class="col-9">
        <select name="documentType" class="form-control">
          <option value="CC" selected>Cédula de Ciudadanía</option>
        </select>
      </div>
    </div>
    <div class="form-group row">
      <label for="example-text-input" class="col-3 col-form-label">Numero de documento</label>
      <div class="col-9">
        <input name="document" class="form-control" type="number" value="1040737383">
      </div>
    </div>
    <div class="form-group row">
      <label for="example-text-input" class="col-3 col-form-label">Nombres</label>
      <div class="col-9">
        <input name="firstName" class="form-control" type="text" value="Jonny Alexander">
      </div>
    </div>
    <div class="form-group row">
      <label for="example-text-input" class="col-3 col-form-label">Apellidos</label>
      <div class="col-9">
        <input name="lastName" class="form-control" type="text" value="BH">
      </div>
    </div>
    <div class="form-group row">
      <label for="example-text-input" class="col-3 col-form-label">Empresa</label>
      <div class="col-9">
        <input name="company" class="form-control" type="text" value="MPC99">
      </div>
    </div>
    <div class="form-group row">
      <label for="example-text-input" class="col-3 col-form-label">Email</label>
      <div class="col-9">
        <input name="emailAddress" class="form-control" type="email" value="jonnyalex.bh@outlook.com">
      </div>
    </div>
    <div class="form-group row">
      <label for="example-text-input" class="col-3 col-form-label">Dirección</label>
      <div class="col-9">
        <input name="address" class="form-control" type="text" value="San Jose">
      </div>
    </div>
    <div class="form-group row">
      <label for="example-text-input" class="col-3 col-form-label">País</label>
      <div class="col-9">
        <select name="country" class="form-control">
            <option value="CO" selected>Colombia</option>
        </select>
      </div>
    </div>
    <div class="form-group row">
      <label for="example-text-input" class="col-3 col-form-label">Departamento</label>
      <div class="col-9">
        <input name="province" class="form-control" type="text" value="Antioquia">
      </div>
    </div>
    <div class="form-group row">
      <label for="example-text-input" class="col-3 col-form-label">Ciudad</label>
      <div class="col-9">
        <input name="city" class="form-control" type="text" value="Medellín">
      </div>
    </div>
    <div class="form-group row">
      <label for="example-text-input" class="col-3 col-form-label">Teléfono</label>
      <div class="col-9">
        <input name="phone" class="form-control" type="number" value="4611">
      </div>
    </div>
    <div class="form-group row">
      <label for="example-text-input" class="col-3 col-form-label">Celular</label>
      <div class="col-9">
        <input name="mobile" class="form-control" type="number" value="2896353">
      </div>
    </div>

    <button class="btn btn-success btn-lg btn-block" type="submit">Enviar</button>
  </form>
@endsection

@section('js')
@endsection
