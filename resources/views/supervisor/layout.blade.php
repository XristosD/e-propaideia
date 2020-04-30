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

    <nav class="navbar navbar-light bg-light">
      <a class="navbar-brand" href="#">
        <img src="" width="30" height="30" class="d-inline-block align-top" alt="">
        e-propaideia
      </a>
      @auth('supervisor')
      <div class="d-flex flex-row">
        <div class="d-flex align-items-center mx-1">
          <span class="font-weight-bolder">
            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
              <form method="GET"  action="/supervisor/mainpanel" class="">
                <button type="submit" class="btn btn-sm" style="background-color: #81e4e4;">{{ Auth::guard('supervisor')->user()->name }} </button>
              </form>
            
              <div class="btn-group" role="group">
                <button id="btnGroupDrop1" type="button" class="btn btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #81e4e4;">
                </button>
                <div class="dropdown-menu  dropdown-menu-right" aria-labelledby="btnGroupDrop1">
                  <form method="POST"  action="/supervisor/logout" class="px-2">
                    @csrf
                    <button type="submit" class="btn dropdown-item btn-sm ">Αποσύνδεση</button>
                  </form>
                </div>
              </div>
            </div>
            
          </span>
        </div>
      </div>
      @else
      <span>
        <a href="/supervisor/login">Σύνδεση</a>/<a href="/supervisor/register">Εγγαρφή</a>
      </span>
      @endauth

    </nav>
      
    @yield('content')
      
    <footer class="footer mt-auto fixed-bottom py-3 bg-light">
      <div class="container">
        <span class="text-muted">Place sticky footer content here.</span>
      </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>