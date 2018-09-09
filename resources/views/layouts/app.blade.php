<!--
* jonnyalexbh
* @Description: app template
-->
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>{{ config('app.name') }} | @yield('title')</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  @yield('css')
</head>
<body>

  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body p-0">
            <div class="row p-3">
              <div class="col-md-6">
                <img src="{{asset('images/logo.png')}}">
              </div>

              <div class="col-md-6 text-right">
                <p class="font-weight-bold mb-1">&nbsp;</p>
                <p class="text-muted">Fecha actual: {{ date('Y-m-d H:i:s') }}</p>
              </div>
            </div>

            <hr class="my-1">

            <div class="row p-5">
              <div class="col-md-12">
                @yield('content')
              </div>
            </div>

            <div class="d-flex flex-row-reverse bg-dark text-white p-4">
              <div class="py-3 px-5 text-right">
                <div class="mb-2">&nbsp;</div>
                <div class="h2 font-weight-light">&nbsp;</div>
              </div>

              <div class="py-3 px-5 text-right">
                <div class="mb-2">&nbsp;</div>
                <div class="h2 font-weight-light">&nbsp;</div>
              </div>

              <div class="py-3 px-5 text-right">
                <div class="mb-2">&nbsp;</div>
                <div class="h2 font-weight-light">&nbsp;</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="text-light mt-5 mb-5 text-center small">
      by : <a class="text-light" target="_blank" href="https://github.com/jonnyalexbh">jonnyalexbh</a>
    </div>

  </div>

  @yield('js')
</body>
</html>
