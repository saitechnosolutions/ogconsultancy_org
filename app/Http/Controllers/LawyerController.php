<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LawyerController extends Controller
{
    public function index()
    {
        return view("pages.lawyer")->with("lawyer", "lawyer");
    }
}
