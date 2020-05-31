@extends('supervisor.layout')
  
@section('content')

<div class="container">
    <div class="d-flex justify-content-center">
        <div class="p-5 border rounded-lg mt-5 text-center w-50" style="background-color:#c0f2f2;">
            <form method="POST"  action="/supervisor/register">
                @csrf
                <h3 class="mb-3">Στοιχεία Εγγραφής</h2>
                <div class="form-group">
                    <input type="text" class="form-control form-control-lg rounded-pill border" id="name" name="name" placeholder="Όνομα Χρήστη" value="{{ old('name') }}">
                
                @error('name')
                <span class="text-danger">
                    <em><small><strong>{{ $message }}</strong></small></em>
                </span>
                @enderror
                </div>
                <div class="form-group">
                    <input type="email" class="form-control form-control-lg rounded-pill border" id="email" name="email" placeholder="E-mail" value="{{ old('email') }}">
                
                @error('email')
                <span class="text-danger">
                    <em><small><strong>{{ $message }}</strong></small></em>
                </span>
                @enderror
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-control-lg rounded-pill border" id="password" name="password" placeholder="Κωδικός πρόσβασης">
                
                    @error('password')
                    <span class="text-danger">
                        <em><small><strong>{{ $message }}</strong></small></em>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-control-lg rounded-pill border" id="password-confirmed" name="password-confirmed" placeholder="Επιβαιβαίωση Κωδικού">
                    
                    @error('password-confirmed')
                    <span class="text-danger">
                        <em><small><strong>{{ $message }}</strong></small></em>
                    </span>
                    @enderror
                </div>
                <button type="submit" class="btn rounded-pill border btn-lg btn-block" style="background-color: #81e4e4;">Εγγραφή</button>
            </form>
        </div>

    </div>
</div>

@endsection