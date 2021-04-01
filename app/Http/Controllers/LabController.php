<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LabController extends Controller
{
    public function lab1Form()
    {
        return view('lab1');
    }

    public function lab2Form()
    {
        return view('lab2');
    }
}
