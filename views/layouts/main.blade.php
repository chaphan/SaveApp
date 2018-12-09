<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Baho</title>
    @yield('css')


  </head>
  <body data-spy="scroll" data-target=".navbar" data-offset="1000">
    <!--banner-->
    @include('layouts.admin_nav')
	
    @yield('content')

	@include('layouts.footer')
    
  @yield('modals')
  	
  @yield('js')
  </body>
</html>