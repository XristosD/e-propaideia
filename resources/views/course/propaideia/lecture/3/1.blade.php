@extends('course.propaideia.layout')

@section('nav-left')
    @include('course.propaideia.nav-left-lecture')
@endsection

@section('content')

<div class="container-fluid min-vh-100 pb-5">
    <div class="d-flex justify-content-center min-vh-100">
        <div class="w-75 p-5 ">
            <h1 class="text-primary mb-4">Η προπαίδεια του 8 και η προπαίδεια του 10</h1>
            <div class="mb-3">
                <h3 class="text-success">Πως γράφουμε την προπαίδεια του 8;</h3>
                <p>Η προπαίδεια του 8 γράφεται όπως μάθαμε στα προηγούμενα μαθήματα.</p>
                <p>Μπορούμε και πάλι να καταλάβουμε το αποτέλεσμα κάθε γραμμούλας αν μετρήσουμε τα τετράγωνα κουτάκια.</p>
                <div id="puzzle8"></div>
                <script>document.getElementById("puzzle8").innerHTML = myFunction2(8)</script>
            </div>
            <div class="mb-3">
                <h3 class="text-success">Η προπαίδεια του 8</h3>
                <p class="text-success">Διαβάζω και μαθαίνω την προπαίδεια του 8.</p>
                <div id="table8"></div>
                <script>document.getElementById("table8").innerHTML =  multFunction(8)</script>
            </div>
            <div class="mb-3">
                <h3 class="text-success">Πως γράφουμε την προπαίδεια του 10;</h3>
                <p>Η προπαίδεια του 10 γράφεται με τον ίδιο τρόπο.</p>
                <p>Μπορείς να διαβάσεις την προπαίδεια όσες φορές θέλεις μέχρι να τη μάθεις.</p>
                <div id="puzzle10"></div>
                <script>document.getElementById("puzzle10").innerHTML = myFunction2(10)</script>
            </div>
            <div class="mb-3">
                <h3 class="text-success">Η προπαίδεια του 10</h3>
                <p class="text-success">Διαβάζω και μαθαίνω την προπαίδεια του 4.</p>
                <div id="table10"></div>
                <script>document.getElementById("table10").innerHTML =  multFunction(10)</script>
            </div>
            <div class="d-flex justify-content-center">
                <a href="/propaideia/3/2" class="btn btn-info">επόμενο μάθημα</a>
            </div>
        </div>
    </div>
</div>

@endsection





