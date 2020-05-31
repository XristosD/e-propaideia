@extends('course.propaideia.layout')

@section('nav-left')
    @include('course.propaideia.nav-left-lecture')
@endsection

@section('content')

<div class="container-fluid min-vh-100 pb-5">
    <div class="d-flex justify-content-center min-vh-100">
        <div class="w-75 p-5 ">
            <h1 class="text-primary mb-4">Η προπαίδεια του 1</h1>
            <div class="mb-3">
                <h3 class="text-success">Τι είναι η προπαίδεια;</h3>
                <p>Προπαίδεια είναι ο πολλαπαλασιασμός ( &#215; ) όλων των αριθμών από το 1 εώς το 10 μεταξύ τους.</p>
            </div>
            <div class="mb-3">
                <h3 class="text-success">Τι σημαίνει αυτό &#215; ;</h3>
                <p>Το σύμβολο αυτό &#215; είναι το σύμβολο της προπαίδειας και το διαβάζουμε φορές. π.χ. 1 &#215; 2 διαβάζουμε 1 φορές το 2.</p>
            </div>
            <div class="mb-3">
                <h3 class="text-success">Οπότε πως γράφεται η προπαίδεια;</h3>
                <p>Είναι απλό να γράψουμε την προπαίδεια κάθε αριθμού</p>
                <p>Για αρχή γράφουμε 1 &#215; (φορές) όλους τους αριθμούς από το 1 μέχρι το 10 όπως παρακάτω:</p>
                <p>1 &#215; 1</p>
                <p>1 &#215; 2</p>
                <p>1 &#215; 3 </p>
                <p>....μέχρι το 10</p>
                <p>Στη συνέχεια γράφουμε = ( ίσον ) και συμπληρώνουμε το αποτέλεσμα κάθε γραμμούλας.</p>
                <p>Τα αποτελέσματα της προπαίδειας του 1 ένα είναι πολύ εύκολα, απλά βάζουμε τον ίδιο αριθμό με πριν.</p>
                <p>Μόλις τελειώσουμε έχουμε φτιάξει την προπαίδεια του 1.</p>
            </div>
            <div class="mb-3">
                <h3 class="text-success">Η προπαίδεια του 1</h3>
                <p class="text-success">Διαβάζω και μαθαίνω την προπαίδεια του 1.</p>
                <div id="mult"></div>
                <script>document.getElementById("mult").innerHTML =  multFunction(1)</script>
            </div>
            <div class="d-flex justify-content-center">
                <a href="/propaideia/1/2" class="btn btn-info">επόμενο μάθημα</a>
            </div>
        </div>
    </div>
</div>

@endsection
