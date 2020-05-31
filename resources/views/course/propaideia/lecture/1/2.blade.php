@extends('course.propaideia.layout')

@section('nav-left')
    @include('course.propaideia.nav-left-lecture')
@endsection

@section('content')

<div class="container-fluid min-vh-100 pb-5">
    <div class="d-flex justify-content-center min-vh-100">
        <div class="w-75 p-5 ">
            <h1 class="text-primary mb-4">Η προπαίδεια του 2 και η προπαίδεια του 4</h1>
            <div class="mb-3">
                <h3 class="text-success">Πως γράφουμε την προπαίδεια του 2;</h3>
                <p>Η προπαίδεια του 2 γράφεται όπως η προπαίδεια του 1 άλλα το αποτέσμα κάθε γραμμούλας είναι λίγο διαφορετικό.</p>
                <p>Μπορούμε να καταλάβουμε το αποτέλεσμα κάθε γραμμούλας αν φανταστούμε ένα εύκολο παζλ με τετράγωνα κουτάκια.</p>
                <p>Μπορείς να βρεις πόσο κάνει 2 &#215; 4 ( 2 φορές το 4 ) αν πατήσεις πάνω στο 4 και μετρήσεις τα κόκκινα κουτάκια.</p>
                <div id="puzzle2"></div>
                <script>document.getElementById("puzzle2").innerHTML = myFunction2(2)</script>
                <p>Με τον τρόπο αυτό μπορείς εύκολα να βρεις όλη την προπαίδεια του 2 πατώντας σε κάθε αριθμό.</p>
            </div>
            <div class="mb-3">
                <h3 class="text-success">Η προπαίδεια του 2</h3>
                <p class="text-success">Διαβάζω και μαθαίνω την προπαίδεια του 2.</p>
                <div id="table2"></div>
                <script>document.getElementById("table2").innerHTML =  multFunction(2)</script>
            </div>
            <div class="mb-3">
                <h3 class="text-success">Πως γράφουμε την προπαίδεια του 4;</h3>
                <p>Η προπαίδεια του 4 γράφεται με τον ίδιο τρόπο.</p>
                <p>Μπορείς να βρεις πόσο κάνει 4 &#215; 2 ( 4 φορές το 2 ) αν πατήσεις πάνω στο 2 και μετρήσεις τα κόκκινα κουτάκια.</p>
                <div id="puzzle4"></div>
                <script>document.getElementById("puzzle4").innerHTML = myFunction2(4)</script>
                <p>Μπορεί να πρόσεξες ότι 2 &#215; 4 και 4 &#215; 2 κάνουν το ίδιο &#128521;.</p>
            </div>
            <div class="mb-3">
                <h3 class="text-success">Η προπαίδεια του 4</h3>
                <p class="text-success">Διαβάζω και μαθαίνω την προπαίδεια του 4.</p>
                <div id="table4"></div>
                <script>document.getElementById("table4").innerHTML =  multFunction(4)</script>
            </div>
            <div class="d-flex justify-content-center">
                <a href="/propaideia/1/3" class="btn btn-info">επόμενο μάθημα</a>
            </div>
        </div>
    </div>
</div>

@endsection
