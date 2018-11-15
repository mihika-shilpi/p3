<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SigController extends Controller
{
    public function index()
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

        return view('generate')->with([
            'jobs' => $jobs
        ]);
    }

    public function attempt(Request $request)
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

        $workConfirmation = false;

        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'digits:10',
            'title' => 'required',
            'workConfirmation' => 'accepted',
        ]);

        $name = $request->input('name', null);
        $email = $request->input('email', null);
        $phone = $request->input('phone', null);
        $title = $request->input('title', null);
        $workConfirmation = $request->input('workConfirmation', null);
        $submitted = $request->input('submitted', null);

        return view('generate')->with([
            'jobs' => $jobs,
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'title' => $title,
            'workConfirmation' => $workConfirmation,
            'submitted' => $submitted,
        ]);
    }

}
