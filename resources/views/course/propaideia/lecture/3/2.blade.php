@extends('course.propaideia.layout')

@section('nav-left')
    @include('course.propaideia.nav-left-lecture')
@endsection

@section('content')

<div class="container-fluid min-vh-100 pb-5">
    <div class="d-flex justify-content-center min-vh-100">
        <div class="w-75 p-5 ">
            <h1 class="text-primary mb-4">Η προπαίδεια του 9</h1>
            <div class="mb-3">
                <h3 class="text-success">Πως γράφουμε την προπαίδεια του 9;</h3>
                <p>Η προπαίδεια του 9 γράφεται όπως μάθαμε στα προηγούμενα μαθήματα.</p>
                <p>Μπορούμε και πάλι να καταλάβουμε το αποτέλεσμα κάθε γραμμούλας αν μετρήσουμε τα τετράγωνα κουτάκια.</p>
                <div id="puzzle9"></div>
                <script>document.getElementById("puzzle9").innerHTML = myFunction2(9)</script>
            </div>
            <div class="mb-3">
                <h3 class="text-success">Η προπαίδεια του 9</h3>
                <p class="text-success">Διαβάζω και μαθαίνω την προπαίδεια του 9.</p>
                <div id="table9"></div>
                <script>document.getElementById("table9").innerHTML =  multFunction(9)</script>
            </div>
            <div class="d-flex justify-content-center">
                <a href="/propaideia/3/t" class="btn btn-info">επόμενο μάθημα</a>
            </div>
        </div>
    </div>
</div>

@endsection