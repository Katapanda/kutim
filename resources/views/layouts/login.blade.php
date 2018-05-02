<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta name="description" content="Kutim">
  <meta name="author" content="Katapanda">
  <meta name="csrf-token" content="{{ csrf_token() }}">
    
  <title>Kutim | @yield('title')</title>
  
  @include('admin.includes.style')

</head>
<body>

      @yield('content')

   
  @include('admin.includes.script')

  @stack('scripts')
   
</body>
</html>