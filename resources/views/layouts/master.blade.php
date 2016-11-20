<!DOCTYPE html>
 <html class="no-js">
     <head>
         <meta content="text/html; charset=UTF-8; X-Content-Type-Options=nosniff" http-equiv="Content-Type">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="csrf-token" content="{{ csrf_token() }}" />
         <title>Laravel + Foundation Boilerplate</title>
 
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
         
         <div class="top-bar">
             <img src="{{asset('images/isobar_logo.png')}}" alt="" id="isobar_logo">
             <div class="top-bar-right">
                 <button id="cart">
                    <img src="{{asset('images/shopping_cart.png')}}" alt="" id="shopping_cart">
                 </button>
             
             <button id="contact">@{{message.contact}}</button>
             </div>
         </div>

         @yield('content')
         
         @yield('scripts')
         <script src="{{asset('js/app.js')}}"></script>
     </body>
 </html>