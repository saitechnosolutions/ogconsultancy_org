<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class ApiController extends Controller
{
    public function online_status(Request $request, $id)
    {

        
        return view("pages.job_description");
        // $json = [["success" => "success"]];
        // return Response::json($json, 200);
    }
}
