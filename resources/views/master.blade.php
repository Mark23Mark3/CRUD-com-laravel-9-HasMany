<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <title>Laravel</title>

        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

     
    </head>
    <body class="bg-gray-800">
       
      
      @yield("header")
      @yield("input")
      @yield("tabela")


      @yield("rodape")
        


  <script src="{{ mix('js/app.js') }}"></script> 
 <script src="{{('js/icones.js')}}"></script>    
 

    </body>
</html>
