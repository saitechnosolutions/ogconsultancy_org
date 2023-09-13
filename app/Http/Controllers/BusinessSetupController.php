<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusinessSetupController extends Controller
{
    public function index()
    {
        return view("pages.business_setup")->with("business_setup", "business_setup");
    }
}
