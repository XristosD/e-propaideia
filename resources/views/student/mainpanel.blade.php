@extends('student.layout')
  
@section('content')
    <div class="container">
        <div class="row my-5">
            
            <div class="col text-center">
                <a href="/student/profile">
                    <img src="{{ $studentAtributes['profilePicture'] }}" width="240" heigth="240" style="border-radius:50%;cursor:pointer;" alt="">
                </a>
            </div>
        </div>
        <div class="row my-3">
            <div class="col text-center">
                <h3>Γεια σου {{$studentAtributes['name']}}</h3>
            </div>
        </div>
        <div class="row my-2">
            <div class="col text-center">
                <h5>Καλωσήρθες στο σχολείο της προπαίδειας</h5>
            </div>
        </div>

        @if($studentAtributes['initCourse'])

        <div class="row my-3 justify-content-center">
            <div class="col-4 ">
                <div class="card text-center">
                    <div class="card-header">
                      Ο βαθμοί μου
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Ενότητα 1: {{ $studentAtributes['grades']['grade_1'] ?? '-' }}</li>
                            <li class="list-group-item">Ενότητα 2: {{ $studentAtributes['grades']['grade_2'] ?? '-' }}</li>
                            <li class="list-group-item">Ενότητα 3: {{ $studentAtributes['grades']['grade_3'] ?? '-' }}</li>
                            <li class="list-group-item">Τελικό Τεστ: {{ $studentAtributes['grades']['grade_final'] ?? '-' }}</li>
                        </ul>
                    </div>
                  </div>
            </div>
        </div>

        <div class="row my-3">
            <div class="col text-center my-5">
                <a href="/propaideia/index">
                    <div class="btn btn-info btn-lg">
                        Όταν είσαι έτοιμος<br>πάτησε εδώ για<br>να συνεχίσεις το μάθημα!
                    </div>
                </a>
            </div>
        </div>

        @else

        <div class="row my-3">
            <div class="col text-center my-5">
                <a href="/propaideia/index">
                    <div class="btn btn-info btn-lg">
                        Όταν είσαι έτοιμος<br>πάτησε εδώ για<br>να ξεκινήσεις το μάθημα!
                    </div>
                </a>
            </div>
        </div>

        @endif
    </div>
@endsection