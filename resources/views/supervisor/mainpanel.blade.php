@extends('supervisor.layout')
  
@section('content')

<div class="container pt-5">
    <div class="p-4 bg-light text-center w-100">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="text-left p-2 m-2">Οι μαθητές σας</h3>
            </div>
            <div class="col-1">
                <a href="/student/register">
                    <button type="button" class="btn btn-primary btn-lg rounded-circle" data-toggle="tooltip" data-placement="top" title="Νέος Μαθητής">
                        <span><strong>&#43;</strong></span>
                    </button>
                </a>
            </div>
        </div> 
        <div class="row border-bottom border-dark">
            <div class="col-4 text-left p-2">
                <h5>Όνομα</h5>
            </div>
            <div class="col-8 text-left p-2">
                <h5>Πρόοδος</h5>
            </div>
        </div>
        @foreach($students as $student)
            <div class="row border-bottom border-dark">
                <div class="col-4 text-left p-1 d-flex">
                    <span class="align-self-center">{{ $student->name }}</span>
                </div>
                @if($student->activated)
                <div class="col-7">
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-1"></div>
                        <div class="col-1"></div>
                        <div class="col-1">{{$student->progress->grade_1 ?? '-'}}</div>
                        <div class="col-1"></div>
                        <div class="col-1"></div>
                        <div class="col-1">{{$student->progress->grade_2 ?? '-'}}</div>
                        <div class="col-1"></div>
                        <div class="col-1"></div>
                        <div class="col-1">{{$student->progress->grade_3 ?? '-'}}</div>
                        <div class="col-1">{{$student->progress->grade_final ?? '-'}}</div>
                        <div class="col-1"></div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-11 p-0">
                            <div class="progress p-0">
                            <div class="progress-bar" role="progressbar" style="width: {{$student->progress->progressPercentage()}}%" aria-valuenow="1" aria-valuemin="0" aria-valuemax="12"></div>
                            </div>
                        </div>
                        <div class="col-1"></div>
                    </div>
                </div>

                <div class="col-1 p-1 d-flex justify-content-end">
                    <a class="align-self-center mr-2" href="/supervisor/studentpanel/{{ $student->id }}">&raquo;</a>
                </div>
                
                @else
                    <div class="col-8 text-left p-1">
                        <span>Ο λογαριασμός δεν έχει ακόμη ενεργοποιηθεί</span>
                    </div>
                @endif
            </div>
        @endforeach
    </div>
</div>

@endsection