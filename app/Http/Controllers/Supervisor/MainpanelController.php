<?php

namespace App\Http\Controllers\Supervisor;

use Auth;
use App\Supervisor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainpanelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:supervisor');
    }

    public function index(){

        $students = Auth::guard('supervisor')->user()->students;

        return view('supervisor.mainpanel', ['students' => $students]);
    }
}
