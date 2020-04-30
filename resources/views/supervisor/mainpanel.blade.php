@extends('supervisor.layout')
  
@section('content')

<div class="container pt-5">
    <div class="p-4 bg-light text-center w-100">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="text-left p-2 m-2">Οι μαθητές σας</h3>
            </div>
            <div class="col-1">
                <a href="#">
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
        <div class="row border-bottom border-dark">
            <div class="col-4 text-left p-1">
                <span>Xristos</span>
            </div>
            <div class="col-7 text-left p-1">
                <span>Πρόοδος</span>
            </div>
            <div class="col-1 p-1">
                <a href="#">&raquo;</a>
            </div>
        </div>
    </div>
</div>

@endsection