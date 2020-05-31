@extends('course.propaideia.layout')

@section('nav-left')
    @include('course.propaideia.nav-left-lecture')
@endsection

@section('content')

<div class="container-fluid min-vh-100 pb-5">
    <div class="d-flex justify-content-center min-vh-100">
        <div class="w-75 p-5 ">
            <div class="d-flex justify-content-center">
                <h1 class="text-primary mb-4">Ερωτήσεις πολλαπλής επιλογής</h1>
            </div>
            <div class="d-flex justify-content-center">
                <p class="text-success mb-3">Για κάθε άσκηση βρες τη σωστή απάντηση. Όταν τελείωσεις πάτησε το κουμπί Τελείωσα !.</p>
            </div>

            @if(Session::has('test') && !Session::get('test')['multipleChoice']['graded'])

            <form method="POST" action="/propaideia/{{ Session::get('test')['part'] }}/t">
                @csrf
                @foreach (Session::get('test')['multipleChoice']['exercize'] as $ex)
                <div class="mb-3 d-flex align-items-center justify-content-center">
                    <div class="col-2">
                        <span class="font-weight-bold">{{ $ex['tableNum'] }} &#215; {{$ex['timesNum']}} = </span> <span id="showedAns{{ $loop->index }}" class="font-weight-bold ml-1">;</span>
                    <input type="hidden" id="hiddenAns{{ $loop->index }}" name="ans{{ $loop->index }}">
                    </div>
                    <div class="col-2">
                        <button type="button" class="btn btn-sm rounded-circle btn-info mx-1" style="width:40px;height:40px;" onclick="myFunction3({{ $ex['option'][0]['value'] }}, {{ $loop->index }})">
                            <span class="font-weight-bold"><small>{{ $ex['option'][0]['value']  }}</small></span>
                        </button>
                        <button type="button" class="btn btn-sm rounded-circle btn-info mx-1" style="width:40px;height:40px;" onclick="myFunction3({{ $ex['option'][1]['value']  }}, {{ $loop->index }})">
                            <span class="font-weight-bold"><small>{{$ex['option'][1]['value'] }}</small></span>
                        </button>
                        <button type="button" class="btn btn-sm rounded-circle btn-info mx-1" style="width:40px;height:40px;" onclick="myFunction3({{ $ex['option'][2]['value']  }}, {{ $loop->index }})">
                            <span class="font-weight-bold"><small>{{$ex['option'][2]['value'] }}</small></span>
                        </button>
                    </div>
                </div>
                @endforeach

                <div class="d-flex justify-content-center my-5">
                    <button type="submit" class="btn btn-info">Τελείωσα !</button>
                </div>
            </form>

            @endif

            @if(Session::has('test') && Session::get('test')['multipleChoice']['graded'])


            @csrf
            @foreach (Session::get('test')['multipleChoice']['exercize'] as $ex)
            <div class="mb-3 d-flex align-items-center justify-content-center">
                <div class="col-2">
                    <span class="font-weight-bold">
                        {{ $ex['tableNum'] }} &#215; {{$ex['timesNum']}} = 
                    </span> 
                    <span id="showedAns{{ $loop->index }}" class="font-weight-bold ml-1">
                        {{ $ex['answer'] }}
                    </span>
                    <span class="font-weight-bold ml-1">
                        @if($ex['correct'] )
                            &#10004;
                        @endif
                    </span>
                </div>
                <div class="col-2">
                    <button type="button" class="btn btn-sm rounded-circle btn-info mx-1 disabled" style="width:40px;height:40px;@switch($ex['option'][0]['userAnswer']) @case('right') box-shadow:0px 0px 10px 3px green; @break @case('wrong') box-shadow:0px 0px 10px 3px red; @break @endswitch">
                        <span class="font-weight-bold "><small>{{ $ex['option'][0]['value']  }}</small></span>
                    </button>
                    <button type="button" class="btn btn-sm rounded-circle btn-info mx-1 disabled" style="width:40px;height:40px;@switch($ex['option'][1]['userAnswer']) @case('right') box-shadow:0px 0px 10px 3px green; @break @case('wrong') box-shadow:0px 0px 10px 3px red; @break @endswitch">
                        <span class="font-weight-bold "><small>{{$ex['option'][1]['value'] }}</small></span>
                    </button>
                    <button type="button" class="btn btn-sm rounded-circle btn-info mx-1 disabled" style="width:40px;height:40px;@switch($ex['option'][2]['userAnswer']) @case('right') box-shadow:0px 0px 10px 3px green; @break @case('wrong') box-shadow:0px 0px 10px 3px red; @break @endswitch">
                        <span class="font-weight-bold "><small>{{$ex['option'][2]['value'] }}</small></span>
                    </button>
                </div>
            </div>
            @endforeach

            <div class="d-flex justify-content-center my-5">
                <a href="/propaideia/{{ Session::get('test')['part'] }}/t" class="btn btn-info">Eπόμενο</a>
            </div>

            @endif
        </div>
    </div>
</div>

@endsection
