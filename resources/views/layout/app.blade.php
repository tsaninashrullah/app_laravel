<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
          <!--Import jQuery before materialize.js-->
    <title>Laravel</title>
    <!--Link Material Design Icon -->
    <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/font-awesome.css"  media="screen,projection"/>
       <!-- Styles -->
        <style>
            
        </style>
    </head>
    <body>
    <script type="text/javascript" src="js/jquery-2-1-1.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>

    </script>
    <!-- Navbar -->
     @include('layout.header')

     <!-- Content -->
     <div class="row">
      @yield('content')
    </div>
    </body>
</html>