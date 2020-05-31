@extends('course.propaideia.layout')

@section('nav-left')
    @include('course.propaideia.nav-left-lecture')
@endsection

@section('content')

<div class="container-fluid min-vh-100 pb-5">
    <div class="d-flex justify-content-center min-vh-100">
        <div class="w-75 p-5 ">

            @if($test['success'])

            <div class="d-flex justify-content-center">
                <h1 class="text-primary mb-4">Μπράβο!</h1>
            </div>
            <div class="d-flex justify-content-center">
                <p class="text-success mb-3">Απάντησες σωστά σε {{$test['corectAnswerNum']}} ερωτήσεις.</p>
            </div>
            <div class="d-flex justify-content-center">
                <p class="mb-3">Ο βαθμός που πήρες είναι:</p>
            </div>
            <div class="d-flex justify-content-center">
                <h1 class="display-4 mb-4">{{$test['grade']}} </h1>
            </div>
            <div class="d-flex justify-content-center">
                <p class="mb-3">Μπορείς αν θέλεις αργότερα να επιστρέψεις για να, <br> βελτιώσεις τον βαθμό σου.</p>
            </div>
            <div class="d-flex justify-content-center my-5">
                <a href="/propaideia/{{ $test['redirect'] }}" class="btn btn-info">Eπόμενο</a>
            </div>

            @endif

            @if(!$test['success'])

            <div class="d-flex justify-content-center">
                <p class="text-success mb-3">Απάντησες σωστά σε {{$test['corectAnswerNum']}} ερωτήσεις.</p>
            </div>
            <div class="d-flex justify-content-center">
                <p class="mb-3">Καλύτερα να διαβάσεις λίγο περισσότερο πριν συνεχίσεις &#128580;</p>
            </div>
            <div class="d-flex justify-content-center my-5">
                <a href="/propaideia/{{ $test['redirect'] }}" class="btn btn-info">Eπόμενο</a>
            </div>

            @endif



        </div>
    </div>
</div>

@endsection
