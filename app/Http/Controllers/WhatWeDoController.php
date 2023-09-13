<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WhatWeDoController extends Controller
{
    public function index()
    {
        return view("pages.what_we_do")->with("what_we_do", "what_we_do");
    }
}
