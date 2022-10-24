<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentProfileController extends Controller
{
    public function create()
    {
        return view ('student.profile');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'parent_name' => 'required',
            'parent_phone' => 'required',
            'parent_email' => 'required',
            'dob' => 'required',
            'address' => 'required',
            'gender' => 'required',
            'image' => 'required|image',
            'class' => 'required',
            'subject1' => 'required',
            'subject2' => 'required',
            'subject3' => 'required',
            'subject4' => 'required',
            'subject5' => '',
            'subject6' => '',
            'subject7' => '',
            'subject8' => '',
            'subject9' => '',
            'subject10' => '',
            'subject11' => '',
            'subject12' => '',
            
        ]);

        $imagepath = request('image')->store('uploads', 'public');

        auth()->user()->studentProfile()->create([
            'name' => $data['name'],
            'email' => $data['email'],
            'parent_name' => $data['parent_name'],
            'parent_phone' => $data['parent_phone'],
            'parent_email' => $data['parent_email'],
            'dob' => $data['dob'],
            'address' => $data['address'],
            'gender' => $data['gender'],
            'image' =>$imagepath,
            'class' => $data['class'],
            'subject1' => $data['subject1'],
            'subject2' => $data['subject2'],
            'subject3' => $data['subject3'],
            'subject4' => $data['subject4'],
            'subject5' => $data['subject5'],
            'subject6' => $data['subject6'],
            'subject7' => $data['subject7'],
            'subject8' => $data['subject8'],
            'subject9' => $data['subject9'],
            'subject10' => $data['subject10'],
            'subject11' => $data['subject11'],
            'subject12' => $data['subject12'],
            
            
        ]);

        return redirect('dashboard');

        //\App\Models\Profile::create($data);
        //dd(request()->all());
    }
}
