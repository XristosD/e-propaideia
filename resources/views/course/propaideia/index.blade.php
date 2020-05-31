@extends('course.propaideia.layout')

@section('nav-left')

<a href="">
    <div class="btn">
      <h3>
        e-propaideia
      </h3>
    </div>
</a>

@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <div class="row">
                <div class="col">
                    <h3>
                        Περιεχόμενα
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col">
                            Ενότητα 1
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <a href="/propaideia/1/1" class="btn @if(!$courseAtributes['progress']['part']['1']['section']['1']) disabled @endif">
                                Η προπαίδεια του 1
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <a href="/propaideia/1/2" class="btn @if(!$courseAtributes['progress']['part']['1']['section']['2']) disabled @endif">
                                Η προπαίδεια του 2 και η προπαίδεια του 4
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <a href="/propaideia/1/3" class="btn @if(!$courseAtributes['progress']['part']['1']['section']['3']) disabled @endif">
                                Η προπαίδεια του 3 και η προπαίδεια του 5
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <a href="/propaideia/1/t" class="btn @if(!$courseAtributes['progress']['part']['1']['section']['t']) disabled @endif">
                                Τεστ 1ης ενότητας
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col">
                            Ενότητα 2
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <a href="/propaideia/2/1" class="btn @if(!$courseAtributes['progress']['part']['2']['section']['1']) disabled @endif">
                                Η προπαίδεια του 6
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <a href="/propaideia/2/2" class="btn @if(!$courseAtributes['progress']['part']['2']['section']['2']) disabled @endif">
                                Η προπαίδεια του 7
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <a href="/propaideia/2/t" class="btn @if(!$courseAtributes['progress']['part']['2']['section']['t']) disabled @endif">
                                Τεστ 2ης ενότητας
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col">
                            Ενότητα 3
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <a href="/propaideia/3/1" class="btn @if(!$courseAtributes['progress']['part']['3']['section']['1']) disabled @endif">
                                Η προπαίδεια του 8 και η προπαίδεια του 10
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <a href="/propaideia/3/2" class="btn @if(!$courseAtributes['progress']['part']['3']['section']['2']) disabled @endif">
                                Η προπαίδεια του 9
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <a href="/propaideia/3/t" class="btn @if(!$courseAtributes['progress']['part']['3']['section']['t']) disabled @endif">
                                Τεστ 3ης ενότητας
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <a href="/propaideia/final/t" class="btn @if(!$courseAtributes['progress']['part']['final']['test']) disabled @endif" >
                        Τελικό Τεστ
                    </a>
                </div>
            </div>
        </div>
        <div class="col-2 align-self-center d-flex align-self-stretch">
        <a href="/propaideia/{{$courseAtributes['continue']}}" class="btn btn-info d-flex" >
                <h1 class="display-4 align-self-center">
                    <b>&#x027EB;</b>
                </h1>
            </a>
        </div>
    </div>
</div>

@endsection