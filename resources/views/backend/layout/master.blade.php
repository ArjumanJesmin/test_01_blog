<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >

    <title>@yield('Title')::Blog App</title>
  </head>
  <body>

    <div class="container">
        @yield('content')
    </div>
  

 

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.6.1.slim.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
      $("document").ready(function(){
        setTimeout(function(){
          $("div.alert").remove();
        },1000);
      });
    </script>

  </body>
</html>
