<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>TivraList | {{ $title }}</title>
  <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}" type="image/x-icon">
  <script defer src="{{ asset('assets/js/cdn.min.js') }}"></script>
  @vite('resources/css/app.css')
</head>
<body>
  <x-navbars.authentication/>

  <div class="w-full h-[calc(100vh-64px)] p-4 flex justify-center items-center relative">
    {{ $slot }}
  </div>
</body>
</html>