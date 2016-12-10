<!DOCTYPE html>
 <html class="no-js">
     <head>
         <meta content="text/html; charset=UTF-8; X-Content-Type-Options=nosniff" http-equiv="Content-Type">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="csrf-token" content="{{ csrf_token() }}" />
         <title>Auction affiliates</title>
 
         <meta name="description" content="">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <meta name="theme-color" content="#ff0000">
         <meta name="msapplication-navbutton-color" content="#ff0000">
         <meta name="mobile-web-app-capable" content="yes">
         <meta name="apple-mobile-web-app-capable" content="yes">
         <meta name="apple-mobile-web-app-status-bar-style" content="#ff0000">
         @yield('meta')
 
         @yield('styles')
         <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
     </head>
 
     <body>
         
         <div id="app">
            <top-bar-component></top-bar-component>
         @yield('content')
            <contact-form-component></contact-form-component> 
         </div>
         @yield('scripts')
         <script src="{{asset('js/app.js')}}"></script>
           <script>
            window.Laravel = { csrfToken: '{{ csrf_token() }}' };
        </script>
        <script type="text/javascript" src="{{ URL::asset('js/jquery.hideseek.js') }}"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
        <script>
         //    $('#searchbar').hideseek({
         //      attribute: 'text',
         // });
        </script>
   
     </body>
 </html>