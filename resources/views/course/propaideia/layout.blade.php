<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script type="text/javascript" src="{{ asset('js/all.js') }}"></script>
    <title>e-propaideia</title>
  </head>
  <body>

    <nav class="">
        <div class="row bg-light px-5 py-4">
            <div class="col-auto mr-auto">
              @yield('nav-left')
            </div>
            <div class="col-auto">
              <a href="/student/logout">
                <div class="btn">
                  <h3>
                    Σχόλασα
                  </h3>
                </div>
              </a>
            </div>
        </div>
        <div class="row">
          <div class="col text-center align-self-center">
            <a href="/student/mainpanel">
              <img src="{{ $studentAtributes['profilePicture'] }}" width="200" heigth="200" style="border-radius:50%;cursor:pointer;position:relative;bottom:80px" alt="">
            </a>
          </div>
        </div>
    </nav>
      
    @yield('content')
      
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