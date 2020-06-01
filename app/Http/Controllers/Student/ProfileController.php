<?php

namespace App\Http\Controllers\Student;

use Auth;
use App\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:student');
    }

    public function index(){
        if(!(Auth::guard('student')->user()->acttivated) && !Auth::guard('student')->user()->profile){
            Auth::guard('student')->user()->initProfile();
        }
        $pictures = $this->profilePictures();
        //dd($pictures);
        return view('student.profile', [
            'pictures' => $pictures
        ]);
    }

    public function setProfilePicture(Request $request){
        $student = Auth::guard('student')->user();
        $profile = $student->profile;
        $profile->picture = $request->input('profilePicture');
        $student->activated = True;
        $student->save();
        $profile->save();
        
        return redirect()->route('student.mainpanel');
    }

    private function profilePictures(){
        $profilePictures = [];
        for($i=1;$i<8;$i++){
            $profilePictures[] = asset('profilePictures/'.$i.'.png');
        }
        return $profilePictures;
    }

}
