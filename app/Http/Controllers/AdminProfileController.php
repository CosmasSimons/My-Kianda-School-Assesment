<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminProfileController extends Controller
{
    public function create()
    {
        return view ('admin.profile');
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
            
        ]);

        $imagepath = request('image')->store('uploads', 'public');

        auth()->user()->adminProfile()->create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'dob' => $data['dob'],
            'address' => $data['address'],
            'gender' => $data['gender'],
            'image' =>$imagepath,
            
            
        ]);

        return redirect('dashboard');

        //\App\Models\Profile::create($data);
        //dd(request()->all());
    }

}
