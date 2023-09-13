<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DirectorsController extends Controller
{
    public function index()
    {
        return view("pages.directors")->with("directors", "directors");
    }
}
