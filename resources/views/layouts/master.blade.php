<!doctype html>
    <html>
    <head>
       @include('includes.header')
    </head>
    <body class="hold-transition sidebar-mini">
		<!-- Site wrapper -->
		<div class="wrapper">
       
               @yield('content')
       
      </div>
   </div>
   @include('includes.footer')
   @include('includes.js')
    </body>
    
    </html>