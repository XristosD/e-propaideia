@extends('supervisor.layout')
  
@section('content')

<div class="container py-5">
    <div class="row my-3">
        <div class="col">
            <h3>
                Παρακάτω μπορείτε να δείτε την πρόοδο του μαθητή που εποπτεύεται <br> καθώς και τα αποτελεσματα των Τεστ που έχει δώσει.
            </h3>
        </div>
    </div>
    <div class="row my-3">
        <div class="col">
            Ο {{$student->name}} έχει καλύψει μέχρι στιγμής το {{$student->progress->progressPercentage()}}% της ύλης.
        </div>
    </div>
    <div class="row my-4">
        <div class="col-2">
            <div class="card" style="width:auto">
                <img src="{{ $student->profile->profilePictureUrl() }}" class="m-2" width="140" heigth="140" style="border-radius:50%;" alt="">
                <div class="card-body" >
                  <h5 class="card-title">Βαθμολογία</h5>
                  <p class="card-text"><span>Ενότητα 1:</span><span class="mx-2">{{$student->progress->grade_1 ?? '-'}}</span></p>
                  <p class="card-text"><span>Ενότητα 2:</span><span class="mx-2">{{$student->progress->grade_2 ?? '-'}}</span></p>
                  <p class="card-text"><span>Ενότητα 3:</span><span class="mx-2">{{$student->progress->grade_3 ?? '-'}}</span></p>
                  <p class="card-text"><span>Τελικό Τεστ:</span><span class="mx-2">{{$student->progress->grade_final ?? '-'}}</span></p>
                </div>
              </div>
        </div>
    </div>
    <div class="row mb-1 mt-3">
        <div class="col">
            <strong>Τεστ</strong>
        </div>
    </div>

    @if($student->results()->exists())

    <div class="row mt-1 mb-3">
        <div class="col">
            <div class="row">
                <div class="col">
                    <strong>Ενότητα</strong>
                </div>
                <div class="col">
                    <strong>Σωστές απαντήσεις</strong>
                </div>
                <div class="col">
                    <strong>Ημερ/νία εγγραφής</strong>
                </div>
            </div>
            @foreach($student->results as $result)
            
            <div class="row">
                <div class="col">
                    {{ $result->part == 'final' ? 'Τελικό' : $result->part }}
                </div>
                <div class="col">
                    {{ $result->corect_question_num}}/{{$result->question_num}}
                </div>
                <div class="col">
                    {{ date('d/m/Y',strtotime($result->created_at)) }}
                </div>
            </div>

            @endforeach
        </div>
    </div>

    @else

    <div class="row">
        <div class="col">
            Δεν υπάρχουν εγγραφές από Τεστ ακόμη
        </div>
    </div>

    @endif

</div>

@endsection