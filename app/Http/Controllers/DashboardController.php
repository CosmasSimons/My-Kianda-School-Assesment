<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\StudentProfile;
use App\Models\TeacherProfile   ;

class DashboardController extends Controller
{
    public function index()
    {
        if(Auth::user()->hasRole('admin'))
        {
            return view('admin.dashboard');
        }

        elseif(Auth::user()->hasRole('teacher'))
        {
            return view('teacher.dashboard');
        }

        elseif(Auth::user()->hasRole('student'))
        {
            return view('student.dashboard');
        }
    }

    public function teachers()
    {
        $data = TeacherProfile::all();
        return view('admin.teacherpersonaldetails',['users'=>$data]);
    }

    public function teacherswork()
    {
        $data = TeacherProfile::all();
        return view('admin.teacherworkdetails',['users'=>$data]);
    }

    public function students()
    {
        $data = StudentProfile::all();
        return view('admin.students',['users'=>$data]);
    }

    public function parent()
    {
        
        $data = StudentProfile::all();
        return view('admin.parent',['users'=>$data]);
    }

    }
