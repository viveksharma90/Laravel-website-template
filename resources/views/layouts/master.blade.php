<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Blog</title>

    @include('shared.css')
    
    
  </head>
  <body>
    
    @include('shared.header')

      @yield('content')

    @include('shared.footer')
    
    

    @include('shared.js')
    
    
  </body>
</html>