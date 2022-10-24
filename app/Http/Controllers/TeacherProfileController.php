<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherProfileController extends Controller
{
    public function create()
    {
        return view ('teacher.profile');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'dob' => 'required',
            'address' => 'required',
            'gender' => 'required',
            'image' => 'required|image',
            'tfaculty' => 'required',
            'teaching1' => '',
            'teaching2' => '',
            'teaching3' => '',
            'teaching4' => '',
            'teaching5' => '',
            'classincharge' => 'required',
        ]);

        $imagepath = request('image')->store('uploads', 'public');

        auth()->user()->teacherProfile()->create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'dob' => $data['dob'],
            'address' => $data['address'],
            'gender' => $data['gender'],
            'image' =>$imagepath,
            'tfaculty' => $data['tfaculty'],
            'teaching1' => $data['teaching1'],
            'teaching2' => $data['teaching2'],
            'teaching3' => $data['teaching3'],
            'teaching4' => $data['teaching4'],
            'teaching5' => $data['teaching5'],
            'classincharge' => $data['classincharge'],
            
        ]);

        return redirect('dashboard');

        //\App\Models\Profile::create($data);
        //dd(request()->all());
    }
}


