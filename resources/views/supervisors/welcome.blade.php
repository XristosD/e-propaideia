  @extends('supervisors.layout')
  
  @section('content')
  <div class="container">
      <div id="welcome_panel" class="d-flex justify-content-center my-3">
          <div class="bg-light w-75 p-5">
              <p>Καλως ήρθατε στην </p>
              <h1>e-propaideia</h1>
              <p>
                  Στόχος της ιστοσελίδας Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Corrupti voluptates facere fugit. Ipsum deleniti vel itaque, veritatis fuga dolorum, hic ratione exercitationem eligendi iste perferendis
                  quo facilis voluptatem accusamus. Aut?
              </p>
          </div>
      </div>
      
      <div id="user_manual" class="my-3">
          <div class="row">
              <div class="col">
                  <div class="card h-100">
                      <div class="card-body">
                        <h5 class="card-title">1. Εγγραφή</h5>
                        <p class="card-text"><a href="#">Δημιουργείστε</a> προσωπικό λογαριασμό. Εάν έχετε είδη εγγραφεί <a href="#">συνδεθείτε</a> με τον στοιχεία σας.</p>
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
                <div class="col-md-8 mt-4">
                  <span>
                    
                  </span>
                </div>  
              </div>                
            </div>
            <div class="carousel-item">
              <div class="d-flex justify-content-center">
                <div class="col-md-8 mt-4">
                  <span>

                  </span>
                </div>  
              </div>                
            </div>     
            <div class="carousel-item">
              <div class="d-flex justify-content-center">
                <div class="col-md-8 mt-4">
                  <span>

                  </span>
                </div>  
              </div>                
            </div>                 
          </div>            
        </div>
      </div>
    </div>
    @endsection
    