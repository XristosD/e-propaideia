@extends('course.propaideia.layout')

@section('nav-left')
    @include('course.propaideia.nav-left-lecture')
@endsection

@section('content')

<div class="container-fluid min-vh-100 pb-5">
    <div class="d-flex justify-content-center min-vh-100">
        <div class="w-75 p-5 ">
            <h1 class="text-primary mb-4">Η προπαίδεια του 3 και η προπαίδεια του 5</h1>
            <div class="mb-3">
                <h3 class="text-success">Πως γράφουμε την προπαίδεια του 3;</h3>
                <p>Η προπαίδεια του 3 γράφεται όπως μάθαμε στα προηγούμενα μαθήματα.</p>
                <p>Μπορούμε και πάλι να καταλάβουμε το αποτέλεσμα κάθε γραμμούλας αν μετρήσουμε τα τετράγωνα κουτάκια.</p>
                <div id="puzzle3"></div>
                <script>document.getElementById("puzzle3").innerHTML = myFunction2(3)</script>
            </div>
            <div class="mb-3">
                <h3 class="text-success">Η προπαίδεια του 3</h3>
                <p class="text-success">Διαβάζω και μαθαίνω την προπαίδεια του 3.</p>
                <div id="table3"></div>
                <script>document.getElementById("table3").innerHTML =  multFunction(3)</script>
            </div>
            <div class="mb-3">
                <h3 class="text-success">Πως γράφουμε την προπαίδεια του 5;</h3>
                <p>Η προπαίδεια του 5 γράφεται με τον ίδιο τρόπο.</p>
                <p>Μπορείς να διαβάσεις την προπαίδεια όσες φορές θέλεις μέχρι να τη μάθεις.</p>
                <div id="puzzle5"></div>
                <script>document.getElementById("puzzle5").innerHTML = myFunction2(5)</script>
            </div>
            <div class="mb-3">
                <h3 class="text-success">Η προπαίδεια του 4</h3>
                <p class="text-success">Διαβάζω και μαθαίνω την προπαίδεια του 4.</p>
                <div id="table5"></div>
                <script>document.getElementById("table5").innerHTML =  multFunction(5)</script>
            </div>
            <div class="d-flex justify-content-center">
                <a href="/propaideia/1/t" class="btn btn-info">επόμενο μάθημα</a>
            </div>
        </div>
    </div>
</div>

@endsection