@extends('student.layout')
  
@section('content')
<div class="row">
    <div class="col text-center my-4">
        <h2>Διάλεξε την εικόνα σου!</h2>
    </div>
</div>
<div class="row row-cols-3">
    
    @foreach ($pictures as $picture )
        <div class="col text-center my-2">
            <img src="{{ $picture }}" width="240" heigth="240" style="border-radius:50%;cursor:pointer;" alt="" onclick="getElementById('chosenPicture').value = {{ $loop->iteration }};document.getElementById('submitAnswer').submit();">
        </div>
    @endforeach
    <form action="/student/profile" method="POST" id="submitAnswer">
        @csrf
        <input type="hidden" name="profilePicture" id="chosenPicture" value="">
    </form>
</div>
@endsection