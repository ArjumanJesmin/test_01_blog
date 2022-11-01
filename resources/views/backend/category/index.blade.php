<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >

    <title>Table Category!</title>
  </head>
  <body>

    <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h1>Create Category!</h1>
            <table class=" table table-striped table-hover table-success table-bordered ">
                <thead>
                    <tr>
                        <th>category name</th>
                        <th>category description</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category )
                    <tr>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->description }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
              @csrf
            </form>
         </div>  
        </div>
    </div>
  

 

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

  </body>
</html>
