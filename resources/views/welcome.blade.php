<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>e-propaideia</title>
  </head>
  <body>

    <nav class="navbar navbar-light bg-info ">
      <div>
        <a class="navbar-brand" href="/">
          <img src="" width="30" height="30" class="d-inline-block align-top" alt="">
          <h1 class="display-3 text-white m-5 border-bottom"><strong>e-propaideia</strong></h1>
        </a>
      </div>
    </nav>
    <div class="bg-info d-flex justify-content-center">
      <div class="w-25 m-5">
        <form method="POST" action="/student/login">
          @csrf
          <div class="form-group text-center">
            <label for="exampleInputEmail1"><h3 class="text-white">Γράψε το όνομα σου:</h3></label>
            <input type="text" class="form-control text-center" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('name') }}">
          </div>
          <div class="form-group text-center">
              <label for="exampleInputPassword1"><h3 class="text-white">Γράψε τον κωδικό εισόδου:</h3></label>
              <input type="password" class="form-control text-center" name="password" id="exampleInputPassword1">
          </div>
          @if($errors->any())
          <span class="text-danger">
              <em><small><strong>Έχεις γράψει λάθος το όνομα ή τον κωδικό σου</strong></small></em>
          </span>
          @endif
          <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-light "><strong class="text-info">Πάμε για μάθημα</strong></button>
          </div>
          
        </form>
      </div>
    </div>
      
    <footer class="footer mt-auto fixed-bottom py-3 bg-light">
      <div class="container">
        <span class="text-muted">
          Εργασία Εκπαιδευτικό Λογισμικό 2020
        </span>
        <a href="https://github.com/XristosD/e-propaideia" class="ml-5">
          <span class="text-muted ">
             github repo <i class="fab fa-github"></i>
          </span>
        </a>
      </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://kit.fontawesome.com/a8e722136a.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>