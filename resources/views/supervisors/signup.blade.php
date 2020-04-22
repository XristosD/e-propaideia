@extends('supervisors.layout')
  
@section('content')

<div class="container">
    <div class="d-flex justify-content-center">
        <div class="p-5 border rounded-lg mt-5 text-center w-50" style="background-color:#c0f2f2;">
            <form method="POST"  class="">
                <h3 class="mb-3">Στοιχεία Εγγραφής</h2>
                <div class="form-group">
                    <input type="text" class="form-control form-control-lg rounded-pill border" id="name" placeholder="Όνομα Χρήστη">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control form-control-lg rounded-pill border" id="email" placeholder="E-mail">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-control-lg rounded-pill border" id="password" placeholder="Κωδικός πρόσβασης">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-control-lg rounded-pill border" id="password-confimed" placeholder="Επιβαιβαίωση Κωδικού">
                </div>

                <button type="submit" class="btn rounded-pill border btn-lg btn-block" style="background-color: #81e4e4;">Εγγραφή</button>
            </form>
        </div>

    </div>
</div>

@endsection