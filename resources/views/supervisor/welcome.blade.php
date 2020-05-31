  @extends('supervisor.layout')
  
  @section('content')
  <div class="container">
      <div id="welcome_panel" class="d-flex justify-content-center my-3">
          <div class="bg-light w-75 p-5">
              <p>Καλως ήρθατε στην </p>
              <h1>e-propaideia</h1>
              <p>
                  Στόχος της ιστοσελίδας μας είναι να βοηθήσει τους γονείς αλλά και όσους θέλουν διδάξουν την προπαίδεια στα παιδία με απλό και ευχάριστο τρόπο. 
                  Η διαδικασία για να ξεκινήσεις είναι πολλή απλή απλά ακολούθησε τα τρία βήματα που περιγράφονται παρακάτω.
              </p>
          </div>
      </div>
      
      <div id="user_manual" class="my-3">
          <div class="row">
              <div class="col">
                  <div class="card h-100">
                      <div class="card-body">
                        <h5 class="card-title">1. Εγγραφή</h5>
                        <p class="card-text"><a href="/supervisor/register">Δημιουργείστε</a> προσωπικό λογαριασμό. Εάν έχετε είδη εγγραφεί <a href="/supervisor/login">συνδεθείτε</a> με τα στοιχεία σας.</p>
                      </div>
                  </div>
              </div>
              <div class="col">
                  <div class="card h-100">
                      <div class="card-body">
                        <h5 class="card-title">2. Μαθητές</h5>
                        <p class="card-text">Δημιουργείστε λογαριασμούς για τους μαθητές που θα εποπτεύεται.</p>
                      </div>
                  </div>
              </div>
              <div class="col">
                  <div class="card h-100">
                      <div class="card-body">
                        <h5 class="card-title">3. Εξέλιξη</h5>
                        <p class="card-text">Παρακολουθείστε την εξέλιξη των μαθητών καθώς και τα αποτελέσματα της προσπάθειας τους.</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="d-flex justify-content-center my-3">
        <button type="button" class="btn btn-primary btn-lg w-50 btn-block">Block level button</button>
      </div>

      <div class="d-flex justify-content-center">
        <div id="carouselExampleIndicators" class="carousel slide bg-light w-75" style="min-height:300px;" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active bg-dark"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1" class="bg-dark">></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2" class="bg-dark">></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="d-flex justify-content-center">
                <div class="col-md-8 mt-4 align-middle">
                  <h1 class="">Κλιμακούμενη διδακσαλία ανάλογη της προόδου του μαθητή</h1>
                </div>  
              </div>                
            </div>
            <div class="carousel-item">
              <div class="d-flex justify-content-center">
                <div class="col-md-8 mt-4 text-center align-middle">
                  <h1 class="">Διαδραστικός τρόπος εκμάθησης<br> με παραδέιγμάτα </h1>
                </div>  
              </div>                
            </div>     
            <div class="carousel-item">
              <div class="d-flex justify-content-center">
                <div class="col-md-8 mt-4 text-right align-middle">
                  <h1 class="">Εύκολη αυτοαξιολόγηση <br>με διάφορων τύπων ασκήσεις</h1>
                </div>  
              </div>                
            </div>                 
          </div>            
        </div>
      </div>
    </div>
    @endsection
    