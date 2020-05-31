@extends('course.propaideia.layout')

@section('nav-left')
    @include('course.propaideia.nav-left-lecture')
@endsection

@section('content')

<div class="container-fluid min-vh-100 pb-5">
    <div class="d-flex justify-content-center min-vh-100">
        <div class="w-75 p-5 ">
            <div class="d-flex justify-content-center">
                <h1 class="text-primary mb-4">Ερωτήσεις συμπλήρωσης</h1>
            </div>
            <div class="d-flex justify-content-center">
                <p class="text-success mb-3">Για κάθε άσκηση γράψε τη σωστή απάντηση. Όταν τελείωσεις πάτησε το κουμπί Τελείωσα !.</p>
            </div>

            @if(Session::has('test') && !Session::get('test')['directAnswer']['graded'])

            <form method="POST" action="/propaideia/{{ Session::get('test')['part'] }}/t">
                @csrf
                @foreach (Session::get('test')['directAnswer']['exercize'] as $ex)
                <div class="mb-4 d-flex  justify-content-center">
                    <div class="col-2">
                        <span class="font-weight-bold">
                            {{ $ex['tableNum'] }} &#215; {{$ex['timesNum']}} = 
                        </span> 
                        <span id="showedAns{{ $loop->index }}" class="font-weight-bold ml-1">
                            <input type="text" class="bg-light text-center" style="border:none;border-bottom:1px solid #555;width:30px;" name="ans{{ $loop->index }}">
                        </span>

                    </div>
                </div>
                @endforeach

                <div class="d-flex justify-content-center my-5">
                    <button type="submit" class="btn btn-info">Τελείωσα !</button>
                </div>
            </form>

            @endif


            @if(Session::has('test') && Session::get('test')['directAnswer']['graded'])

            @foreach (Session::get('test')['directAnswer']['exercize'] as $ex)
            <div class="mb-4 d-flex  justify-content-center">
                <div class="col-2">
                    <span class="font-weight-bold">
                        {{ $ex['tableNum'] }} &#215; {{$ex['timesNum']}} = 
                    </span> 
                    <span id="showedAns{{ $loop->index }}" class="font-weight-bold ml-1">
                        <input type="text" class="bg-light text-center" disabled style="border:none;border-bottom:1px solid {{ $ex['correct'] ? "#555" : "red" }};width:30px;" name="ans{{ $loop->index }}" value="{{ $ex['userAnswer'] }}">
                    </span>
                    
                        @if($ex['correct'] )
                        <span class="font-weight-bold ml-1">
                            &#10004;
                        </span>
                        @else
                        <span class="font-weight-bold ml-1 ">
                            <small>{{ $ex['answer'] }}</small>
                        </span>
                        @endif
                    
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
