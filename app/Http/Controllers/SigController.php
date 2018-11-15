<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SigController extends Controller
{
    public function index(Request $request)
    {
        $jobs = [
            'Please select' => '',
            'Partner' => 'Partner',
            'Interior Designer' => 'Interior Designer',
            'Architect' => 'Architect',
            '3D Designer' => '3D Designer',
            'Project Manager' => 'Project Manager',
            'Accountant' => 'Accountant',
        ];

        $generatedSig = $request->validate([
            'name' => 'required|alpha',
            'email' => 'required|email',
            'phone' => 'digits:10',
            'title' => 'required',
        ]);

        dump($request->all());


        return view('generate')->with([
            'jobs' => $jobs
        ]);
    }

}



