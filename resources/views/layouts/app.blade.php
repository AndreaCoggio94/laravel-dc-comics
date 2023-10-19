<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ env('APP_NAME') }}</title>

  <!-- Styles -->
  @vite('resources/js/app.js')
</head>

<body>
  @include('partials._navbar')

  <main>
    @if (session('message'))
        <div class="alert alert-{{session('message_type') ?? 'info'}} mb-2">
          {{session('message')}}
        </div>
    @endif
    @yield('main-content')
  </main>

  @yield('modal')

  

</body>

</html>
