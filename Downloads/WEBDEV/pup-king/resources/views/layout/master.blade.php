<!DOCTYPE html>
<html lang="en">

<head>
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laravel BSIT 3-4</title>
</head>


<body style="min-height: 100vh; display:flex; flex-direction:column;">
  @include('layout.nav1')
  @yield('content')
  @include('layout.footer')
</body>


</html>